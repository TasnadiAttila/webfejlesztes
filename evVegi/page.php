<?php
require 'login.php';
$color = $titkosValue;
switch($titkosValue){
    case "piros":
        echo "<body style='background-color:red'>";
    case "zold":
        echo "<body style='background-color:green'>";
    case "sarga":
        echo "<body style='background-color:yellow'>";
    case "kek":
        echo "<body style='background-color:blue'>";
    case "fekete":
        echo "<body style='background-color:black'>";
    case "feher":
        echo "<body style='background-color:white'>";
}
?>