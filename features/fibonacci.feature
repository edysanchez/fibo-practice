Feature: In order to know the fibonaci numbers
As a Student
I want to calculate any fibonaci number

    Scenario: First 2 fibonaci numbers
        Given I have the number "2"
        When I calculate the "2" first fibonacci numbers
        Then I should get "1,1" 

    Scenario: First 3 fibonaci numbers
        Given I have the number "3"
        When I calculate the "3" first fibonacci numbers
        Then I should get "1,1,2" 

    Scenario: First 6 fibonaci numbers
        Given I have the number "6"
        When I calculate the "6" first fibonacci numbers
        Then I should get "1,1,2,3,5,8" 
