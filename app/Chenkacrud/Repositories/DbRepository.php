<?php namespace Chenkacrud\Repositories;

abstract class DbRepository {

    /**
     * @var Eloquent mode
     */
    protected $model;

    /**
     * @param $model
     */
    function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getById($id)
    {
        return $this->model->find($id);
    }
}