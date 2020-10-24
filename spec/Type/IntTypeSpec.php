<?php

declare(strict_types=1);

namespace spec\Cubicl\StructureCheck\Type;

use Cubicl\StructureCheck\Type\IntType;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class IntTypeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(IntType::class);
    }

    function it_should_return_valid_for_integers()
    {
        $this->check('', 0)->isValid()->shouldBe(true);
        $this->check('', 1)->isValid()->shouldBe(true);
        $this->check('', 20)->isValid()->shouldBe(true);
        $this->check('', -144)->isValid()->shouldBe(true);
    }

    function it_should_return_invalid_for_others()
    {
        $this->check('', null)->isValid()->shouldBe(false);
        $this->check('', "foo")->isValid()->shouldBe(false);
        $this->check('', [])->isValid()->shouldBe(false);
        $this->check('', 1.234)->isValid()->shouldBe(false);
        $this->check('', true)->isValid()->shouldBe(false);
        $this->check('', false)->isValid()->shouldBe(false);
    }
}
