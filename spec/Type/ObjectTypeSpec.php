<?php

namespace spec\StructureCheck\Type;

use StructureCheck\Type\ObjectType;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ObjectTypeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(ObjectType::class);
    }
}
