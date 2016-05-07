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

    protected function process(&$number, &$numerals, &$numeral) {
      $i = (int) ($number / key($numerals));
      $number = $number % key($numerals);
      switch ($i) {
          case 9:
            $str = current($numerals);
            prev($numerals);
            $str .= prev($numerals);
            break;
          case 5:
            $str = prev($numerals);
            break;
          case 4:
            $str = current($numerals) . prev($numerals);
            break;
          default:
            $str = str_repeat(current($numerals), $i);
            break;
      }
      $numeral .= $str;
      if (next($numerals) && $number != 0) {
          next($numerals);
          $this->process($number, $numerals, $numeral);
      }

    }

    public function convert($number) {

        $numerals = self::$romanNumerals;
        $this->process($number, $numerals, $numeral);

        return $numeral;
    }

}
