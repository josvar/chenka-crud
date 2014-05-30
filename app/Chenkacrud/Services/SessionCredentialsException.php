<?php namespace Chenkacrud\Services;

class SessionCredentialsException extends \Exception{

    /**
     * @param string $message
     */
    function __construct($message)
    {
        parent::__construct($message);
    }
}