<?php

declare(strict_types=1);

namespace spec\Cubicl\StructureCheck\Type;

use PhpSpec\ObjectBehavior;
use Cubicl\StructureCheck\Type\RegexType;

class RegexTypeSpec extends ObjectBehavior
{

    function it_is_initializable(): void
    {
        $this->beConstructedWith('/^def/');

        $this->shouldHaveType(RegexType::class);
    }

    function it_should_return_valid_for_matching_strings(): void
    {
        $this->beConstructedWith('/^def/');

        $this->check('', 'definitive')->isValid()->shouldBe(true);
    }

    function it_should_return_invalid_for_not_matching_strings(): void
    {
        $this->beConstructedWith('/^def/');

        $this->check('', 'developers')->isValid()->shouldBe(false);
    }

    function it_should_return_invalid_for_others(): void
    {
        $this->beConstructedWith('/^def/');

        $this->check('', null)->isValid()->shouldBe(false);
        $this->check('', 12.3)->isValid()->shouldBe(false);
        $this->check('', [])->isValid()->shouldBe(false);
        $this->check('', -1)->isValid()->shouldBe(false);
        $this->check('', true)->isValid()->shouldBe(false);
    }
}
