<?php

namespace spec\StructureCheck\Type;

use StructureCheck\Result;
use StructureCheck\Type\OptionalType;
use PhpSpec\ObjectBehavior;
use StructureCheck\Type\TypeInterface;

class OptionalTypeSpec extends ObjectBehavior
{
    function it_is_initializable(TypeInterface $childType)
    {
        $this->beConstructedWith($childType);
        $this->shouldHaveType(OptionalType::class);
    }

    function it_should_return_the_value_from_the_child(TypeInterface $childType) {
        $this->beConstructedWith($childType);
        $childType->check(false)->willReturn(new Result(false, []));
        $this->check(false)->isValid()->shouldBe(false);
    }
}
