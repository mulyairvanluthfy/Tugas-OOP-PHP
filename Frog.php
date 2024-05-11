<?php
require_once 'animal.php';

class Frog extends Animal {
    public function jump() {
        echo "Name : " . $this->name . "<br>";
        echo "legs : " . $this->legs . "<br>";
        echo "cold blooded : " . $this->cold_blooded . "<br>";
        echo "jump : Hop Hop<br><br>";
    }
}
?>