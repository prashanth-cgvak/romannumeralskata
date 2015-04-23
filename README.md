# Roman Numerals Kata

## Problem Description

The Romans were a clever bunch. They conquered most of Europe and ruled it for hundreds of years. They invented concrete
and straight roads and even bikinis. One thing they never discovered though was the number zero. This made writing and
dating extensive histories of their exploits slightly more challenging, but the system of numbers they came up with is
still in use today. For example the BBC uses Roman numerals to date their programmes.

The Romans wrote numbers using letters - I, V, X, L, C, D, M. (notice these letters have lots of straight lines and are
hence easy to hack into stone tablets)

The Kata says you should write a function to convert from normal numbers to Roman Numerals: eg

    1 --> I
    10 --> X
    7 --> VII

etc.

There is no need to be able to convert numbers larger than about 3000. (The Romans themselves didn't tend to go any
higher)

Note that you can't write numerals like "IM" for 999. Wikipedia says:

> Modern Roman numerals ... are written by expressing each digit separately starting with the left most digit and
> skipping any digit with a value of zero. To see this in practice, consider the ... example of 1990. In Roman numerals
> 1990 is rendered: 1000=M, 900=CM, 90=XC; resulting in MCMXC. 2008 is written as 2000=MM, 8=VIII; or MMVIII.

Another explanation:

> The symbols 'I', 'X', 'C', and 'M' can be repeated at most 3 times in a row. The symbols 'V', 'L', and 'D' can never
> be repeated. The '1' symbols ('I', 'X', and 'C') can only be subtracted from the 2 next highest values ('IV' and 'IX',
> 'XL' and 'XC', 'CD' and 'CM'). Only one subtraction can be made per numeral ('XC' is allowed, 'XXC' is not). The '5'
> symbols ('V', 'L', and 'D') can never be subtracted.

## Reference

    Roman Numeral   Arabic Number
    
    I               1
    V               5
    X               10
    L               50
    C               100
    D               500
    M               1000

## Method

Work in pairs to implement a solution following the laws of Test Driven Development:

1. You may not write any production code until you have written a failing unit test
2. You may not write more of a unit test than is sufficient to fail. Not compiling is failing.
3. You may not write more production code than is sufficient to pass the currently failing test.

If it is taking longer than 2 minutes to write the production code to make your currently failing test pass, delete the
test and write a new one tackling a smaller part of the problem. Small steps are the key.

Follow the RED-GREEN-REFACTOR cycle as you code. Make a failing test, make it pass using _whatever_ code is necessary,
then remove duplication while keeping the tests passing.

## Testing

I've provided a behat .feature file that you may choose to use to test your solution once it is complete, but only use
it for verification - write the unit tests yourself as you code. I have purposely not completed the feature context file
for this reason, though this is easy enough to do and there are comments in there to help you verify your solution
afterwards.

## Tools

I have put composer into this repository (you'll need PHP installed to use it) along with a `composer.json` and
`composer.lock` that will install the latest versions of Behat, PHPUnit and PHPSpec that you can make use of if you want
to. You can use this opportunity to learn about one of these tools that you haven't used before if you like.

Use the namespace `Cdt\RomanNumeralsKata\` in both the src and test folders.

## Commands

After cloning the repository, run:

    composer install
    
To run PHPUnit tests, run:

    bin/phpunit

To use PHPSpec, use this command to describe a class:

    bin/phpspec desc Cdt\\RomanNumeralsKata\\<classname>

Note the escaping of the PHP namespace separator on command line. A `spec` folder will be created with your test class.
To test, run:

    bin/phpspec run
    
To run the behat tests, run:

    bin/behat
