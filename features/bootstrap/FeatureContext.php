<?php
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Cdt\RomanNumeralsKata\RomanNumeral;
use PHPUnit_Framework_Assert as Assert;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context, SnippetAcceptingContext
{
    private $input;
    private $output;

    /**
     * @Given I have an input of :input
     */
    public function iHaveAnInputOf($input)
    {
        $this->input = $input;
    }

    /**
     * @When I run the code to convert it to a Roman Numeral
     */
    public function iRunTheCodeToConvertItToARomanNumeral()
    {
        $this->output = RomanNumeral::convertDecimalToRomanNumeral($this->input);
    }

    /**
     * @Then I should be given a return value of :expectedOutput
     */
    public function iShouldBeGivenAReturnValueOf($expectedOutput)
    {
        Assert::assertEquals($expectedOutput, $this->output);
    }
}
