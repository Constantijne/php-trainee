<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400&display=swap" rel="stylesheet">
    <style>
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

        .map {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        input {
            font-family: 'Nunito', sans-serif;
            border: 1px solid #6f9ff1;
            font-size: 17px;
            border-radius: 5px;
            padding: 10px;
        }

        select {
            font-family: 'Nunito', sans-serif;
            border: 1px solid #6f9ff1;
            font-size: 17px;
            border-radius: 5px;
            padding: 10px;
            margin-right: 20px;
        }

        .header-bar {

            text-align: center;

            color: #fff;
            padding: 10px;
            border-radius: 5px 5px 5px 5px;
            background: linear-gradient(90deg, #6f9ff1 43%, #92da87 100%);
        }

        .button {
            border: 1px solid #6f9ff1;
            background-color: #fafafa;
            color: #6f9ff1;
            padding: 10px;
            font-size: 14px;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        .card-body {
            padding: 20px;
        }

        h1, h2, h3, h4, h5, h6, label {
            text-align: center;
            font-family: 'Nunito', sans-serif;
        }

        a, p {
            color: #4b5156;
        }

        .p-styling input {
            margin-left: 20px;
            margin-right: 1px; /* Отступ справа */
            margin-bottom: 10px; /* Отступ снизу */
        }
        a {
            font-family: 'Nunito', sans-serif;
            border: 1px solid #6f9ff1;
            font-size: 17px;
            border-radius: 5px;
            padding: 10px;
        }
    </style>

    <title>Step #1</title>
</head>


<body>
<?php require "functions.php" ?>
<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1wFyztWUwU_C27wsrdn0vizL8G-OxlQiK&ehbc=2E312F" width="80%"
        height="450" frameborder="0" class="map"></iframe>
<br><br><br>
<div class="container">
    <div class="header-bar">
        <h2 style="text-align: center">To participate in the conference, please fill out the form :</h2>
    </div>

    <div class="card-body">
            <p class="p-styling">
                <input type="text" placeholder="First Name" name="f_name" id="f_name" class="textarea"
                       style="width: 390px">
                <input type="text" placeholder="Last Name" name="l_name" id="l_name" class="textarea"
                       style="width: 390px"><br>
                <br><input type="date" placeholder="Birthday" name="b_day" id="b_day" class="textarea"
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
                <br><input type="email" placeholder="Email" name="email" id="email" class="textarea"
                           style="width: 390px; margin-top: 20px">
            </p>

        <a href="/secondform" class="button" style="margin-top: 90px; margin-left: 750px">Next</a>
    </div>
</div>
</body>
</html>


