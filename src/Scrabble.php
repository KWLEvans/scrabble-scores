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
            $input = strtolower($input);
            for ($i=0; $i<strlen($input); $i++) {
                $score += $this->scoreLetter($input[$i]);
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
    }

?>
