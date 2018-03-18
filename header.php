<?php
session_start();
?>
<!DOCTYPE html>
<html>
<title>Home</title></head>
<body>

<header>
        <nav>
        <div>
        <a href="index.php">Home </a>
                <div>
                <form action="includes/login-inc.php" method="POST">

                <input type="text" name="uid" placeholder="Username/e-ma
il">
                <input type="password" name="pwd" placeholder="Password"
>
                <button type="submit" name="submit">Login</button>
                </form>
		<a href="signup.php">Sign up</a>
                </div>
        </div>
        </nav>
</header>

