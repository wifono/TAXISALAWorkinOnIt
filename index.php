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



    <?php 
    if(isset($_SESSION["username"]) && $_SESSION["username"] == true) {
     ?>   

    <div class="username">
        <h2><?php echo $_SESSION["username"] ?></h2>
    </div>
    
    <div id="logout" class="logout">
        <a href="logout.php">Log out</a>
    </div>
    <?php 
    }else {
    };
    ?>

    
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



        

    <div class="container">
        <section class="mainContent">
                
<?php  
function ReadTaxi(){
    global $data;
    global $result;

    $data = mysqli_connect("localhost","root","941000023870268","freonnet_admin_users");

    $query = "SELECT taxiname, taxinumber FROM taxi_database";
    $result = mysqli_query($data, $query);
   
    if(!$result){
        die("error");
    }
    if(mysqli_num_rows($result) > 0) {
        
        while($row = mysqli_fetch_array($result)){
            include "partials/taxibox.php";
        }
}}
    ReadTaxi();
?>
        </section>
    </div>    




<footer>
    <div class="prefooter">
        
        <div class="banner">
            <p>Táto stránka funguje vďaka <a href="https://freonnet.sk" target="_blank">freonnet.sk</a></p>
        </div>

        <div class="infos">
            
            <div class="infosheader">
                <h3>Freonnet</h3>
                <img src="assets/images/logo.png" alt="assets/images/logo.png">

            </div>
                <ul>
                    <li>Správa sietí</li>
                    <li>Opravy počítačov a notebookov</li>
                    <li>Kamerové systémy</li>
                    <li>Alarmy</li>
                    <li>Elektrikárske práce</li>
                </ul>

                <div class="description">
                    <p>Freonnet, je mladá spoločnosť poskytujúca pomoc v oblasti IT,
                        elektroniky a zabezpečenia. Freonnet ponúka služby týkajúce sa opravy elektronických zariadení,
                        počítačov, zabezpečenia, montáže elektrických zariadení či napríklad výrobu počítačových,
                        elektronických či optických výrobkov. Našim poslaním je pomáhať Vám v oblasti IT odborne a zodpovedne. </p>
                </div>
         </div>
        </div>
</div> 
</div>

</footer>



<!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<script src="assets/scripts/scripts.js" async defer></script>
<script src="assets/scripts/jquery-3.6.0.min.js"></script>
</body>
</html>