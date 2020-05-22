<?php
    include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $query = "SELECT * FROM varjishi order by rand() limit 1";
        $result = mysqli_query($conn, $query);
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck > 0){
            while($rows = mysqli_fetch_assoc($result)){
                echo "<br>";
                echo "Username = {$rows["Username"]}";
                echo "<br>";
                echo "Password = {$rows["Password"]}";
            }
        }
        else {
            echo "Shedegi ar aris ertze meti!";
        }
    ?>

    
</body>
</html>