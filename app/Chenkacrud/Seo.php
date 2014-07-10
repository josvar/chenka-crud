<?php namespace Chenkacrud;

use Eloquent;

class Seo extends Eloquent{

    protected $table = 'seo';

    public function seoable(){
        return $this->morphTo();
    }
} 