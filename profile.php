<!DOCTYPE html>
<html><title>profile</title></form>
<body>
<img src="uploads/default_cover.png" id="cover" style="width:100%; height:250px;">
<center><img src="uploads/default.jpg" id="dp" style="width:150px;height:150px;"></center>



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
<form action="includes/pic-inc.php" method="POST">
<button type ="submit" name="submit">Save Changes</button>
</form>


</body>
</html>
