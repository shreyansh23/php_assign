
<?php
 include_once 'header.php';
 ?>

<section>
<h2>Home</h2>
</section>

<?php 
	if(isset($_SESSION['u_id']))
	

	{echo "Hi ".$_SESSION['u_first']."! You are logged in.";
	echo '</br><a href="profile.php">	<button>Profile</button></a>
	<a href="feeds.php">	<button>Feeds</button></a>';}
?>

<?php
 include_once 'footer.php';
?>



