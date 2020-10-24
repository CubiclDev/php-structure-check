<?php

declare(strict_types=1);

namespace spec\Cubicl\StructureCheck\Type;

use Cubicl\StructureCheck\Type\AnyType;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AnyTypeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(AnyType::class);
    }

    function it_should_return_valid_for_null()
    {
        $this->check('', null)->isValid()->shouldBe(true);
    }

    function it_should_return_empty_errors_for_null()
    {
        $this->check('', null)->getErrors()->shouldHaveCount(0);
    }

    function it_should_return_valid_for_all_values()
    {
        $this->check('', true)->isValid()->shouldBe(true);
        $this->check('', "foo")->isValid()->shouldBe(true);
        $this->check('', 13)->isValid()->shouldBe(true);
    }

    function it_should_return_empty_errors_for_all_values()
    {
        $this->check('', true)->getErrors()->shouldHaveCount(0);
        $this->check('', "foo")->getErrors()->shouldHaveCount(0);
        $this->check('', 13)->getErrors()->shouldHaveCount(0);
    }
}
