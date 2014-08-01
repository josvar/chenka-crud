<?php namespace Chenkacrud\Seo;

interface BuilderInterface {

    /**
     * @param string $title
     * @return void
     */
    public function addTitle($title);

    /**
     * @param array $attributes
     * @return void
     */
    public function addMeta(array $attributes);

    /**
     * @return void
     */
    public function buildSeoData();

    /**
     * @param string $data
     * @return void
     */
    public function hydrate($data);

}
