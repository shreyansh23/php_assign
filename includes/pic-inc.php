<?php
session_start();
include_once 'dbh-inc.php';
$u_dp=$_SESSION['u_dp'];
$u_cover=$_SESSION['u_cover'];
$u_uid=$_SESSION['u_uid'];
$branch=mysqli_real_escape_string($conn,$_POST['branch']);

$interests=mysqli_real_escape_string($conn,$_POST['interests']);
$_SESSION['u_branch']=($branch);
$_SESSION['u_interests']=($interests);
$sql = "INSERT INTO profile (dp, cover,user_uid,branch,interests)
VALUES ('$u_dp', '$u_cover', '$u_uid','$branch','$interests')";

if (mysqli_query($conn, $sql)) {
   # echo "New record created successfully";
	header("Location: ../profile.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>


