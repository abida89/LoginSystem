<?php

/**
 * @author Boomer
 * @copyright 2017
 */
 session_start();
if (isset($_POST['submit'])){
    session_unset();
    session_destroy();
    header("Location:../index.php");
    exit();
}


?>