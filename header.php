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
		
		$uid="";$pwd="";
			 if(isset($_COOKIE["u_uid"])) { $uid= $_COOKIE["u_uid"]; }
				 if(isset($_COOKIE["u_pwd"])) { $pwd= $_COOKIE["u_pwd"]; }



		if(isset($_SESSION['u_id']))
		{
		echo '<form action="includes/logout-inc.php" method="POST">
		<button type="submit" name="submit">Logout</button>
		</form>';
		}
	




		 		
		else{echo '  <form action="includes/login-inc.php" method="POST">

                <input type="text" name="uid" placeholder="Username/e-mail" value="'.$uid.'">
                <input type="password" name="pwd" placeholder="Password" value="'.$pwd.'">
		<input type="checkbox" name="remember" id="remember"> Remember Me
                <button type="submit" name="submit">Login</button>
                </form>
		<a href="signup.php">Sign up</a>' ;
       		 }
  
		 ?>
                
                </div>
        </div>
        </nav>
</header>
<script>
function setCookie(cname,cvalue,exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
</script>

