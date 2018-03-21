
<?php

$dbServername="localhost";
$dbUsername="root";
$dbPassword="electrolux";
$dbName="php_assignment";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);


if(isset($_POST['user_name']))
{
 $name=$_POST['user_name'];

 $checkdata=" SELECT user_uid FROM users WHERE user_uid='$name' ";

 $query=mysqli_query($conn,$checkdata);

 if(mysqli_num_rows($query)>0)
 {
  echo "User Name Already Exist";
 }
 else
 {
  echo "OK";
 }
 exit();
}


 
?>
