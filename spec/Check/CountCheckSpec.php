<?php

namespace spec\Cubicl\StructureCheck\Check;

use Cubicl\StructureCheck\Check\CountCheck;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Cubicl\StructureCheck\ResultInterface;
use Cubicl\StructureCheck\Type\TypeInterface;

class CountCheckSpec extends ObjectBehavior
{
    function it_is_initializable(TypeInterface $child)
    {
        $this->beConstructedWith($child, 1);

        $this->shouldHaveType(CountCheck::class);
    }

    function it_implements_type_interface(TypeInterface $child)
    {
        $this->beConstructedWith($child, 1);

        $this->shouldImplement(TypeInterface::class);
    }

    function it_returns_a_result_on_invalid_child_check(TypeInterface $child, ResultInterface $result)
    {
        $result->isValid()->willReturn(false);
        $child->check('', Argument::any())->willReturn($result);

        $this->beConstructedWith($child, 1);

        $this->check('', [])->shouldHaveType(ResultInterface::class);
    }

    function it_returns_a_result_on_check(TypeInterface $child, ResultInterface $result)
    {
        $result->isValid()->willReturn(true);
        $child->check('', Argument::any())->willReturn($result);

        $this->beConstructedWith($child, 1);

        $this->check('', [3])->shouldHaveType(ResultInterface::class);
    }
}
