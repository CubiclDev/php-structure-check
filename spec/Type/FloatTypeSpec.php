<?php

namespace spec\Cubicl\StructureCheck\Type;

use Cubicl\StructureCheck\Type\FloatType;
use PhpSpec\ObjectBehavior;

class FloatTypeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(FloatType::class);
    }

    function it_should_return_valid_for_floats()
    {
        $this->check(0.0)->isValid()->shouldBe(true);
        $this->check(1.1)->isValid()->shouldBe(true);
        $this->check(2.0)->isValid()->shouldBe(true);
        $this->check(-144.2)->isValid()->shouldBe(true);
    }

    function it_should_return_invalid_for_others()
    {
        $this->check(null)->isValid()->shouldBe(false);
        $this->check("foo")->isValid()->shouldBe(false);
        $this->check([])->isValid()->shouldBe(false);
        $this->check(1)->isValid()->shouldBe(false);
        $this->check(true)->isValid()->shouldBe(false);
        $this->check(false)->isValid()->shouldBe(false);
    }
}
