<?php namespace Chenkacrud\Seo;

class SeoDataCreator {

    /**
     * @var BuilderInterface
     */
    protected $builder;

    /**
     * @param BuilderInterface $builder
     */
    function __construct(BuilderInterface $builder)
    {
        $this->builder = $builder;
    }


    /**
     * @param array $data
     * @param BuilderInterface|null $builder
     * @return BuilderInterface
     */
    public function create(array $data, BuilderInterface $builder = null)
    {
       if($builder === null )
           $this->builder = $builder;

        $this->builder->buildSeoData();

        //tododev: aca va el loop para agregar los meta y el title, viene desde un Input

        return $this->builder;
    }

    /**
     * @param string $data
     * @param BuilderInterface|null $builder
     * @return BuilderInterface
     */
    public function load($data, BuilderInterface $builder = null)
    {
        if( $builder === null )
            $this->builder = $builder;

        $this->builder->hydrate($data);
        return $this->builder;
    }

}