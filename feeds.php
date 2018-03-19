<!DOCTYPE html>
<html>
<body>
<h1>Common feed page</h1>
<form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method="POST">
<textarea rows="10" cols="80" placeholder="Add a new post here..." name="comment"></textarea>
<input type="submit" name="feed">
<br>
</form>

<?php
session_start();
print_r($_SESSION);

$u_uid=$_SESSION['u_uid'];
include_once('includes/dbh-inc.php');
$comment=$_POST['comment'];
$date=(date("F d, Y h:i:s", time()));
if(isset($_POST['feed']))
{
$sql = "INSERT INTO comments (comment, date,user_uid)
VALUES ('$comment', '$date', '$u_uid')";

if (mysqli_query($conn, $sql)) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}


echo '<br><hr><hr><br>';

$sql="SELECT user_uid,comment, date from comments order by id desc";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
   while($row = mysqli_fetch_assoc($result)) {
        echo "<b>" . $row['user_uid']. "</b>  commented " . $row['comment'] . " on " . $row['date'] ."<br>";
}}
 else {
    echo "0 results";
}

mysqli_close($conn);

?>


