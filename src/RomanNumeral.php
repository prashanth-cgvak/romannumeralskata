<?php
namespace Cdt\RomanNumeralsKata;

class RomanNumeral
{
    protected static $romanNumeralDigits = array(
        "M" => 1000,
        "D" => 500,
        "C" => 100,
        "L" => 50,
        "X" => 10,
        "V" => 5,
        "I" => 1,
    );

    public static function convertDecimalToRomanNumeral($decimal)
    {
        $romanNumerals = "";

        foreach (self::$romanNumeralDigits as $numeralDigit => $numeralDigitValue) {
            self::processRomanNumeralDigitsOfType($numeralDigit, $numeralDigitValue, $decimal, $romanNumerals);
        }

        return $romanNumerals;
    }

    private static function processRomanNumeralDigitsOfType($numeralDigit, $numeralDigitValue, &$decimal, &$romanNumerals)
    {
        $numberOfNumeralDigits = floor($decimal / $numeralDigitValue);
        $decimal -= $numberOfNumeralDigits * $numeralDigitValue;

        if ($numberOfNumeralDigits == 4) {
            $nextRomanNumeralDigit = self::getNextRomanNumeralDigit($numeralDigit);
            if (substr($romanNumerals, -1) == $nextRomanNumeralDigit) {
                $romanNumerals = substr($romanNumerals, 0, -1);
                $romanNumerals .= $numeralDigit . self::getNextRomanNumeralDigit($nextRomanNumeralDigit);
            } else {
                $romanNumerals .= $numeralDigit . $nextRomanNumeralDigit;
            }
        } else {
            $romanNumerals .= str_repeat($numeralDigit, $numberOfNumeralDigits);
        }
    }

    private static function getNextRomanNumeralDigit($numeralDigit)
    {
        $keys = array_keys(self::$romanNumeralDigits);
        $key = array_search($numeralDigit, $keys);
        return $keys[$key-1];
    }
}
