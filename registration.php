<?php 
include "partials/head.php";
include "partials/header.php";

if (isset($_POST['registeruser'])){
    $connection = mysqli_connect("localhost","root","941000023870268","freonnet_admin_users");

    $newUser = $_POST['newuser'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $newUser = mysqli_real_escape_string($connection,$newUser);
    $password = mysqli_real_escape_string($connection,$password);
    $email = mysqli_real_escape_string($connection,$email);

    $password = password_hash($password, PASSWORD_DEFAULT);


    $query5 = "INSERT INTO admin_users (username, password, email) VALUES ('$newUser', '$password', '$email')";
    $result5 = mysqli_query($connection,$query5);
    
    $check_duplicate_newUser = "SELECT * FROM admin_users WHERE username = '$newUser' ";

    $aresult = mysqli_query($connection, $check_duplicate_newUser);
    $count = mysqli_num_rows($aresult);

    if($result5) {
        echo "success";
    } else{
        echo "Username or e-mail is already in use.";
    }
}   

 

?>

<main></main>
    <div class="registerform">
        <div class="head">

        </div>

        <div class="body">
            <form action="registration.php" method="post">
                <label for="username">Username</label>
                <input type="text" name="newuser">
                <label for="password">Password</label>
                <input type="password" name="password">
                <label for="password">Re-Password</label>
                <input type="password" name="repassword">
                <label for="password">E-mail</label>
                <input type="text" name="email">
                <button type="submit" name="registeruser">Join</button>
            </form>
        </div>
    </div>
</main>

<?php
include "partials/footer.php"
?>