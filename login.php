<?php 
   session_start();
   global $data;
   global $row;

   $data = mysqli_connect("localhost","root","941000023870268","freonnet_admin_users");



    if(isset($_POST["login"])) {
        
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = mysqli_query($data,"SELECT * FROM admin_users WHERE username ='".$username."' AND password = '".$password."'");
        $row = mysqli_fetch_array($sql);

        if($row["usertype"] == "user"){
            $_SESSION['username']= $username;
            $_SESSION['password']= $password;
            $_SESSION['usertype']= $row["usertype"];
    
            header("Location:index.php");
        }else if($row["usertype"] == "admin"){
            $_SESSION['username']= $username;
            $_SESSION['password']= $password;
            $_SESSION['usertype']= $row["usertype"];
            
            header("Location:admin.php");
        }else {
            echo "<script type='text/javascript'>";
            echo "Invalid username or password.";
            echo "</script>";
        }
    }
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

            <div class="loginform">
                <form id="loginform" action="login.php" method="post">
                    <label for="username">Username</label><br>
                    <input type="text" placeholder="Username" name="username" required><br>

                    <label for="password">Password</label><br>
                    <input type="password" placeholder="Password" name="password" required><br>

                    <input type="submit" value="Login" name="login">
                </form>
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