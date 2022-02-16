<!DOCTYPE html>
<html>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400&display=swap" rel="stylesheet">
<style>

    .table {
        font-family: 'Nunito', sans-serif;
        width: 80%;
        border: none;
        margin-bottom: 10px;
        margin-left: 75px;
        border-collapse: separate;
        text-align: center;
    }

    html {
        font-family: 'Nunito', sans-serif;
    }

    thead th, tfoot th {
        font-family: 'Nunito', sans-serif;
    }

    th {
        letter-spacing: 2px;
    }

    td {
        letter-spacing: 1px;
    }

    tbody td {
        text-align: center;
    }

    tfoot th {
        text-align: right;
    }

    img {
        border-radius: 5px 5px 5px 5px;
    }

    .header-bar {

        text-align: center;

        color: #fff;
        padding: 10px;
        border-radius: 5px 5px 5px 5px;
        background: linear-gradient(90deg, #6f9ff1 43%, #92da87 100%);
    }

    .container {
        max-width: 900px;
        margin: auto;
        padding: 20px;
        align-content: center;
        background-color: #fff;
        -webkit-box-shadow: 2px 2px 13px -4px rgba(0, 0, 0, 0.21);
        box-shadow: 2px 2px 13px -4px rgba(0, 0, 0, 0.21);
        border: 1px solid #92da87;
        border-radius: 5px 5px 5px 5px;
    }
</style>
<head>
    <title>Step #4</title>
</head>
<body>

<div class="container">
    <div class="header-bar">
        <h2>All members</h2>
    </div>
    <?php
    $conn = new mysqli("localhost", "root", "", "trainee_db");

    function makeTable($conn)
    {
        if ($conn->connect_error) {
            die("Ошибка: " . $conn->connect_error);
        }
        $sql = "SELECT profile_pic, f_name, l_name, report, email FROM users limit 178";
        if ($result = $conn->query($sql)) {
            $rowsCount = $result->num_rows; // количество полученных строк
            echo "<table class='table'></tr><br>";

            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>" . "<img style='height=100px;width=100px' src=" . $row['profile_pic'] . ">" . "</td>";
                echo "<td>" . $row["f_name"] . " " . $row["l_name"] . "</td>";
                echo "<td>" . $row["report"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            $result->free();
        } else {
            echo "Ошибка: " . $conn->error;
        }
        $conn->close();
    }

    makeTable($conn);

    ?>
</div>
</body>
</html>