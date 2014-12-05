<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\CustomSnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Sequence\Sequence;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context, CustomSnippetAcceptingContext
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }


    public static function getAcceptedSnippetType()
    {
        return 'regex';
    }

    private $number;
    private $fibonacciList;

    /**
     * @Given /^I have a Fibonacci Sequence generator$/
     */
    public function iHaveSequence()
    {

    }

    /**
     * @When /^I calculate the "([^"]*)" first fibonacci numbers$/
     */
    public function iCalculateTheFirstFibonacciNumbers($number)
    {
        $this->fibonacciList = Sequence::fibonacci($number);
    }

    /**
     *  @When /^I ask if the number "([^"]*)" is in the Sequence$/
     */
    public function isTheNumberInSequence($number)
    {
        $this->isFiboNumber=Sequence::isFibo($number);
    }


    /**
     * @Then /^I should get the sequence "([^"]*)"$/
     */
    public function iShouldGetSequence($list)
    {
        $result= implode(',', $this->fibonacciList );
        if ($list !== $result) {
            throw new Exception('I should get '.$list. ' and I got '.$result);
        }
    }

    /**
     * @Then /^I should get "([^"]*)"$/
     */
    public function iShouldGet($response) {
        if ($response == "yes") {
            if (!$this->isFiboNumber ) {
                throw new Exception('Number not in Fibonacci sequence');
            }
        } else {
            if ($this->isFiboNumber ) {
                throw new Exception('Number in Fibonacci sequence');
            }
        }
    }

}
