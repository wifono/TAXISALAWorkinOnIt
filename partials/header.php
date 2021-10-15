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
                <div class="navigation">
                    <nav>
                        <ul>

                        <?php

  $pages = glob('*.php');
  $pages = array_reverse($pages);
    
    foreach($pages as $file) {

        $page = basename($file, '.php');

        if ($page == 'index') $page= 'home';
        
        if ($page_name == '$page') echo '<li><a class="active">'. ucfirst($page) .'</a></li>';
        else echo '<li><a href="'. $file .'">'. ucfirst($page) .'</a></li>';

}
            /* if ($page_name == 'home' ) echo '<li><a class="active">Domov</a></li>';
            else echo '<li><a href="index.php">Domov</a></li>';

            if ($page_name == 'contacts') echo '<li><a class="active">Kontakty</a></li>';
            else echo '<li><a href="contacts.php">Kontakty</a></li>';

            if ($page_name == 'aboutus') echo '<li><a class="active">O nás</a></li>';
            else echo '<li><a href="aboutus.php">O nás</a></li>'; */

                        ?>
                        
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        <main>