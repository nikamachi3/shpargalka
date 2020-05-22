<article>
      <?php
         if(isset($_GET["cat"]))
         {
            echo $_GET["cat"];
            $cat = $_GET["cat"];
            $query = "SELECT * FROM menu WHERE title='$cat'";
            $result = mysqli_query($connection, $query);
            $row = mysqli_fetch_assoc($result);
            ?>
            <div>
               <?=$row['description']?>
            </div>
            <div>
               <?=$row['keywords']?>
            </div>
            <?php
         }
      ?>
</article>