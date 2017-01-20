<?php

namespace spec\StructureCheck\Check;

use Prophecy\Argument;
use StructureCheck\Check\NumericRangeCheck;
use PhpSpec\ObjectBehavior;
use StructureCheck\ResultInterface;
use StructureCheck\Type\TypeInterface;

class NumericRangeCheckSpec extends ObjectBehavior
{

    function it_is_initializable(TypeInterface $child)
    {
        $this->beConstructedWith($child, 0, 1);

        $this->shouldHaveType(NumericRangeCheck::class);
    }

    function it_implements_type_interface(TypeInterface $child)
    {
        $this->beConstructedWith($child, 0, 1);

        $this->shouldImplement(TypeInterface::class);
    }

    function it_returns_a_result_on_invalid_child_check(TypeInterface $child, ResultInterface $result)
    {
        $result->isValid()->willReturn(false);
        $child->check(Argument::any())->willReturn($result);

        $this->beConstructedWith($child, 0, 1);

        $this->check(Argument::any())->shouldHaveType(ResultInterface::class);
    }

    function it_returns_a_result_on_check(TypeInterface $child, ResultInterface $result)
    {
        $result->isValid()->willReturn(true);
        $child->check(Argument::any())->willReturn($result);

        $this->beConstructedWith($child, 0, 1);

        $this->check(0)->shouldHaveType(ResultInterface::class);
    }
}
