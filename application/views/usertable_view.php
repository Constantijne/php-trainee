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
    require "functions.php";
    $pdo = connectToDB();
    makeTable($pdo);
    ?>
</div>
</body>
</html>
