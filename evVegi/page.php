<?php
require 'login.php';
$html = '';

switch ($login) {
    case "siker":
        switch ($titkosValue) {
            case "piros":
                $html .= "<body style='background-color:red'>";
                break;
            case "zold":
                $html .= "<body style='background-color:green'>";
                break;
            case "sarga":
                $html .= "<body style='background-color:yellow'>";
                break;
            case "kek":
                $html .= "<body style='background-color:blue'>";
                break;
            case "fekete":
                $html .= "<body style='background-color:black'>";
                break;
            case "feher":
                $html .= "<body style='background-color:white'>";
                break;
        }
        $html .= "<H1>Sikeres bejelentkezés.</H1>";
        $html .= "<H2>A háttérszín: {$titkosValue}.</H2>";
        break;
    case "rJelszo":
        $html .= "<H1>Rossz jelszó.</H1>";
        break;
    case "noUser":
        $html .= "<H1>Nincs ilyen felhasználó.</H1>";
        break;
}

$html .= "<a href='index.php'><button>Vissza a bejelentkezéshez</button></a>";
include 'afterLogin.php';
?>
