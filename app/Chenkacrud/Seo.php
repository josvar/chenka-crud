<?php namespace Chenkacrud;

use Eloquent;

class Seo extends Eloquent{

    protected $table = 'seo';

    public function node(){
        return $this->belongsTo('Chenkacrud\Node', 'node_id');
    }
} 