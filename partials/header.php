<?php 

    $page_name =  basename($_SERVER['SCRIPT_NAME'], '.php');

    if ($page_name == 'index' ) $page_name = 'home';

?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> <?php echo ucfirst($page_name) ?> / Taxíky v Šali</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="..\TAXISALA\assets/css\generals.css">
        <link rel="stylesheet" href="../TAXISALA\assets/css\normalize.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;700;800&display=swap" rel="stylesheet"> 
    </head>

    <body>


        <div class="site">

        <header>
            <div class="container">
                <div class="logo">
                    <h1>Taxislužby v Šali</h1>
                </div>
            </div>
        </header>

        <main>