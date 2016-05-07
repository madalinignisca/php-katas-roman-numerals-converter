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
        $this->convert(3000)->shouldReturn('MMM');
    }

    function it_calculates_the_roman_numeral_for_3300()
    {
        $this->convert(3300)->shouldReturn('MMMCCC');
    }

    function it_calculates_the_roman_numeral_for_3330()
    {
        $this->convert(3330)->shouldReturn('MMMCCCXXX');
    }

    function it_calculates_the_roman_numeral_for_3333()
    {
        $this->convert(3333)->shouldReturn('MMMCCCXXXIII');
    }
}
