<?php namespace Chenkacrud\Forms;

use Illuminate\Support\MessageBag;

class FormValidationException extends \Exception {

    /**
     * @var \Illuminate\Support\MessageBag
     */
    protected $errors;

    /**
     * @param $message
     * @param MessageBag $errors
     */
    function __construct($message, MessageBag $errors)
    {
        $this->errors = $errors;

        parent::__construct($message);
    }

    /**
     * @return MessageBag
     */
    public function getErrors()
    {
        return $this->errors;
    }

} 