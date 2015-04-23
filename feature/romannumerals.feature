Feature: Roman Numerals
    As a developer
    In order to improve my skills with tools and techniques
    I want to solve a coding problem using some tools and techniques I haven't tried before

    Scenario Outline: Numbers are converted to their Roman Numeral form
        Given I have an input of "<Number>"
        When I run the code to convert it to a Roman Numeral
        Then I should be given a return value of "<Roman Numeral>"

        Examples:
            | Number | Roman Numeral |
            | 1      | I             |
            | 5      | V             |
            | 10     | X             |
            | 50     | L             |
            | 100    | C             |
            | 500    | D             |
            | 1000   | M             |
            | 3      | III           |
            | 9      | IX            |
            | 88     | LXXXVIII      |
            | 1066   | MLXVI         |
            | 1989   | MCMLXXXIX     |
            | 1999   | MCMXCIX       |
            | 2015   | MMXV          |
