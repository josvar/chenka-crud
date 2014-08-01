<?php

namespace spec\Chenkacrud\Seo;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SeoDataBuilderSpec extends ObjectBehavior {

    function it_is_initializable()
    {
        $this->shouldHaveType('Chenkacrud\Seo\SeoDataBuilder');
    }

    function it_can_build_seo_with_only_title()
    {

        $title = 'foo';
        $this->buildSeoData();
        $this->addTitle($title);
        $this->getResult()->shouldHaveTitleEqualTo($title);
    }

    function it_can_build_seo_with_title_and_metas()
    {
        $title = 'bar';

        $metaAttr1 = [
            'mame'    => 'og:title',
            'content' => 'bar to og'
        ];
        $metaAttr2 = [
            'mame'    => 'og:description',
            'content' => 'segundo meta'
        ];

        $this->buildSeoData();
        $this->addTitle($title);
        $this->addMeta($metaAttr1);
        $this->addMeta($metaAttr2);

        $result = $this->getResult();

        $result->shouldHaveTitleEqualTo($title);
        $result->shouldHaveMetasAttrEqualTo([$metaAttr1, $metaAttr2]);
    }

    public function it_should_not_allow_null_title()
    {
        $this->buildSeoData();
        $this->shouldThrow('\InvalidArgumentException')->duringAddTitle(null);
    }

    public function it_should_not_allow_invalid_attributes()
    {
        $title = 'bar';

        $metaAttr1 = [
            'mame'    => 'og:title',
            'content' => null
        ];
        $metaAttr2 = [
            'mame'    => 'og:description',
            'content' => array('nada', 'por', 'aca')
        ];

        $this->buildSeoData();
        $this->addTitle($title);
        $this->shouldThrow('\InvalidArgumentException')->duringAddMeta($metaAttr1);
        $this->shouldThrow('\InvalidArgumentException')->duringAddMeta($metaAttr2);

    }

    public function getMatchers()
    {
        return [
            'haveTitleEqualTo'     => function ($subject, $value)
            {
                return $subject->getTitle()->getTitle() == $value;
            },
            'haveMetasAttrEqualTo' => function ($subject, $value)
            {
                $metas = array();
                foreach ($subject->getMetas() as $meta)
                {
                    $metas[] = $meta->getAttributes();
                }

                return $metas == $value;
            }
        ];
    }
}
