<?php
   if(isset($_POST['insertbutton'])){
      $title = $_POST['title'];
      $description = $_POST['description'];
      $keywords = $_POST['keywords'];
      $sql =  "INSERT INTO menu (title, description, keywords)
               VALUES (
                  '$title', 
                  '$description', 
                  '$keywords')";
      mysqli_query($connection, $sql);
      header('Location: /G_PHP/Lecture_9/?top=insert');  
   }          
?>
<article>
     <h1>INSERT</h1>
     <form action="" style="padding:20px" method="post">
         Title
         <input type="text" name="title">
         <br>
         <br>
         Description
         <br>
         <textarea name="description" cols="30" rows="10"></textarea>
         <br>
         <br>
         Keywords
         <br>
         <textarea name="keywords" cols="30" rows="4"></textarea>
         <br>
         <br>
         <input type="submit" name="insertbutton" value="INSERT">
     </form>
</article>