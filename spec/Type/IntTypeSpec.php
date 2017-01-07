<?php

namespace spec\StructureCheck\Type;

use StructureCheck\Type\IntType;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class IntTypeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(IntType::class);
    }
}
