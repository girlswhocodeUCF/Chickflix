<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./style.css" />
    <title>ChickFlix</title>
</head>
<body>
    <h1>CHICKFLIX</h1>
    <div class="main">
    <!-- TOGGLE IS A COMMENT FOR NOW
			
		<div class="toggle">
            <label class="switch"> 
            <input type="checkbox">
                <span class="slider"></span>
            </label>
        </div>
		!-->
        <form method="post">
            <h2>Sign Up</h2>
            <div class="box">
                <input id="text" class="textbox" type="text" name="email" placeholder="email">
            </div>
            <div class="box">
                <input id="text" class="textbox" type="text" name="user_name" placeholder="username">
            </div>
            <div class="box">
                <input id="text" class="textbox" type="password" name="password" placeholder="password">
            </div class="box">
            <input id="button" class="button" type="submit" value="Signup">
            <div>
            <a href="login.php">Click to Login</a><br><br>
            <a href="password.php">Forgot your password?</a>
            </div>
        </form>

    </div>
</body>
</html>

<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$email = $_POST['email'];
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !empty($email) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,email,user_name,password) values ('$user_id','$email','$user_name','$password')";

			mysqli_query($con, $query);
			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information";
		}
	}
?>

