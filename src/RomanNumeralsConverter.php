<?php

class RomanNumeralsConverter
{

    public static $romanNumerals = [
      1000000 => 'Ḿ',
      500000 => 'Ď',
      100000 => 'Č',
      50000 => 'Ĺ',
      10000 => 'Ẋ',
      5000 => 'Ṽ',
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
              next($numerals);
              next($numerals);
              break;
          case 4:
              $str = current($numerals) . prev($numerals);
              next($numerals);
              break;
          default:
              $str = '';
              if ((int) ($i / 5) == 1) {
                  $str .= prev($numerals);
                  next($numerals);
              }
              $str .= str_repeat(current($numerals), $i % 5);
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
