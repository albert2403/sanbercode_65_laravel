<?php
    require_once("animal.php");
    require_once("ape.php");
    require_once("frog.php");

    $sheep = new animal("shaun");
    
    echo "Name: " . $sheep->name ."<br>";// "shaun"
    echo "Legs: " . $sheep->get_legs() . "<br>";// 4
    echo "Cold Blooded: " . $sheep->get_cblooded() . "<br>";// "no"
    echo "<br>";

    $kodok  = new frog("Buduk");
    
    echo "Name: " . $kodok ->name ."<br>";
    echo "Legs: " . $kodok ->get_legs() . "<br>";// 4
    echo "Cold Blooded: " . $kodok ->get_cblooded() . "<br>";// "no"
    echo "Jump: " . $kodok ->jump() . "<br>";// "no"
    echo "<br>";

    $sungokong  = new ape("Kera Sakti");
    
    echo "Name: " . $sungokong ->name ."<br>";// "shaun"
    echo "Legs: " . $sungokong ->legs . "<br>";// 4
    echo "Cold Blooded: " . $sungokong ->get_cblooded() . "<br>";// "no"
    echo "Yell: " . $sungokong ->yell() . "<br>";// "no"

?>