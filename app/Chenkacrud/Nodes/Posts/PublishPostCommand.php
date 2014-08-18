<?php namespace Chenkacrud\Nodes\Posts;

class PublishPostCommand {

    /**
     * @var
     */
    public $main;

    /**
     * @var
     */
    public $seo_tags;

    /**
     * @var
     */
    public $modules;

    /**
     * @param $main
     * @param $modules
     * @param $seo_tags
     */
    function __construct($main, $modules, $seo_tags)
    {
        $this->main = $main;
        $this->modules = $modules;
        $this->seo_tags = $seo_tags;
    }

} 