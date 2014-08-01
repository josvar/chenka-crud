<?php namespace Chenkacrud\Seo\Meta;

use InvalidArgumentException;

class Meta {

    /**
     * @var array
     */
    protected $attributes;

    /**
     * Create a new Meta instance. Los valores de los attributos solo pueden ser string
     *
     * @param array $attributes
     */
    function __construct(array $attributes = [])
    {
        foreach ($attributes as $attr)
            if ( ! is_string($attr)) throw new InvalidArgumentException();

        $this->attributes = $attributes;
    }

    /**
     * @return array
     */
    public function getAttributes()
    {
        return $this->attributes;
    }
}