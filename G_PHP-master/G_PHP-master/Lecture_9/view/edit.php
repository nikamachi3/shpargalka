<?php
   if(isset($_GET['id'])){
      $id = $_GET['id'];
      // echo $id;
      $sql_edit = "SELECT * FROM menu WHERE id=$id";
      $result = mysqli_query($connection, $sql_edit);
      $row = mysqli_fetch_assoc($result);
      // var_dump($row);
   } 
   if(isset($_POST['updatebutton'])){
      $id = $_POST['id'];
      $title = $_POST['title'];
      $description = $_POST['description'];
      $keywords = $_POST['keywords'];
      $sql_update = "UPDATE menu SET 
                                  title='$title', 
                                  description='$description', 
                                  keywords='$keywords'
                     WHERE id=$id";
      mysqli_query($connection, $sql_update);
      header('Location: ?top=update');               
   }     
?>
<article>
     <h1>Edit Nav Item</h1>
     <form action="" style="padding:20px" method="post">
         Title
         <input type="text" name="title" value="<?=$row['title']?>">
         <br>
         <br>
         Description
         <br>
         <textarea name="description" cols="30" rows="10"><?=$row['description']?></textarea>
         <br>
         <br>
         Keywords
         <br>
         <textarea name="keywords" cols="30" rows="4"><?=$row['keywords']?></textarea>
         <br>
         <br>
         <input type="hidden" name="id" value="<?=$row['id']?>">
         <input type="submit" name="updatebutton" value="UPDATE">
     </form>
</article>