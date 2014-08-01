<?php namespace Chenkacrud;

use Eloquent;

class Node extends Eloquent{

    protected $table = 'node';

    protected $primaryKey = 'nid';

    public function seo()
    {
        return $this->hasOne('Chenkacrud\Seo');
    }

    public function nodeType()
    {
        return $this->belongsTo('Chenkacrud\NodeType', 'type');
    }

} 