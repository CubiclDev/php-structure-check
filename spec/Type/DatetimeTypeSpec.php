<?php

namespace spec\Cubicl\StructureCheck\Type;

use Cubicl\StructureCheck\Type\DatetimeType;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DatetimeTypeSpec extends ObjectBehavior
{
    public function it_is_initializable(): void
    {
        $this->beConstructedWith('d-m-Y h:m:s', 'UTC');
        $this->shouldHaveType(DatetimeType::class);
    }

    public function it_should_return_valid_for_correct_values(): void
    {
        $this->beConstructedWith('d-m-Y h:m:s', 'Europe/Berlin');

        $this->check('12-12-2012 12:12:10')->isValid()->shouldBe(true);
    }

    public function it_should_return_invalid_for_others(): void
    {
        $this->beConstructedWith('d-m-Y h:m:s', 'Europe/Berlin');

        $this->check(null)->isValid()->shouldBe(false);
        $this->check('foo')->isValid()->shouldBe(false);
        $this->check([])->isValid()->shouldBe(false);
        $this->check(1.234)->isValid()->shouldBe(false);
        $this->check(true)->isValid()->shouldBe(false);
        $this->check(false)->isValid()->shouldBe(false);
    }
}
