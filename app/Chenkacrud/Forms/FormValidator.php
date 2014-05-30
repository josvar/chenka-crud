<?php namespace Chenkacrud\Forms;

use Illuminate\Validation\Factory as Validator;

abstract class FormValidator {

    /**
     * @var Validator
     */
    protected $validator;

    /**
     * @var
     */
    protected $validation;

    /**
     * @param Validator $validator
     */
    function __construct(Validator $validator)
    {
        $this->validator = $validator;
    }

    /**
     * @param array $formData
     * @return bool
     * @throws FormValidationException
     */
    public function validate(array $formData)
    {
        $this->validation = $this->validator->make($formData, $this->getValidationRules());

        if($this->validation->fails())
        {
            throw new FormValidationException('Validation failed', $this->getValidationsErrors());
        }
        return true;
    }

    /**
     * @return mixed
     */
    protected function getValidationRules()
    {
        return $this->rules;
    }

    /**
     * @return mixed
     */
    protected function getValidationsErrors()
    {
        return $this->validation->errors();
    }
}