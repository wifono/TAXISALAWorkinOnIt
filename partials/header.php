<header>
    <div class="logo">
        <a href="index.php"><h1>Taxislužby v Šali</h1> </a> 
    </div>



    <?php 
    if(isset($_SESSION["username"]) && $_SESSION["username"] == true) {
     ?>   

    <div class="account">

        <div class="username">
            <h2><?php echo $_SESSION["username"] ?></h2>
        </div>
        
        <div id="logout" class="logout">
            <a href="logout.php">Log out</a>
        </div>

    </div>
    
    <?php 
    }else; 
    
    if(!isset($_SESSION["username"])){
        
    ?>
        
        <div class="account">
        
            <div id="login" class="login">
                <a href="login.php">Log in</a>
            </div> 
        </div> 
    <?php 
    };
    if(isset($_SESSION["usertype"]) && $_SESSION["usertype"] == "admin") {
        ?>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="admin.php">Admin Panel</a></li>
                </ul>
            </nav>
        
            <?php
            } else;
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