<?php
    if(isset($_POST["sbm"])){
        $a = $_POST["title"];
        $b = $_POST["description"];
        $c = $_POST["keywords"];
        $sql = "INSERT INTO menu(title, description, keywords) VALUES ($a, $b, $c);";
        mysqli_query($conn, $sql);
    }

?>
        