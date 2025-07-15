# Overall Goal

Your task is to calculate the 'score' of a Scratchcard (see https://en.wikipedia.org/wiki/Scratchcard)
. You must write a program to calculate how many numbers on your scratchcard match a winning list. You will also need to loop through a list of many scratch cards.

# Scratchcard Scoring

Each card is indicated by a line in a file. The line contains two lists of numbers separated by a vertical bar (`|`): on the left is a list of winning numbers (W) and on the right is a list of numbers you have (L). This information is organised in a table (your puzzle input).

Your task is to determine which numbers (L) appear in the list of winning numbers (W). The first matching number on a card gives that card 1 point, and each additional matching number doubles the card’s point value.

## Example

Card 1: 41 48 83 86 17 | 83 86 6 31 17 9 48 53  
Card 2: 13 32 20 16 61 | 61 30 68 82 17 32 24 19  
Card 3: 1 21 53 59 44 | 69 82 63 72 16 21 14 1  
Card 4: 41 92 73 84 69 | 59 84 76 51 58 5 54 83  
Card 5: 87 83 26 28 32 | 88 30 70 12 93 22 82 36  
Card 6: 31 18 13 56 72 | 74 77 10 23 35 67 36 11  

### Explanation

- **Card 1** has five winning numbers W = `(41, 48, 83, 86, 17)` and eight numbers you have L = `(83, 86, 6, 31, 17, 9, 48, 53)`. Of the numbers you have, four `(48, 83, 17, 86)` are winning numbers. That makes card 1 worth **8 points** (1 point for the first match, doubled three times for the additional matches).

- **Card 2** has two winning numbers matched, so it is worth **2 points**.

- **Card 3** has two winning numbers matched, so it is worth **2 points**.

- **Card 4** has one winning number matched, so it is worth **1 point**.

- **Cards 5 and 6** have no winning numbers matched, so they are worth **0 points**.

---

In total, all cards combined are worth **13 points**.

# PHP template code

- Please complete the code in file src/ScratchcardScore.php   
- Any other files can be created if needed  
- There is a single test in tests/ScratchcardTest.php which currently fails. Upon coding a solution, this test should pass.  
- Please add any more tests which you think will be useful  

To build the project please use composer:  
composer install  

Tests can be run with:  
$ php ./vendor/bin/phpunit  

An example of running the ScratchCard Score class via cli is:  
$ composer run-score   
