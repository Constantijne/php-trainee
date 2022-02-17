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

        input{
            font-family: 'Nunito', sans-serif;
            border: 1px solid #6f9ff1;
            font-size: 17px;
            border-radius: 5px;
            padding: 10px;
        }

        input text {
            font-family: 'Nunito', sans-serif;
            border: 1px solid #6f9ff1;
            font-size: 17px;
            border-radius: 5px;
            padding: 10px;
        }

        .button{
            border: 1px solid #6f9ff1;
            background-color: #fafafa;
            color: #6f9ff1;
            padding: 10px;
            font-size: 14px;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        .card-body{
            padding: 20px;
        }

        h1, h2, h3, h4, h5, h6, label {
            text-align: center;
            font-family: 'Nunito', sans-serif;
        }

        p {
            color: #4b5156;
        }

        .p-styling input{
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

    <title>Step #2</title>
</head>



<body>



<div class="container">
    <div class="card-body">
            <p class="p-styling">
                <input type="text" placeholder="Company" name="company" id="company" class="textarea" style="width: 390px">
                <input type="text" placeholder="Position" name="position" id="position" class="textarea" style="width: 390px">
                <input type="text" placeholder="About me" name="about" id="about" class="textarea" style="width: 805px">
                <input type="file" id="profile_pic" name="profile_pic" accept=".jpg, .jpeg, .png" style="width: 390px; margin-left: 230px; display: flex">
            </p><br>
        <a href="/social" class="button" style="margin-top: 90px; margin-left: 770px">Next</a>

    </div>
</div>
</body>
</html>