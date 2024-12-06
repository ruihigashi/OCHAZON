<?php
session_start();

function logout(){
    $_SESSION = array();
    session_destroy();
    header("home.php");
    return;
}
?>