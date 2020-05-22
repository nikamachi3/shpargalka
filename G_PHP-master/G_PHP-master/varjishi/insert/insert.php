<?php
    include_once "connection.php";

    if(isset($_POST["sbm"])){
        $a = $_POST["title"];
        $b = $_POST["description"];
        $c = $_POST["keywords"];
        $sql = "INSERT INTO menu (title, description, keywords) VALUES ('$a', '$b', '$c');";
        mysqli_query($conn, $sql);
    }

?>


<form action="" method="POST">
        <input type="text" name="title">
        <br>
        <input type="text" name="description">
        <br>
        <input type="text" name="keywords">
        <br>
        <button type="submit" name="sbm">INSERT</button>
    </form>
