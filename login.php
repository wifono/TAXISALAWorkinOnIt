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
            header("Location:error.php");
         };
    }

    include "partials/head.php";
?>

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
                <form id="loginform" action="#" method="post">
                    <label for="username">Username</label><br>
                    <input type="text" placeholder="Username" name="username" required><br>

                    <label for="password">Password</label><br>
                    <input type="password" placeholder="Password" name="password" required><br>

                    <input type="submit" value="Login" name="login">
                </form>
            </div>
     
            
<?php include "partials/footer.php"
?>