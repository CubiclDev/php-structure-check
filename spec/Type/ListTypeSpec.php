<?php

namespace spec\StructureCheck\Type;

use StructureCheck\Type\ListType;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ListTypeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(ListType::class);
    }
}
