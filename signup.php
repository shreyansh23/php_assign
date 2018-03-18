
<?php
 include_once 'header.php';
 ?>

<div>
<section>
<h2>Signup</h2>
<form action="includes/signup-inc.php" method="POST">
	<input type="text" name="first" placeholder="Firstname">
	<input type="text" name="last" placeholder="Lastname">
	<input type="text" name="email" placeholder="Email">
	<input type="text" name="uid" placeholder="Username">
	<input type="text" name="pwd" placeholder="Password">
	<button type="submit" name="submit" >Sign up</button>
</form>
</section>
</div>

<?php
 include_once 'footer.php';
?>



