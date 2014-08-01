<?php namespace Chenkacrud\Seo\Meta;

use InvalidArgumentException;

class MetaTitle {

    /**
     * @var string
     */
    protected $title;

    /**
     * @param $title
     */
    function __construct($title)
    {
        if ( ! is_string($title)) throw new InvalidArgumentException();
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function toString()
    {
        return (string) $this->title;
    }
}