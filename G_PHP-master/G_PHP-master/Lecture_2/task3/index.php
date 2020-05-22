<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="number" name="x">
        <br>
        <br>
        <input type="submit" name="check" value="CHECK">
    </form>
    <?php
        $numbers = [10, 12, 34, 56, 89, 23, 23, 21, 30, 23, 11, 33];
        print_r($numbers);
        if(isset($_POST["check"])){
            $contain = false;
            for($i=0; $i<count($numbers); $i++){
                if($numbers[$i]==$_POST["x"]){
                    echo "<br><br>Array Numbers conatins ".$_POST["x"];
                    $contain = true;
                    break;
                }
            }
            if(!$contain){
                echo "<br><br>Array Numbers doesnot conatin ".$_POST["x"]; 
            }
        }
    ?>
</body>
</html>