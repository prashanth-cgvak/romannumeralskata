<?php
namespace Cdt\RomanNumeralsKata;

class RomanNumeralsGeneratorTest extends \PHPUnit_Framework_TestCase
{
    public function simpleCaseDataProvider()
    {
        return [
            [1,  "I"],
            [5,  "V"],
            [10,  "X"],
            [50,  "L"],
            [100,  "C"],
            [500,  "D"],
            [1000,  "M"],
        ];
    }

    /** @dataProvider simpleCaseDataProvider */
    public function testSimpleCase($number, $expectedOutput)
    {
        $romanNumeralsGenerator = new RomanNumeralsGenerator();

        $romanNumerals = $romanNumeralsGenerator->generateRomanNumerals($number);

        $this->assertEquals($expectedOutput, $romanNumerals);
    }

    public function combinationCaseDataProvider()
    {
        return [
            [2,  "II"],
            [3,  "III"],
            [30, "XXX"],
            [300, "CCC"],
            [3000, "MMM"]
        ];
    }

    /** @dataProvider combinationCaseDataProvider */
    public function testCombinationCase($number, $expectedOutput)
    {
        $romanNumeralsGenerator = new RomanNumeralsGenerator();

        $romanNumerals = $romanNumeralsGenerator->generateRomanNumerals($number);

        $this->assertEquals($expectedOutput, $romanNumerals);
    }

    public function complexCaseDataProvider()
    {
        return [
            [4,  "IV"],
            [9,  "IX"],
            [40,  "XL"],
            [90,  "XC"],
            [400,  "CD"],
            [900,  "CM"]
        ];
    }

    /** @dataProvider complexCaseDataProvider */
    public function testComplexCase($number, $expectedOutput)
    {
        $romanNumeralsGenerator = new RomanNumeralsGenerator();

        $romanNumerals = $romanNumeralsGenerator->generateRomanNumerals($number);

        $this->assertEquals($expectedOutput, $romanNumerals);
    }

    public function compoundCaseDataProvider()
    {
        return [
            [14,  "XIV"],
            [24,  "XXIV"],
            [54,  "LIV"],
            [194, "CXCIV"]
        ];
    }

    /** @dataProvider compoundCaseDataProvider */
    public function testCompoundCase($number, $expectedOutput)
    {
        $romanNumeralsGenerator = new RomanNumeralsGenerator();

        $romanNumerals = $romanNumeralsGenerator->generateRomanNumerals($number);

        $this->assertEquals($expectedOutput, $romanNumerals);
    }
}
