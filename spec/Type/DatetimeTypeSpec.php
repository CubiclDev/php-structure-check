<?php

namespace spec\Cubicl\StructureCheck\Type;

use Cubicl\StructureCheck\Type\DatetimeType;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DatetimeTypeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->beConstructedWith('d-m-Y h:m:s', 'UTC');
        $this->shouldHaveType(DatetimeType::class);
    }

    function it_should_return_valid_for_correct_values()
    {
        $this->beConstructedWith('d-m-Y h:m:s', 'Europe/Berlin');

        $this->check('', '12-12-2012 12:12:10')->isValid()->shouldBe(true);
    }

    function it_should_return_invalid_for_others()
    {
        $this->beConstructedWith('d-m-Y h:m:s', 'Europe/Berlin');

        $this->check('', null)->isValid()->shouldBe(false);
        $this->check('', 'foo')->isValid()->shouldBe(false);
        $this->check('', [])->isValid()->shouldBe(false);
        $this->check('', 1.234)->isValid()->shouldBe(false);
        $this->check('', true)->isValid()->shouldBe(false);
        $this->check('', false)->isValid()->shouldBe(false);
    }
}
