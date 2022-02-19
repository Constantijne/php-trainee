<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/css/style.css">


<?php require "functions.php" ?>
<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1wFyztWUwU_C27wsrdn0vizL8G-OxlQiK&ehbc=2E312F" width="80%"
        height="450" frameborder="0" class="map"></iframe>
<br><br><br>
<div class="container">
    <div class="header-bar">
        <h2 style="text-align: center">To participate in the conference, please fill out the form :</h2>
    </div>
    <form action="/application/views/redirectUsers.php" method="post">
        <p class="p-styling">
            <input type="text" placeholder="First Name" name="first_name" id="f_name" class="firstname_area"
                   style="width: 390px">
            <input type="text" placeholder="Last Name" name="last_name" id="l_name" class="textarea"
                   style="width: 390px"><br>
            <br><input type="date" placeholder="Birthday" name="birthday" id="b_day" class="textarea"
                       style="width: 390px"><br>
            <br><input type="text" placeholder="Report Subject" name="report" id="report" class="textarea"
                       style="width: 803px"><br>
            <br><select name="country" id="country" style="width: 390px;  margin-left: 20px" class="select">
                <option value="usa">USA</option>
                <option value="ukraine">Ukraine</option>
                <option value="poland">Poland</option>
                <option value="czech republic">Czech Republic</option>
            </select>
            <br><br><input type="tel" placeholder="Phone Number [+1(555)-555-5555]"
                           pattern="+1[0-9]{3}-[0-9]{3}-[0-9]{4}" name="number" id="number" class="textarea"
                           style="width: 390px; margin-top: 10px">
            <br><input type="email" class="email_area" placeholder="Email" name="email" id="email"
                       style="width: 390px; margin-top: 20px">

            <button class="button" style="margin-top: 10px; margin-left: 750px">Next</button>
            <script src="/js/getEmailScript.js"></script>
        </p>
    </form>

</div>


