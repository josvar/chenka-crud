<?php namespace Chenkacrud\Repositories\Seo;

use Chenkacrud\Repositories\DbRepository;
use Chenkacrud\Seo;

class DbSeoRepository extends DbRepository implements SeoRepositoryInterface {

    /**
     * @var Seo
     */
    protected $model;

    /**
     * @param Seo $model
     */
    function __construct(Seo $model)
    {
        $this->model = $model;
    }
}