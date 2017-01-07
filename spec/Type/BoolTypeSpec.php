<?php

namespace spec\StructureCheck\Type;

use StructureCheck\Type\BoolType;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BoolTypeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(BoolType::class);
    }
}
