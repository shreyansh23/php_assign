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
</body>
<html>

