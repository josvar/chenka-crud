<?php namespace Chenkacrud\Seo;

use Chenkacrud\Seo\Meta\Meta;
use Chenkacrud\Seo\Meta\MetaTitle;

class SeoDataBuilder implements BuilderInterface {

    protected $engine;
    /**
     * @var SeoData
     */
    protected $seoData = null;

    public function buildSeoData()
    {
        $this->seoData = new SeoData(new JsonStore());
    }

    /**
     * @param string $data
     */
    public function hydrate($data)
    {
        $this->seoData = SeoData::hydrate($data, new JsonStore());
    }

    /**
     * @param string $title
     */
    public function addTitle($title)
    {
        $this->seoData->setTitle(new MetaTitle($title));
    }

    /**
     * @param array $attributes
     */
    public function addMeta(array $attributes)
    {
        $this->seoData->addMeta(new Meta($attributes));
    }

    /**
     * @return SeoData
     */
    public function getResult()
    {
        return $this->seoData;
    }
}
