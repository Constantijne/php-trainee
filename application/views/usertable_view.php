<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/css/style.css"/>

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
