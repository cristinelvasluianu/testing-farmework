<?php

use Behat\Behat\Context\Context;
use Behat\MinkExtension\Context\MinkContext;

class FeatureContext extends MinkContext implements Context
{
    // ......

    /**
     * @Given I am logged in as :username
     */
    public function iAmLoggedInAs($username)
    {
        $this->visitPath("/login");

    }

    /**
     * @When I wait for the suggestion box to appear
     */
    public function iWaitForTheSuggestionBoxToAppear()
    {
        throw new PendingException();
    }

}