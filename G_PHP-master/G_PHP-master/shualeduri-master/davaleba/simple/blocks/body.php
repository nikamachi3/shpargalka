<div class="body">
    <nav>
        <ul>
            <?php
                $query = "SELECT * FROM training";
                $result = mysqli_query($connection,$query);
                if(!$result){
                    die("Error!!!");
                }
                while($row = mysqli_fetch_assoc($result)){
                    echo "<li><a href = '?cat=".$row["name"]."'>".$row["name"]."</a></li>";
                }
            ?>
        </ul>
    </nav>
    <article>
        <?php
            echo $_GET["cat"];
            $cat = $_GET["cat"];
            $query = "SELECT * FROM training WHERE name='$cat'";
            $result = mysqli_query($connection,$query);
            $row = mysqli_fetch_assoc($result);
        ?>
        <div>
            <?=$row["description"]?>;
        </div>
        <div>
            <?=$row["keywords"]?>;
        </div>
    </article>
</div>