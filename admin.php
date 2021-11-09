<?php
    session_start();
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
    <title> Taxislužby v Šali</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/generals.css">
    <link rel="stylesheet" href="assets/css/normalize.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;700;800&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/4c2f3a8e33.js" crossorigin="anonymous"></script>
</head>

<body>
<div class="site">
    <div class="flexbox">

<header>
    <div class="logo">
        <h1>Taxislužby v Šali</h1>  
    </div>

    <div class="username">
        <h2><?php echo $_SESSION["username"] ?></h2>
    </div>

    <div class="logout">
        <a href="logout.php">Log out</a>
    </div>

    <div class="socials">
        <ul> 
            <li>
                <a href="https://www.facebook.com/Freonnet" target="_blank"><i id="fblogo" class="fab fa-facebook"></i></a>
            </li>

            <li>
                <a href="https://github.com/wifono" target="_blank"><i class="fab fa-github"></i></a>
            </li>
        </ul>
     </div>

</header>

<div id="addIcon" class="addIcon">
    <a href="#"><i class="fas fa-plus"></i></a>
</div>

<div class="controlpanel">
    <div class="addTaxi">
        <form action="submit">
            <label for="taxiname">Názov Taxislužby</label>
            <input type="text">
            <label for="taxinumber">Číslo Taxislužby</label>
            <input type="text">
            <button type="submit" class="button">Pridať</button>
        </form>
    </div>

    <div class="container">
        <section class="mainContent">
                <div class="taxiBoxAdmin">
                    <h2>A.P.K. Taxi</h2>

                    <a class="number" href="tel:+421948035075">0948 035 075</a>
                    
                    <div class="controls">
                        <ul>
                            <li><a href="#"><i class="fas fa-edit"></i></a></li>
                            <li><a href="#"><i class="fas fa-trash"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="taxiBoxAdmin">
                    <h2>Exclusive TAXI</h2>


                <a class="number" href="tel:+421904825456">0904 825 456</a>

                    <div class="controls">
                        <ul>
                            <li><a href="#"><i class="fas fa-edit"></i></a></li>
                            <li><a href="#"><i class="fas fa-trash"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="taxiBoxAdmin">
                    <h2>IP TAXI</h2>

                    <a class="number" href="tel:+421915330550">0915 330 550</a>
                    
                    <div class="controls">
                        <ul>
                            <li><a href="#"><i class="fas fa-edit"></i></a></li>
                            <li><a href="#"><i class="fas fa-trash"></i></a></li>
                        </ul>
                    </div>
                </div>    

                <div class="taxiBoxAdmin">
                    <h2>K - Taxi</h2>

                    <a class="number" href="tel:+421905605836">0905 605 836</a>

                    <div class="controls">
                        <ul>
                            <li><a href="#"><i class="fas fa-edit"></i></a></li>
                            <li><a href="#"><i class="fas fa-trash"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="taxiBoxAdmin">
                    <h2>LLB - TAXI</h2>

                    <a class="number" href="tel:+421948377453">0948 377 453</a>
                    
                    <div class="controls">
                        <ul>
                            <li><a href="#"><i class="fas fa-edit"></i></a></li>
                            <li><a href="#"><i class="fas fa-trash"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="taxiBoxAdmin">
                    <h2>SB TAXI</h2>

                    <a class="number" href="tel:+421940577277">0949 577 277</a>
                    
                    <div class="controls">
                        <ul>
                            <li><a href="#"><i class="fas fa-edit"></i></a></li>
                            <li><a href="#"><i class="fas fa-trash"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="taxiBoxAdmin">
                    <h2>STIV - TAXI</h2>

                    <a class="number" href="tel:+421910405010">0910 405 010</a>
                    
                    <div class="controls">
                        <ul>
                            <li><a href="#"><i class="fas fa-edit"></i></a></li>
                            <li><a href="#"><i class="fas fa-trash"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="taxiBoxAdmin">
                    <h2>VIVA TAXI</h2>

                    <a class="number" href="tel:+421944196195">0944 196 195</a>
                    
                    <div class="controls">
                        <ul>
                            <li><a href="#"><i class="fas fa-edit"></i></a></li>
                            <li><a href="#"><i class="fas fa-trash"></i></a></li>
                        </ul>
                    </div>
                </div>


                <div class="taxiBoxAdmin">
                    <h2>WORLD TAXI</h2>

                    <a class="number" href="tel:+421919451763">0919 451 763</a>
                    
                    <div class="controls">
                        <ul>
                            <li><a href="#"><i class="fas fa-edit"></i></a></li>
                            <li><a href="#"><i class="fas fa-trash"></i></a></li>
                        </ul>
                    </div>
                </div>
            
            </div>
        </section>
    </div>    


        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <script src="assets/scripts/scripts.js" async defer></script>
        <script src="assets/scripts/jquery-3.6.0.min.js"></script>
    </body>
    </div>
    </div>
</html>