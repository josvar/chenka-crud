<?php namespace Chenkacrud\Seo;

use Chenkacrud\Seo\Exceptions\SeoWithoutTitleException;
use Chenkacrud\Seo\Meta\Meta;
use Chenkacrud\Seo\Meta\MetaTitle;

class SeoData {

    /**
     * @var StrategyStore
     */
    protected $engineStore;

    /**
     * @var MetaTitle
     */
    protected $title = null;
    protected $metas = array();

    function __construct(StrategyStore $engine = null)
    {
        $this->resolveEngineStrategy($engine);
    }

    /**
     * @param MetaTitle $title
     */
    public function setTitle(MetaTitle $title)
    {
        $this->title = $title;
    }

    /**
     * @param Meta $meta
     */
    public function addMeta(Meta $meta)
    {
        $this->metas[] = $meta;
    }

    /**
     * @return MetaTitle
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return array
     */
    public function getMetas()
    {
        return $this->metas;
    }


    /**
     * Si no un titulo seteado lanza expection
     * @throws SeoWithoutTitleException
     * @return String
     */
    public function encode()
    {
        if( $this->title === null ) throw new SeoWithoutTitleException();
        $dataToEncode = array();
        $dataToEncode['title'] = $this->title->getTitle();

        $dataToEncode['metas'] = $this->getMetasToEncode();

        return $this->engineStore->encode($dataToEncode);
    }

    /**
     * @param $data
     * @param StrategyStore $engine
     * @return SeoData
     */
    static public function hydrate($data, StrategyStore $engine = null)
    {
        $seoData = new self();
        $seoData->resolveEngineStrategy($engine);
        $seoData->decode($data);

        return $seoData;
    }

    /**
     * @param $data
     */
    protected function decode($data)
    {
        $dataDecoded = $this->engineStore->decode($data);

        $this->setTitle(new MetaTitle($dataDecoded['title']));

        foreach ($dataDecoded['metas'] as $metaAttr)
        {
            $this->addMeta(new Meta($metaAttr));
        }
    }

    /**
     * @param StrategyStore $engine
     */
    protected function resolveEngineStrategy(StrategyStore $engine = null)
    {
        if ($engine === null)
            $engine = new JsonStore();
        $this->engineStore = $engine;
    }

    /**
     * @return array
     */
    protected function getMetasToEncode()
    {
        $metasToEncode = array();
        foreach ($this->metas as $meta)
        {
            $metasToEncode[] = $meta->getAttributes();
        }
        return $metasToEncode;
    }
}