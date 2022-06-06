<?php
    session_start();
    if ($_SESSION['username'])
    {
        echo "<br><font size=8> Welcome  ". $_SESSION['username'];
    }
    else
    {
        header("location:Admin-Login.php");
    }
   

?>