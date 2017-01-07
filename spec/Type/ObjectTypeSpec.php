<?php

namespace spec\StructureCheck\Type;

use StructureCheck\Type\ObjectType;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use StructureCheck\Type\TypeInterface;

class ObjectTypeSpec extends ObjectBehavior
{
    function it_is_initializable(TypeInterface $childType)
    {
        $this->beConstructedWith([$childType]);
        $this->shouldHaveType(ObjectType::class);
    }
}
