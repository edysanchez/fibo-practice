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
     * @Given /^I have the number "([^"]*)"$/
     */
    public function iHaveTheNumber($number)
    {
        $this->number=$number;
    }

    /**
     * @When /^I calculate the "([^"]*)" first fibonacci numbers$/
     */
    public function iCalculateTheFirstFibonacciNumbers($number)
    {
        $this->fibonacciList = Sequence::fibonacci($number);
    }

    /**
     * @Then /^I should get "([^"]*)"$/
     */
    public function iShouldGet($list)
    {
        $result= implode(',', $this->fibonacciList );
        if ($list !== $result) {
            throw new Exception('I should get '.$list. ' and I got '.$result);
        }
    }
}
