<?php

namespace spec\StructureCheck;

use PhpSpec\ObjectBehavior;
use StructureCheck\Checker;
use StructureCheck\ResultInterface;
use StructureCheck\Type\TypeInterface;

class CheckerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Checker::class);
    }

    function it_accepts_a_type_and_an_array_as_parameter_for_fulfills(TypeInterface $type)
    {
        $this->fulfills([], $type);
    }

    function it_returns_the_result_of_the_type_in_fulfills(TypeInterface $type, ResultInterface $result)
    {
        $type->check([])->willReturn($result);
        $this->fulfills([], $type)->shouldBe($result);
    }
}
