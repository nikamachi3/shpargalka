<h1>PAGE4</h1>
<?php
    session_start();
    echo $user;

    echo $_SESSION["userName"];
    echo $_SESSION["userPassword"];
    unset($_SESSION["userPassword"]);
?>