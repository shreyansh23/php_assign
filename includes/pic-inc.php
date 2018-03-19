<?php
session_start();
include_once 'dbh-inc.php';
$u_dp=$_SESSION['u_dp'];
$u_cover=$_SESSION['u_cover'];
$u_uid=$_SESSION['u_uid'];


$sql = "INSERT INTO collection (dp, cover,user_uid)
VALUES ('$u_dp', '$u_cover', '$u_uid')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>


