<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" />
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
        <form method="post" action="login.php">
            <h2>Login</h2>
            <div class="box">
                <input id="text"class="textbox" type="text" name="user_name" placeholder="username">
            </div>
            <div class="box">
                 <input id="text" class="textbox" type="password" name="password" placeholder="password" name="password">
            </div class="box">
            <input id="button" class="button" type="submit" value="Login" name="login_Btn"> 
            <div>
            <a href="password.php">Forgot your password?</a><h3>
            <a href="signup.php">Sign Up</a>
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
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: mainpage.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


