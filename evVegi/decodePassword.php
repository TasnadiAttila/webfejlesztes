<?php 

// File path
$file_path = 'password.txt';
$hexString = '';
if (file_exists($file_path) && is_readable($file_path)) {
    $file = fopen($file_path, "rb");
    if ($file) {
        while (!feof($file)) {
            $byte = fread($file, 1);
            $hexa = bin2hex($byte);
            $hexString .= strtoupper($hexa);
        }
        fclose($file);
    } else {
        echo "Failed to open the file.";
    }
} else {
    echo "File does not exist or is not readable.";
}

$counter = 1;
$decString = '';

for ($i = 0; $i < strlen($hexString); $i += 2) {
    $oneHexadecimalChar = substr($hexString, $i, 2);
    if ($oneHexadecimalChar !== '0A') {
        $decimal = hexdec($oneHexadecimalChar);
        switch ($counter) {
            case 1:
                $decimal -= 5;
                break;
            case 2:
                $decimal += 14;
                break;
            case 3:
                $decimal -= 31;
                break;
            case 4:
                $decimal += 9;
                break;
            case 5:
                $decimal -= 3;
                break;
        }
        $decString .= chr($decimal);
        $counter = ($counter % 5) + 1;
    } else {
        $decString .= "\n";
        $counter = 1;
    }
}

$emailPassword = [];
$lines = explode("\n", $decString);
foreach ($lines as $line) {
    $parts = explode('*', $line);
    if (count($parts) === 2) {
        $email = trim($parts[0]);
        $password = trim($parts[1]);
        $emailPassword[$email] = $password;
    }
}
?>