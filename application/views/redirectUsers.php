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
        $rowsCount = $result->num_rows; // количество полученных строк
        if ($rowsCount) {
            include "application/controllers/Controller_FirstForm.php";

        } else {
            include "application/controllers/Controller_SecondForm.php";
        }
    }
}

checkUsers($email);
