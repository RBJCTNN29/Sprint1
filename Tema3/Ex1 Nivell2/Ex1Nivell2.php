<?php
    class PokerDice {
        public $faceA, $faceK, $faceQ, $faceJ, $face7, $face8;
        public function __construct($faceA, $faceK, $faceQ, $faceJ, $face7, $face8) {
            $this->faceA = "Ace";
            $this->faceK = "King";
            $this->faceQ = "Queen";
            $this->faceJ = "Jack";
            $this->face7 = "7";
            $this->face8 = "8";
        }
        public function shapeName($faceName) {
            echo "The die landed on " . $faceName;
        }
        public function throw($die) {
            $randNum = rand(1, 6);
            $dieFace;
            switch($randFace) {
                case 1:
                    $dieFace = $this->faceA;
                    shapeName($dieFace);
                    break;
                case 2:
                    $dieFace = $this->faceK;
                    shapeName($dieFace);
                    break;
                case 3:
                    $dieFace = $this->faceQ;
                    shapeName($dieFace);
                    break;
                case 4:
                    $dieFace = $this->faceJ;
                    shapeName($dieFace);
                    break;
                case 5:
                    $dieFace = $this->face7;
                    shapeName($dieFace);
                    break;
                case 6:
                    $dieFace = $this->face8;
                    shapeName("8");
                    break;
            }
        }
        public function castFive() {
            for ($x = 0; $x <= 5; $x++) {
                echo throw($die);
            }
        }
        public function getTotalThrows() {

        }
    }
    $die1 = new PokerDice;
    $die1->__construct($faceA, $faceK, $faceQ, $faceJ, $face7, $face8);
    $die1->throw($die1);
    $die1->castFive();


?>