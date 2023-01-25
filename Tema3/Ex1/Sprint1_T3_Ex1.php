<?php
    class Employee {
        public $name, $wage;
        function initialize($name, $wage) {
            $this->name = $name;
            $this->wage = $wage;
        }
        function print($employee) {
            if ($this->wage > 6000) {
                echo $this->name . " has to pay tax";
            }
            else {
                echo $this->name . " doesn't have to pay tax";
            }
        }
    }

    $employee1 = new Employee; 
    $employee1->initialize("Rory", 5999);
    print($employee1);

?>