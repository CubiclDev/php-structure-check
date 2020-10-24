<?php

declare(strict_types=1);

namespace spec\Cubicl\StructureCheck\Type;

use Cubicl\StructureCheck\Type\ListType;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Cubicl\StructureCheck\Type\TypeInterface;

class ListTypeSpec extends ObjectBehavior
{
    function it_is_initializable(TypeInterface $childType)
    {
        $this->beConstructedWith($childType);
        $this->shouldHaveType(ListType::class);
    }
}
