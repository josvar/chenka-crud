<?php namespace Chenkacrud\Seo;

class JsonStore implements StrategyStore {

    /**
     * @param array $data
     * @return String
     */
    public function encode(array $data)
    {
        return json_encode($data, JSON_UNESCAPED_UNICODE);
    }

    /**
     * @param string $data
     * @return mixed
     */
    public function decode($data)
    {
        return json_decode($data, true);
    }
}