<?php
   // $myfile = fopen("testfile.txt", "w");
   // fwrite($myfile, "Test PHP");
   // date_default_timezone_set('Asia/Tbilisi');
   // echo fileatime("testfile.txt");
   // echo "<br>";
   // echo "Last access: ".date("F d Y H:i:s.", fileatime("testfile.txt"));
   // echo "<bre>";
   // echo date("F d Y H:i:s");


   $target_dir = "uploads/";
   // $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
   // $uploadOk = 1;
   // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
   // Check if image file is a actual image or fake image
   if(isset($_POST["submit"])) {
      echo "<pre>";
      print_r($_FILES["fileToUpload"]);
      move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "uploads/".$_FILES["fileToUpload"]["name"]);
      echo "</pre>";
   }
?> 

<!DOCTYPE html>
<html>
<body>

<form method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>