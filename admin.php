<?php
    session_start();

    include "partials/head.php";
    include "partials/header.php";
?>

<?php 
    if( $_SESSION['usertype']=='admin'){
        include_once "partials/controlpanel.php";    
    } else {
        header("Location:index.php");
        die();
    }
?>

<?php include "partials/adminfooter.php" ?>;