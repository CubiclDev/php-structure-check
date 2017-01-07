<?php

namespace spec\StructureCheck\Type;

use StructureCheck\Type\StringType;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class StringTypeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(StringType::class);
    }
}
