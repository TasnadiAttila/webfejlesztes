<?php
// Include the database configuration file
require_once 'dbConfig.php';
require 'decodePassword.php';

$emailsAndPassowords = $emailPassword;
$username = $_POST['username'];
$password = $_POST['passwd'];

if (array_key_exists($username, $emailsAndPassowords)) {
    $value = $emailsAndPassowords[$username];
    if ($value === $password) {
        $query = $db->prepare("SELECT Titkos FROM tabla WHERE Username LIKE ?");
        if ($query) {
            $query->bind_param("s", $username);
            
            $query->execute();
            
            $result = $query->get_result();
            if ($row = $result->fetch_assoc()) {
                $titkosValue = $row['Titkos'];
            }
            $query->close();
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
        } else {
            echo "A lekérdezés meghiusúlt.";
        }
    } else {
        echo "Hibás jelszó.";
    }
} else {
    echo "Nincs ilyen felhasználó.";
}
$db->close();
?>