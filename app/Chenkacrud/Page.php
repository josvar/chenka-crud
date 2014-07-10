<?php namespace Chenkacrud;

use Eloquent;

class Page extends Eloquent{

    protected $table = 'page';

    public function seo()
    {
        return $this->morphOne('Seo', 'seoable');
    }

} 