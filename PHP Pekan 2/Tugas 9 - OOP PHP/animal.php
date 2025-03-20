<?php
    class animal{
        public $name;
        public $legs = 4;
        public $cold_blooded = "No";

        public function __construct($name){
            $this->name = $name;
        }

        public function get_legs(){
            return $this->legs;
        }

        public function get_cblooded(){
            return $this->cold_blooded;
        }
    }

?>