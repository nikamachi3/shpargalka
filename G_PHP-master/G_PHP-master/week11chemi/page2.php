<h1>PAGE2</h1>

<?php
    session_start();
    $_SESSION["userName"] = "Lado";
    $_SESSION["userPassword"] = "123";
    echo "<hr>";
    echo $_SESSION["userName"];
    echo $_SESSION["userPassword"];
?>