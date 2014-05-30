<?php namespace Chenkacrud\Forms;

class LoginForm extends FormValidator {

    /**
     * Validation rules for logging in
     *
     * @var array
     */
    protected $rules = [
        'email' => 'required|email',
        'password' => 'required'
    ];

}