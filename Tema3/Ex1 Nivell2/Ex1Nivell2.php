<?php
    class PokerDice {
        private $sideFacingUp;
        public function __construct($sideFacingUp = null){
            $this->sideFacingUp = $sideFacingUp;
        }
        public function throw() {
            $this->sideFacingUp = rand(1, 6);
            $randNum = $this->sideFacingUp;
            $this->shapeName($randNum);
        }
        public function shapeName($randNum) {
            switch($randNum) {
                case 1:
                    echo "The die landed on Ace" . "<br/>";
                    break;
                case 2: 
                    echo "The die landed on King" . "<br/>";
                    break;
                case 3:
                    echo "The die landed on Queen" . "<br/>";
                    break;
                case 4:
                    echo "The die landed on Jack" . "<br/>";
                    break;
                case 5:
                    echo "The die landed on 7" . "<br/>"; 
                    break;
                case 6: 
                    echo "The die landed on 8" . "<br/>";
                    break;
            }
        }
        public function throwFive() {
            echo "Throwing five poker dice at a time" . "<br/>";
            for ($x = 0; $x <= 5; $x++) {
                $this->throw();
            }
        }
        public function getTotalThrows(){
           
        }
    }
    $die1 = new PokerDice;
    $die1->__construct();
    $die1->throw();
    $die1->throwFive();
?>