<?php
require_once 'animal.php';

class Ape extends Animal {
    public function yell() {
        echo "Name : " . $this->name . "<br>";
        echo "legs : " . $this->legs . "<br>";
        echo "cold blooded : " . $this->cold_blooded . "<br>";
        echo "Yell : Auooo<br>";
    }

    public function __construct($name) {
        parent::__construct($name);
        $this->legs = 2;
    }
}
?>