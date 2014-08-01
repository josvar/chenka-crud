<?php namespace Backend;

use Chenkacrud\Forms\FormValidationException;
use Chenkacrud\Services\SessionCredentialsException;
use Chenkacrud\Services\SessionService;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Auth, View, URL, Session;

class SessionController extends \BaseController {

    /**
     * @var \Chenkacrud\Services\SessionService
     */
    protected $session;

    function __construct(SessionService $session)
    {
        $this->beforeFilter('backend.guest', array('except' => 'destroy'));
        $this->session = $session;
    }

    /**
     * @return string
     */
    public function create()
	{
        return View::make('backend.session.login');
	}

    /**
     * @return mixed
     */
    public function store() {

        try {
            $this->session->create( Input::all() );
        }
        catch( FormValidationException $e ) {
            return Redirect::back()->withErrors($e->getErrors())->withInput();
        }
        catch(SessionCredentialsException $e) {
            return Redirect::back()->with([
                'flash_message' => $e->getMessage(),
                'flash_important' => true
            ])->withInput();
        }

        return $this->sessionCreationSucceeds();

	}

    /**
     * @return mixed
     */
    public function destroy()
	{
        //tododev: deberia ir en SessionService
        Auth::logout();
        Session::flush();
        return Redirect::route('backend.login');
	}

    /**
     * @return mixed
     */
    protected function sessionCreationSucceeds() {
        return Redirect::intended( URL::route('backend.dashboard') );
    }

}
