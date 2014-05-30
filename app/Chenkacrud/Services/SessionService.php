<?php namespace Chenkacrud\Services;

use Chenkacrud\Forms\LoginForm;
use Illuminate\Support\Facades\Auth;

class SessionService {

    /**
     * @var \Chenkacrud\Forms\LoginForm
     */
    protected $loginForm;

    /**
     * @param LoginForm $loginForm
     */
    function __construct(LoginForm $loginForm) {
        $this->loginForm = $loginForm;
    }

    /**
     * @param array $data
     * @throws FormValidationException
     * @throws SessionCredentialsException
     */
    public function create( array $data ) {

        $this->loginForm->validate($data);

        // If valid
        $attempt = Auth::attempt([
            'email' => $data['email'],
            'password' => $data['password']
        ]);

        // If logging in
        if( ! $attempt ) {
            throw new SessionCredentialsException('Invalid Credential');
        }

    }
} 