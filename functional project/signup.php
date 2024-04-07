<?php

include("classes/connect.php");
include("classes/signup.php");

$username="";
$password="";

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $signup = new SignUp();
    $result = $signup->evaluate($_POST);

    if ($result != "") {

        echo "<div style='text-align:center;font-size:12px;color:red';background-color:white>";
        echo "The following error occured:<br>";
        echo $result;
        echo "</div>";
    } else {
        header("Location: login.php");
        die;
    }

}

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup | CockBots</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: lightgrey;
            margin: 0;
            padding: 0;
        }

        #bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: darkred;
            height: 100px;
            border-radius: 4px;
            padding: 0 20px;
        }

        #title {
            font-size: 24px;
            color: white;
        }

        #signup_button {
            background-color: white;
            padding: 10px 20px;
            border-radius: 4px;
            color: darkred;
            cursor: pointer;
        }

        #signup_button:hover {
            background-color: #f0f0f0;
        }

        #login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            margin: auto;
            margin-top: 50px;
        }

        #login-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        #username,
        #password,
        #confirm_password {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        button {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: darkred;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: black;
        }
    </style>
</head>

<body>
    <div id="bar">
        <h1 id="title">CockBots</h1>
        <div>
            <button onclick="window.location.href = 'login.php';" style="background-color: white; color:black">LogIn</button>
        </div>
    </div>
    <div id="login-container">
        <h2>Signup to CockBots</h2>
        <form action="signup.php" method="post">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="input-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>
            <button type="submit">Signup</button>
        </form>
    </div>
</body>

</html>
