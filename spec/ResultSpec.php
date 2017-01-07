<?php

namespace spec\StructureCheck;

use StructureCheck\Result;
use PhpSpec\ObjectBehavior;

class ResultSpec extends ObjectBehavior
{
    function let() {
        $this->beConstructedWith(true, []);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Result::class);
    }
}
