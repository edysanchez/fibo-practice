Feature: In order to know the fibonaci numbers
As a Student
I want to calculate any fibonaci number

    Scenario: First 2 fibonaci numbers
        Given I have a Fibonacci Sequence generator
        When I calculate the "2" first fibonacci numbers
        Then I should get the sequence "1,1" 

    Scenario: First 3 fibonaci numbers
        Given I have a Fibonacci Sequence generator
        When I calculate the "3" first fibonacci numbers
        Then I should get the sequence "1,1,2" 

    Scenario: First 6 fibonaci numbers
        Given I have a Fibonacci Sequence generator
        When I calculate the "6" first fibonacci numbers
        Then I should get the sequence "1,1,2,3,5,8" 

    Scenario: Calculate if a number is in the fibonacci sequence
        Given I have a Fibonacci Sequence generator
        When I ask if the number "3" is in the Sequence
        Then I should get "yes"

    Scenario: Calculate if a number is not in the fibonacci sequence
        Given I have a Fibonacci Sequence generator
        When I ask if the number "6" is in the Sequence
        Then I should get "no"


