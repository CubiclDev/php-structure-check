<?php

namespace spec\Cubicl\StructureCheck\Type;

use Cubicl\StructureCheck\Type\ObjectType;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Cubicl\StructureCheck\Type\TypeInterface;

class ObjectTypeSpec extends ObjectBehavior
{
    function it_is_initializable(TypeInterface $childType)
    {
        $this->beConstructedWith([$childType]);
        $this->shouldHaveType(ObjectType::class);
    }
}
