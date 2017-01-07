<?php

namespace spec\StructureCheck\Type;

use StructureCheck\Type\FloatType;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FloatTypeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(FloatType::class);
    }
}
