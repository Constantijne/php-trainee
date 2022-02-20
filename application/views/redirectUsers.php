<?php
require "functions.php";

$email = $_POST["email"];
function checkUsers($email){
    $conn = connectToDB();
    if ($conn->connect_error) {
        die("Ошибка: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM users where email = '$email'";
    if ($result = $conn->query($sql)) {
        $rowsCount = $result->num_rows;
        if ($rowsCount) {
            $new_url = 'http://php-trainee/secondform';
            header('Location: ' . $new_url);

        } else {
            $new_url = 'http://php-trainee/firstform';
            header('Location: ' . $new_url);
        }
    }
}

checkUsers($email);
