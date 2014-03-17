# features/helloworld.feature
Feature: HelloWorld
    In order to make sure this works
    I need to make some tests
    
Scenario: Check HelloWorld()
    When I say Hello
    Then I should get HelloWorld:
    """
    Hello World
    """   
    
Scenario: Check Hello()
	Given I have name "Baz"
    When I say Hello
    Then I should get Hello:
    """
    Hello Baz
    """   
    
# Scenario: Check What()
#    When I say What
#    Then I should get NULL
    
Scenario: Check filled What()
	Given I have name "Bar"   
    When I say What
    Then I should get What:
    """
    Bar
    """         
        