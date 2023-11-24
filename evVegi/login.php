<?php
// Include the database configuration file
require_once 'dbConfig.php';
require 'decodePassword.php';

$emailsAndPassowords = $emailPassword;
$username = $_POST['username'];
$password = $_POST['passwd'];
$login = '';


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
            $login = 'siker';
        } 
    } else {
        $login = 'rJelszo';
    }
} else {
    $login = "noUser";
}
$db->close();
?>