<?php

use Chenkacrud\Forms\FormValidationException;
use Chenkacrud\Services\SessionCredentialsException;
use Chenkacrud\Services\SessionService;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class SessionsController extends \BaseController {

    /**
     * @var Chenkacrud\Services\SessionService
     */
    protected $session;

    function __construct(SessionService $session)
    {
        $this->session = $session;
    }

    /**
     * @return string
     */
    public function create()
	{
        if(Auth::check()) {
            return Redirect::route('dashboard');
        }
        return View::make('sessions.login');
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
        Auth::logout();
        Session::flush();
        return Redirect::route('login');
	}

    /**
     * @return mixed
     */
    protected function sessionCreationSucceeds() {
        return Redirect::route('login');
    }

}
