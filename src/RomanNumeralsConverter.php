<?php

class RomanNumeralsConverter
{

    

    public function convert($number) {

        if ($number == 4) {
          return 'IV';
        }

        return str_repeat('I', $number);
    }

}
