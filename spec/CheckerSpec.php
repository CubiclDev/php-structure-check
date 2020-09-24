<?php

namespace spec\Cubicl\StructureCheck;

use PhpSpec\ObjectBehavior;
use Cubicl\StructureCheck\Checker;
use Cubicl\StructureCheck\ResultInterface;
use Cubicl\StructureCheck\Type\TypeInterface;

class CheckerSpec extends ObjectBehavior
{
    function it_is_initializable(): void
    {
        $this->shouldHaveType(Checker::class);
    }

    function it_returns_the_result_of_the_type_in_fulfills(TypeInterface $type, ResultInterface $result): void
    {
        $type->check([])->willReturn($result);
        $this->fulfills([], $type)->shouldBe($result);
    }
}
