<?php

declare(strict_types=1);

namespace spec\Cubicl\StructureCheck\Type;

use Cubicl\StructureCheck\Result;
use Cubicl\StructureCheck\Type\OptionalType;
use PhpSpec\ObjectBehavior;
use Cubicl\StructureCheck\Type\TypeInterface;

class OptionalTypeSpec extends ObjectBehavior
{
    function it_is_initializable(TypeInterface $childType): void
    {
        $this->beConstructedWith($childType);
        $this->shouldHaveType(OptionalType::class);
    }

    function it_should_return_the_value_from_the_child(TypeInterface $childType): void
    {
        $this->beConstructedWith($childType);
        $childType->check('', false)->willReturn(new Result(false, []));
        $this->check('', false)->isValid()->shouldBe(false);
    }
}
