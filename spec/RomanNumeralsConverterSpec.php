<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RomanNumeralsConverterSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('RomanNumeralsConverter');
    }

    function it_calculates_the_roman_numeral_for_3000()
    {
        $this->convert(5000)->shouldReturn('MMMMM');
    }
}
