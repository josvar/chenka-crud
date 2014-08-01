<?php namespace Chenkacrud\Seo;

interface StrategyStore {

    /**
     * @param array $data
     * @return String
     */
    public function encode(array $data);

    /**
     * @param string $data
     * @return mixed
     */
    public function decode($data);

} 