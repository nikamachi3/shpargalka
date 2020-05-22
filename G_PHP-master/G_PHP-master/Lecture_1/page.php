<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <P>Hello World</P>
    <?php
        echo "My first PHP script!"; 
    //    echo "My first PHP script!";
        $x = 10;
        $y = 6.9;
        $s = "Hello Misha!!!";
        echo "<br>";
        echo "<hr>";
        echo $x+$y;
        echo "<hr>";
        echo $x." Hello Bacho! ".$s;
        echo "<hr>";
        $Name = "Joni";
        $name = "Vako";
        echo $Name." is my friend. ".$name."'s too.";
        echo "<hr><hr>";
        // $cars = array("Volvo", 25, 13.25);
        $cars = ["Volvo", 25, 13.25];
        echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
    ?>
</body>
</html>