<?php namespace Chenkacrud;

use Eloquent;

class NodeType extends Eloquent {

    protected $table = 'node_type';

    public function nodes()
    {
        return $this->hasMany('Node');
    }
} 