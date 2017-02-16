<?php

    class Scrabble
    {
        private $letter_scores = [
            "aeioulnrst" => 1,
            "dg" => 2,
            "bcmp" => 3,
            "fhvwy" => 4,
            "k" => 5,
            "jx" => 8,
            "qz" => 10
        ];

        function score($input) {
            $score = 0;
            if (gettype($input) == "array") {
                foreach ($input as $word) {
                    $score += $this->scoreWord($word);
                }
            } else {
                $score = $this->scoreWord($input);
            }
            return $score;
        }

        function scoreWord($word) {
            $score = 0;
            $word = strtolower($word);
            $word = preg_replace("/[^a-z]/", "", $word);
            for ($i=0; $i<strlen($word); $i++) {
                $score += $this->scoreLetter($word[$i]);
            }
            return $score;
        }

        function scoreLetter($letter) {
            foreach ($this->letter_scores as $letters => $value) {
                $letters = str_split($letters);
                if (in_array($letter, $letters)) {
                    $score = $value;
                }
            }
            return $score;
        }

        function save() {
            array_push($_SESSION['list_word_words'], $this);
        }

        static function getAll() {
            return $_SESSION['list_word_words'];
        }
    }

?>
