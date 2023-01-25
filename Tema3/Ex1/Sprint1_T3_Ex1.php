<?php
    class Employee {
        public $name, $wage;
        function initialize($name, $wage) {
            $this->name = $name;
            $this->wage = $wage;
        }
        function print() {
            if ($wage > 6000) {
                echo $name." has to pay tax";
            }
            else {
                echo $name." doesn't have to pay tax";
            }
        }
    }

    $employee1 = new Employee; 
    $employee1->initialize("Rory", 5999);
    echo 

?>