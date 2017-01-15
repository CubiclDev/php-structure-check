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
        $this->beConstructedWith($child);

        $this->shouldHaveType(NumericRangeCheck::class);
    }

    function it_implements_check_interface(TypeInterface $child)
    {
        $this->beConstructedWith($child);

        $this->shouldImplement(TypeInterface::class);
    }

    function it_returns_a_result_on_check(TypeInterface $child)
    {
        $this->beConstructedWith($child);

        $this->check(Argument::any())->shouldHaveType(ResultInterface::class);
    }
}
