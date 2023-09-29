<?php
session_start();
if(isset($_SESSION["login"]) && $_SESSION["login"]==true)
{
    session_unset();
    session_reset();
    session_destroy();
    // unset($_COOKIE["name"]);
    header("location: main.php");
    


}
?>