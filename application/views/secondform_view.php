<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/css/style.css"/>

<?php require "functions.php" ?>
<div class="container">
    <div class="card-body">
        <form action="/application/views/social_view.php" method="post" enctype="multipart/form-data">
                <input type="text" placeholder="Company" name="company" id="company" class="textarea"
                       style="width: 390px; height: 25px">
                <input type="text" placeholder="Position" name="position" id="position" class="textarea"
                       style="width: 390px; height: 25px">
                <input type="text" placeholder="About me" name="about" id="about" class="textarea"
                       style="width: 390px; height: 25px; margin-top: 5px">
                <input type="file" id="profile_pic" name="profile_pic" accept=".jpg, .jpeg, .png"
                       style="width: 390px; height: 25px; display: flex; margin-top: -47px; margin-left: 416px">
            <button class="button" id="second_to_social_btn" style="margin-top: 10px; margin-left: 750px">Next</button>
        </form>
    </div>
</div>
