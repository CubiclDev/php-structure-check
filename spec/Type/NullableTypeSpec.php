<?php

namespace spec\Cubicl\StructureCheck\Type;

use Cubicl\StructureCheck\Result;
use Cubicl\StructureCheck\Type\NullableType;
use PhpSpec\ObjectBehavior;
use Cubicl\StructureCheck\Type\TypeInterface;

class NullableTypeSpec extends ObjectBehavior
{
    function it_is_initializable(TypeInterface $childType)
    {
        $this->beConstructedWith($childType);
        $this->shouldHaveType(NullableType::class);
    }

    function it_should_return_valid_for_null(TypeInterface $childType) {
        $this->beConstructedWith($childType);
        $this->check('', null)->isValid()->shouldBe(true);
    }

    function it_should_return_the_value_from_the_child(TypeInterface $childType) {
        $this->beConstructedWith($childType);
        $childType->check('', false)->willReturn(new Result(false, []));
        $this->check('', false)->isValid()->shouldBe(false);
    }
}
