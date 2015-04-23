<?php
namespace Cdt\RomanNumeralsKata;

class RomanNumeralsGenerator
{
    private static $romanNumerals = [
        1 => "I",
        5 => "V",
        10 => "X",
        50 => "L",
        100 => "C",
        500 => "D",
        1000 => "M"
    ];

    private static $subtractableNumerals = [
        1 => [5, 10],
        10 => [50, 100],
        100 => [500, 1000]
    ];

    public function generateRomanNumerals($int)
    {
        $romanNumerals = [];
        $powerOf10 = 0;

        foreach(array_reverse(str_split($int)) as $digit) {
            if ($digit != 0) {
                $romanNumerals[] = $this->getRomanNumeralForSingleDigitPosition($digit . str_repeat("0", $powerOf10));
            }

            $powerOf10++;
        }

        return implode('', array_reverse($romanNumerals));
    }

    private function findHighestNumberLessThanInput($input)
    {
        $currentMax = 0;

        foreach (self::$romanNumerals as $number => $romanNumeral) {
            if ($number > $currentMax && $number < $input) {
                $currentMax = $number;
            }
        }

        return $currentMax;
    }

    private function getNumeralFromSubtractableNumber($int)
    {
        foreach (self::$subtractableNumerals as $subtractableNumeral => $numbersThatCanBeSubtractedFrom) {
            foreach ($numbersThatCanBeSubtractedFrom as $numberThatCanBeSubtractedFrom) {
                if ($int == $numberThatCanBeSubtractedFrom - $subtractableNumeral) {
                    return self::$romanNumerals[$subtractableNumeral] . self::$romanNumerals[$numberThatCanBeSubtractedFrom];
                }
            }
        }

        return null;
    }

    private function getRomanNumeralForSingleDigitPosition($int)
    {
        if ($this->isSingleRomanNumeral($int)) {
            return $this->getRomanNumeralForNumber($int);
        }

        if ($subtractableNumeral = $this->getNumeralFromSubtractableNumber($int)) {
            return $subtractableNumeral;
        }

        $highestNumber = $this->findHighestNumberLessThanInput($int);

        if ($this->oneNumberIsDivisibleByTheOther($int, $highestNumber)) {
            return $this->repeatRomanNumeral($highestNumber, $int / $highestNumber);
        }
    }

    private function isSingleRomanNumeral($int)
    {
        return isset(self::$romanNumerals[$int]);
    }

    private function getRomanNumeralForNumber($int)
    {
        return self::$romanNumerals[$int];
    }

    private function oneNumberIsDivisibleByTheOther($number, $divisor)
    {
        return $number % $divisor == 0;
    }

    private function repeatRomanNumeral($numberToRepeatNumeralFor, $timesToRepeat)
    {
        return str_repeat(self::$romanNumerals[$numberToRepeatNumeralFor], $timesToRepeat);
    }
}
