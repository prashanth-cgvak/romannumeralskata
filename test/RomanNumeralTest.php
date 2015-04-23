<?php
namespace Cdt\RomanNumeralsKata;

use PHPUnit_Framework_TestCase;

class RomanNumeralTest extends PHPUnit_Framework_TestCase
{
    public function testCanBeInstantiated()
    {
        $this->assertInstanceOf(RomanNumeral::class, new RomanNumeral());
    }

    /**
     * @dataProvider decimalToRomanNumeralDataProvider
     */
    public function testDecimalConvertsToRomanNumeral($decimal, $expectedRomanNumeral)
    {
        $this->assertSame(
            $expectedRomanNumeral,
            RomanNumeral::convertDecimalToRomanNumeral($decimal)
        );
    }

    public function decimalToRomanNumeralDataProvider()
    {
        return array(
            array(1, 'I'),
            array(5, 'V'),
            array(10, 'X'),
            array(50, 'L'),
            array(100, 'C'),
            array(500, 'D'),
            array(1000, 'M'),

            array(2, 'II'),
            array(3, 'III'),
            array(20, 'XX'),
            array(30, 'XXX'),
            array(200, 'CC'),
            array(300, 'CCC'),
            array(2000, 'MM'),
            array(3000, 'MMM'),

            array(3300, 'MMMCCC'),
            array(3330, 'MMMCCCXXX'),
            array(3333, 'MMMCCCXXXIII'),

            array(4, 'IV'),
            array(40, 'XL'),
            array(400, 'CD'),

            array(9, 'IX'),
            array(90, 'XC'),
            array(900, 'CM'),

            array(99, 'XCIX'),
            array(999, 'CMXCIX'),
        );
    }
}
