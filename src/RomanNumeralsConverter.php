<?php

class RomanNumeralsConverter
{

    public static $romanNumerals = [
      1 => 'I',
      5 => 'V',
      10 => 'X',
      50 => 'L',
      100 => 'C',
      500 => 'D',
      1000 => 'M',
    ];

    public function convert($number) {

        if ($number == 4) {
          return 'IV';
        }

        return str_repeat('I', $number);
    }

}
