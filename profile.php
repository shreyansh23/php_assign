
<!DOCTYPE html>
<html><title>profile</title>
<body>
<?php
session_start();
$dp=$_SESSION['u_dp'];
$cover=$_SESSION['u_cover'];
$branch=$_SESSION['u_branch'];
$interests=$_SESSION['u_interests'];
if(empty($_SESSION['u_dp'])||empty($_SESSION['u_cover'])||empty($_SESSION['u_branch'])||empty($_SESSION['u_interests']))
{


 echo '
<img src="uploads/default_cover.png" id="cover" style="width:100%; height:350px;">
<center><img src="uploads/default.jpg" id="dp" style="width:150px;height:150px;"></center>
<h2>To explore more features complete your profile!  </h2>

<a href="update.php"><button>Update Profile</button></a>
<a href="index.php?home"><button>Home Page</button> </a>';

}
else{


echo '
 <img src="uploads/'.$cover.'" id="cover" style="width:100%; height:350px;">
<center><img src="uploads/'.$dp.'" id="dp" style="width:150px;height:150px;"></center>
<form action="feeds.php" method="POST"><button type="submit">Go to feeds</button></form>


<a href="update.php"><button>Update Profile</button></a>


<a href="index.php"><button>Home Page</button> </a>
<h3>My Branch :</h3><br>'.$branch.'<h3>My Interests :</h3>'.$interests;}
?>
</body>
</html>
