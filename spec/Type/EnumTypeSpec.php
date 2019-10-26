<?php

namespace spec\Cubicl\StructureCheck\Type;

use Cubicl\StructureCheck\Type\EnumType;
use PhpSpec\ObjectBehavior;

class EnumTypeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->beConstructedWith(['test', 1, null]);

        $this->shouldHaveType(EnumType::class);
    }

    function it_is_valid_for_all_allowed_values()
    {
        $this->beConstructedWith(['test', 1, null]);

        $this->check('', 'test')->isValid()->shouldBe(true);
        $this->check('', 1)->isValid()->shouldBe(true);
        $this->check('', null)->isValid()->shouldBe(true);
    }

    function it_is_invalid_for_not_allowed_values()
    {
        $this->beConstructedWith(['test', 1, null]);

        $this->check('', 'array')->isValid()->shouldBe(false);
        $this->check('', 100)->isValid()->shouldBe(false);
        $this->check('', 1.5)->isValid()->shouldBe(false);
        $this->check('', ['test'])->isValid()->shouldBe(false);
    }
}
