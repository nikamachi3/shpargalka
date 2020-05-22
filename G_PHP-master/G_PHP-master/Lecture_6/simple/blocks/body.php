<div class="body">
   <nav>
      <ul>
         <?php
            $query = "SELECT * FROM menu";
            // $query = "SELECT id, title, description FROM menu";
            $result = mysqli_query($connection, $query);
            if(!$result){
               die ("Error!!"); 
            }  
            // var_dump($result);

            /*
            $row = mysqli_fetch_assoc($result);
            // echo "<pre>";
            // print_r($row);
            // echo "</pre>";
            echo "<li><a href=''>".$row["title"]."</a></li>";
            
            $row = mysqli_fetch_assoc($result);
            // echo "<pre>";
            // print_r($row);
            // echo "</pre>";
            echo "<li><a href=''>".$row["title"]."</a></li>";
            
            $row = mysqli_fetch_assoc($result);
            echo "<li><a href=''>".$row["title"]."</a></li>";

            $row = mysqli_fetch_assoc($result);
            echo "<li><a href=''>".$row["title"]."</a></li>";
            
            $row = mysqli_fetch_assoc($result);
            echo "<li><a href=''>".$row["title"]."</a></li>";
            */

            while($row = mysqli_fetch_assoc($result)){
               echo "<li><a href='?cat=".$row["title"]."'>".$row["title"]."</a></li>";
            }
            
         ?>
      </ul>
   </nav>
   <article>
         <?php
            echo $_GET["cat"];
            $cat = $_GET["cat"];
            $query = "SELECT * FROM menu WHERE title='$cat'";
            $result = mysqli_query($connection, $query);
            $row = mysqli_fetch_assoc($result);
            // echo "<pre>";
            // print_r($row);
            // echo "</pre>";
         ?>
         <div>
            <?=$row['description']?>
         </div>
         <div>
            <?=$row['keywords']?>
         </div>
   </article>
</div>