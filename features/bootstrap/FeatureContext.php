<?php
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Cdt\RomanNumeralsKata\RomanNumeralsGenerator;
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
        $romanNumeralsGenerator = new RomanNumeralsGenerator();
        $this->output = $romanNumeralsGenerator->generateRomanNumerals($this->input);
    }

    /**
     * @Then I should be given a return value of :expectedOutput
     */
    public function iShouldBeGivenAReturnValueOf($expectedOutput)
    {
        Assert::assertEquals($expectedOutput, $this->output);
    }
}
