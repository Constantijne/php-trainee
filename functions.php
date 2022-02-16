<?php
$email = $_POST["email"];
function checkUsers($email){
    $conn = new mysqli("localhost", "root", "", "trainee_db");
    if ($conn->connect_error) {
        die("Ошибка: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM users where email = '$email'";
    if ($result = $conn->query($sql)) {
        $rowsCount = $result->num_rows; // количество полученных строк
        if ($rowsCount) {
            $new_url = 'http://trainee/step-two.php';
            header('Location: ' . $new_url);

        } else {
            $old_url = 'http://trainee/step-one.php';
            header('Location: ' . $old_url);
        }
    }
}

checkUsers($email);

