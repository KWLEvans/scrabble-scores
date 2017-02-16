<?php

    require_once "src/Scrabble.php";

    class ScrabbleTest extends PHPUnit_Framework_TestCase
    {
        function check($input, $result_expected) {
            //Arrange
            $test_Scrabble = new Scrabble;

            //Act
            $result = $test_Scrabble->score($input);

            //Assert
            $this->assertEquals($result_expected, $result);
        }

        function test_score_singleLetter() {
            $this->check("a", 1);
        }

        function test_score_multipleLetters() {
            $this->check("funk", 11);
        }

        function test_score_uppercase() {
            $this->check("Funk", 11);
        }
    }

?>
