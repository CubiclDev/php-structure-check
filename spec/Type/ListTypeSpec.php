<?php

namespace spec\StructureCheck\Type;

use StructureCheck\Type\ListType;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use StructureCheck\Type\TypeInterface;

class ListTypeSpec extends ObjectBehavior
{
    function it_is_initializable(TypeInterface $childType)
    {
        $this->beConstructedWith($childType);
        $this->shouldHaveType(ListType::class);
    }
}
