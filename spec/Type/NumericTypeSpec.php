<?php

namespace spec\StructureCheck\Type;

use StructureCheck\Type\NumericType;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class NumericTypeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(NumericType::class);
    }

    function it_should_return_valid_for_integers()
    {
        $this->check(0)->isValid()->shouldBe(true);
        $this->check(1)->isValid()->shouldBe(true);
        $this->check(20)->isValid()->shouldBe(true);
        $this->check(-144)->isValid()->shouldBe(true);
    }

    function it_should_return_valid_for_floats()
    {
        $this->check(0.0)->isValid()->shouldBe(true);
        $this->check(1.1235)->isValid()->shouldBe(true);
        $this->check(-0.00001)->isValid()->shouldBe(true);
        $this->check(-144.12313131313)->isValid()->shouldBe(true);
    }

    function it_should_return_invalid_for_others()
    {
        $this->check(null)->isValid()->shouldBe(false);
        $this->check("foo")->isValid()->shouldBe(false);
        $this->check([])->isValid()->shouldBe(false);
        $this->check(true)->isValid()->shouldBe(false);
        $this->check(false)->isValid()->shouldBe(false);
    }
}
