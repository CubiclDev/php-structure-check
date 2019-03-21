<?php

namespace spec\Cubicl\StructureCheck;

use PhpSpec\ObjectBehavior;
use Cubicl\StructureCheck\Result;

class ResultSpec extends ObjectBehavior
{

    function it_is_initializable()
    {
        $this->beConstructedWith(true, []);
        $this->shouldHaveType(Result::class);
    }

    function it_will_return_is_valid_if_it_was_set_in_constructor()
    {
        $this->beConstructedWith(true, []);
        $this->isValid()->shouldBe(true);
    }

    function it_will_return_is_invalid_if_it_was_set_in_constructor()
    {
        $this->beConstructedWith(false, []);
        $this->isValid()->shouldBe(false);
    }

    function it_will_return_an_empty_array_if_no_error_list_is_given()
    {
        $this->beConstructedWith(true);
        $this->getErrors()->shouldHaveCount(0);
    }
}
