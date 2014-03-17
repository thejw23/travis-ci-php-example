<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

//
// Require 3rd-party libraries here:
//
//   require_once 'PHPUnit/Autoload.php';
//   require_once 'PHPUnit/Framework/Assert/Functions.php';
//

/**
 * Features context.
 */
class FeatureContext extends BehatContext
{

    private $hello;
    private $name;
    private $string;

    /**
     * Initializes context.
     * Every scenario gets it's own context object.
     *
     * @param array $parameters context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        // Initialize your context here
    }

//
// Place your definition and hook methods here:
//
//    /**
//     * @Given /^I have done something with "([^"]*)"$/
//     */
//    public function iHaveDoneSomethingWith($argument)
//    {
//        doSomethingWith($argument);
//    }
//      

    /**
     * @When /^I say Hello$/
     */
    public function iSayHello()
    {
        $this->hello = new \HelloWorld();
    }

    /**
     * @Then /^I should get HelloWorld:$/
     */
    public function iShouldGetHelloworld(PyStringNode $string)
    {
        \Assert\Assertion::same($this->hello->hello(), $string->getRaw());
    }

    /**
     * @Given /^I have name "([^"]*)"$/
     */
    public function iHaveName($arg1)
    {
        $this->name = $arg1;
    }


    /**
     * @Then /^I should get Hello:$/
     */
    public function iShouldGetHello(PyStringNode $string)
    {
        \Assert\Assertion::same($this->hello->hello($string->getRaw()), 'Hello '.$string->getRaw()); 
    }

    /**
     * @When /^I say What$/
     */
    public function iSayWhat()
    {
        $this->hello = new \HelloWorld();
        $this->hello->hello($this->name);
    }

    /**
     * @Then /^I should get What:$/
     */
    public function iShouldGetWhat(PyStringNode $string)
    {
        \Assert\Assertion::same($this->hello->what(), $string->getRaw()); 
    }

}


