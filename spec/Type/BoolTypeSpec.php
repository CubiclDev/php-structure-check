<?php

namespace spec\Cubicl\StructureCheck\Type;

use PhpSpec\ObjectBehavior;
use Cubicl\StructureCheck\Type\BoolType;

class BoolTypeSpec extends ObjectBehavior
{

    function it_is_initializable()
    {
        $this->shouldHaveType(BoolType::class);
    }

    function it_should_return_valid_for_bool()
    {
        $this->check(true)->isValid()->shouldBe(true);
        $this->check(false)->isValid()->shouldBe(true);
    }

    function it_should_return_invalid_for_others()
    {
        $this->check(null)->isValid()->shouldBe(false);
        $this->check("foo")->isValid()->shouldBe(false);
        $this->check([])->isValid()->shouldBe(false);
        $this->check(1)->isValid()->shouldBe(false);
        $this->check(1.0)->isValid()->shouldBe(false);
    }
}
