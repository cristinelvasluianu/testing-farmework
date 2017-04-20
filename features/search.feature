Feature: Search
  In order to see a word definition
  As a website user
  I need to be able to search for a word

  Scenario: Searching for a page that does exist
    Given I am on "/ceva"
    When I fill in "email" with "admin@mailinator.com"
    When I fill in "password" with "1$$R2sozPTcLV20$"
    And I press "Log In"
    Then I should see "You have not made any transactions yet. "