<?php

namespace spec\Cubicl\StructureCheck\Type;

use Cubicl\StructureCheck\Type\ExactValueType;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ExactValueTypeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->beConstructedWith(null);
        $this->shouldHaveType(ExactValueType::class);
    }

    function it_is_valid_for_null_if_null_is_the_value()
    {
        $this->beConstructedWith(null);
        $this->check('', null)->isValid()->shouldBe(true);
    }
}
