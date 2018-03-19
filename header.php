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
		<?php
		if(isset($_SESSION['u_id']))
		{
		echo '<form action="includes/logout-inc.php" method="POST">
		<button type="submit" name="submit">Logout</button>
		</form>';
		}
		
		else{echo '  <form action="includes/login-inc.php" method="POST">

                <input type="text" name="uid" placeholder="Username/e-mail">
                <input type="password" name="pwd" placeholder="Password">
                <button type="submit" name="submit">Login</button>
                </form>
		<a href="signup.php">Sign up</a>' ;
       		 }
  
		 ?>
                
                </div>
        </div>
        </nav>
</header>

