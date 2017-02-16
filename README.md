# Scrabble Scorer

#### Website for practicing unit testing with PHP for Epicodus, 02.16.2017

#### By Jennifer Beem & Keith Evans

## Description

This website tells a user the score of a string &#224; la [Scrabble](https://en.wikipedia.org/wiki/Scrabble).

## Setup/Installation Requirements
1. Set project root as working directory in CLI.
2. Run `$ composer install --prefer-source --no-interaction`.
3. Run `$ cd web`.
4. Run `$ php -S localhost:8000`.
5. Visit **`localhost:8000`** in web browser.


## Technologies Used

PHP

Silex

Twig

Composer

## Specs

|Behavior|Input|Output|
|--------|-----|------|
|App will return the scrabble score for a given character|"a"|1|
|App will return a combined score of all letters for multi-letter words|"funk"|11|
|App will return correct score regardless of capitalization|"Funk"|11|
|App will ignore non-alphabetic characters|"Funk9!"|11|
|App can accept an array of words and return total score|["that", "funk"]|18|


## Known Bugs

_No known bugs or issues_

### License

Copyright (c) 2017 _**Jennifer Beem**_ & _**Keith Evans**_

This software is licensed under the MIT license.
