<?php
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
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
        //Pass $this->input into your code and store result in $this->output
        throw new PendingException();
    }

    /**
     * @Then I should be given a return value of :expectedOutput
     */
    public function iShouldBeGivenAReturnValueOf($expectedOutput)
    {
        Assert::assertEquals($expectedOutput, $this->output);
    }
}
