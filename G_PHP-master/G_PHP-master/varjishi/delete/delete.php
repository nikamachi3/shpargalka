<?php
    $query = "SELECT id, title FROM menu";
    $result = mysqli_query($conn, $query);
    if(isset($_GET['remove'])){
       echo $_GET['remove'];
       $remove = $_GET['remove'];
       $delete_query = "DELETE FROM menu WHERE id='$remove'";
       mysqli_query($conn, $delete_query);
    } 
?>

<?php
    while($row = mysqli_fetch_assoc($result)){
        if($row["title"]==""){
         $row["title"] = "delete me!!!";
        }
         echo "<p><a href='?remove=".$row["id"]."'>".$row["title"]."</a></p>";
    }
?>