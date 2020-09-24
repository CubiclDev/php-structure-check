<?php

namespace spec\Cubicl\StructureCheck\Type;

use Cubicl\StructureCheck\Type\StringType;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class StringTypeSpec extends ObjectBehavior
{
    function it_is_initializable(): void
    {
        $this->shouldHaveType(StringType::class);
    }

    function it_should_return_valid_for_strings(): void
    {
        $this->check("")->isValid()->shouldBe(true);
        $this->check("fooo")->isValid()->shouldBe(true);
        $this->check('adadsad asd a')->isValid()->shouldBe(true);
    }

    function it_should_return_invalid_for_others(): void
    {
        $this->check(null)->isValid()->shouldBe(false);
        $this->check(12.3)->isValid()->shouldBe(false);
        $this->check([])->isValid()->shouldBe(false);
        $this->check(-1)->isValid()->shouldBe(false);
        $this->check(true)->isValid()->shouldBe(false);
    }
}
