<?php

function connectToDB()
{
    try {
        return new mysqli("localhost", "root", "", "trainee_db");
    } catch (Exception $e) {
        die($e->getMessage());
    }
}

function makeTable($pdo)
{
    if ($pdo->connect_error) {
        die("Ошибка: " . $pdo->connect_error);
    }
    $sql = "SELECT profile_avatar, first_name, last_name, report, email FROM users limit 178";
    if ($result = $pdo->query($sql)) {
        $rowsCount = $result->num_rows; // количество полученных строк
        echo "<table class='table'></tr><br>";

        foreach ($result as $row) {
            echo "<tr>";
            echo "<td>" . "<img style='height=100px;width=100px' src=" . $row['profile_avatar'] . ">" . "</td>";
            echo "<td>" . $row["first_name"] . " " . $row["last_name"] . "</td>";
            echo "<td>" . $row["report"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        $result->free();
    } else {
        echo "Ошибка: " . $pdo->error;
    }
    $pdo->close();

}




