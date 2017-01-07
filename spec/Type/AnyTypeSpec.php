<?php

namespace spec\StructureCheck\Type;

use StructureCheck\Type\AnyType;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AnyTypeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(AnyType::class);
    }
}
