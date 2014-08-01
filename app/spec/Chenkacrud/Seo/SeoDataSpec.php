<?php namespace spec\Chenkacrud\Seo;

use Chenkacrud\Seo\Meta\Meta;
use Chenkacrud\Seo\Meta\MetaTitle;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SeoDataSpec extends ObjectBehavior {

    function it_is_initializable()
    {
        $this->shouldHaveType('Chenkacrud\Seo\SeoData');
    }

    function it_store_a_title(MetaTitle $title)
    {
        $this->setTitle($title);

        $this->getTitle()->shouldReturnAnInstanceOf('Chenkacrud\Seo\Meta\MetaTitle');
        $this->getTitle()->shouldReturn($title);
    }

    function it_stores_a_collection_of_metas(Meta $meta1, Meta $meta2, Meta $meta3)
    {
        $this->addMeta($meta1);
        $this->addMeta($meta2);

        $metas = $this->getMetas();
        $metas->shouldHaveCount(2);
        $metas->shouldHaveValue($meta1);
        $metas->shouldHaveValue($meta2);
        $metas->shouldNotHaveValue($meta3);
    }
    function it_should_not_allow_encode_without_title(Meta $meta) {
        $titleParam = '';
        $attr = [
            'property' => 'og:title',
            'content'  => 'mi titulo para one og without title'
        ];
        $meta->getAttributes()->willReturn($attr);

        $this->addMeta($meta);

        $this->shouldThrow('Chenkacrud\Seo\Exceptions\SeoWithoutTitleException')->duringEncode();

    }

    function it_can_encode_and_hydrate_with_title_without_metas(MetaTitle $title)
    {
        $titleParam = 'mi title para one meta';

        $title->getTitle()->willReturn($titleParam);

        $this->setTitle($title);

        $dataEncoded = $this->encode();
        $dataEncoded->shouldBeString();

        $hydrated = $this::hydrate($dataEncoded);
        $hydrated->shouldBeAnInstanceOf('Chenkacrud\Seo\SeoData');
        $hydrated->shouldHaveTitle($titleParam);
        $hydrated->shouldHaveMetas([]);
    }

    function it_can_encode_and_hydrate_with_title_and_one_meta(MetaTitle $title, Meta $meta)
    {
        $titleParam = 'mi title para one meta';
        $attr = [
            'property' => 'og:title',
            'content'  => 'mi titulo para one og'
        ];
        $title->getTitle()->willReturn($titleParam);
        $meta->getAttributes()->willReturn($attr);

        $this->setTitle($title);
        $this->addMeta($meta);

        $dataEncoded = $this->encode();
        $dataEncoded->shouldBeString();

        $hydrated = $this::hydrate($dataEncoded);
        $hydrated->shouldBeAnInstanceOf('Chenkacrud\Seo\SeoData');
        $hydrated->shouldHaveTitle($titleParam);
        $hydrated->shouldHaveMetas([$attr]);
    }

    function it_can_encode_and_hydrate_with_title_multiple_metas(MetaTitle $title, Meta $meta1, Meta $meta2, Meta $meta3)
    {

        $titleParam = 'mi title';
        $attr1 = [
            'property' => 'og:title',
            'content'  => 'mi titulo 1 para og'
        ];

        $attr2 = [
            'property' => 'og:title',
            'content'  => 'mi titulo 2 para og'
        ];

        $attr3 = [
            'name'    => 'twitter:card',
            'content' => 'summary'
        ];

        $title->getTitle()->willReturn($titleParam);
        $meta1->getAttributes()->willReturn($attr1);
        $meta2->getAttributes()->willReturn($attr2);
        $meta3->getAttributes()->willReturn($attr3);

        $this->setTitle($title);
        $this->addMeta($meta1);
        $this->addMeta($meta2);
        $this->addMeta($meta3);

        $dataEncoded = $this->encode();
        $dataEncoded->shouldBeString();

        $SeoHydrated = $SeoHydrated = $this::hydrate($dataEncoded);
        $SeoHydrated->shouldBeAnInstanceOf('Chenkacrud\Seo\SeoData');
        $SeoHydrated->shouldHaveTitle($titleParam);
        $SeoHydrated->shouldHaveMetas([$attr1, $attr2, $attr3]);
    }

    public function getMatchers()
    {
        return [
            'haveValue' => function ($subject, $value)
            {
                return in_array($value, $subject);
            },
            'haveTitle' => function ($subject, $value)
            {
                return $subject->getTitle()->getTitle() == $value;
            },
            'haveMetas' => function ($subject, $value)
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
