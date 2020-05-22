<?php
    echo "This is next.php";
    echo "<hr>";
    echo $_POST["username"];
    echo "<hr>";
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";
?>
<link rel="stylesheet" href="style.css">
<table>
    <tr>
        <td>Name:</td>
        <td><?=$_POST["username"]?></td>
    </tr>
    <tr>
        <td>Lastname</td>
        <td><?=$_POST["userlast"]?></td>
    </tr>
    <tr>
        <td>Age</td>
        <td><?=$_POST["userage"]?></td>
    </tr>
</table>