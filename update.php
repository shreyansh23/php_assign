<!DOCTYPE html>
<html>
<head><title>update profile</title></head>
<body>
<form action="upload_pic.php" method="post" enctype="multipart/form-data">
    Select profile photo to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit"><br>
</form>
 <form action="upload_cover.php" method="post" enctype="multipart/form-data">   
 Select cover photo to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit"><br>
</form>
<form action= '/includes/pic-inc.php'  method="POST">
<input type="text" name="branch" placeholder="Branch"><br>
<input type="text" name="interests" placeholder="Interests"><br>

<button type ="submit" name="submit2">Save Changes</button>
</form>
<br><a href="profile.php"><button>Back to Profile Page</button></a>
<br><br>

<h2>Change Password</h2>
<form method="POST" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' onsubmit="return validate();">
<input type="password" name="current" placeholder="Current Password">
<input type="password" name="pwd" id="pwd" placeholder="New Password">
<input type="password" name="cpwd" id="cpwd" placeholder="Confirm Password" onkeyup="validate()">
<span id="password"></span>
<input type="submit">
</form>


<script>
var c=document.getElementById('password');
function validate()
{
var a=document.getElementById('pwd').value;
var b=document.getElementById('cpwd').value;
if(a==b)
{
c.innerHTML="Passwords Matched";
return true;}
else
{c.innerHTML="Passwords do not match!";
return false;
}

}


</script>
</body>
<html>

<?php

session_start();
include_once('includes/dbh-inc.php');

$uid=$_SESSION['u_uid'];
$new=$_POST['pwd'];
$hashedPwd=password_hash($new,PASSWORD_DEFAULT);


# $sql="select * from users where user_uid=".$uid." ";
#                $result=mysqli_query($conn,$sql);
#               $resultCheck=mysqli_num_rows($result);
#                $row=mysqli_fetch_assoc($result);
       



 if($new!="")
{             
 $sql="update users set user_pwd ='$new' where user_uid='$uid' ";
                $result=mysqli_query($conn,$sql);
                $resultCheck=mysqli_num_rows($result);
               # $row=mysqli_fetch_assoc($result);
}      
?>

