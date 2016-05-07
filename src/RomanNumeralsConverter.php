<?php

class RomanNumeralsConverter
{

    public static $romanNumerals = [
      1000 => 'M',
      500 => 'D',
      100 => 'C',
      50 => 'L',
      10 => 'X',
      5 => 'V',
      1 => 'I',
    ];

    public function convert($number) {

        $numeral = '';
        foreach (self::$romanNumerals as $key => $value) {
            $i = (int) $number / $key;
            if ($i != 0) {
                $numeral .= str_repeat($value, $i);
            }
            $number = $number % $key;
        }

        return $numeral;
    }

}
