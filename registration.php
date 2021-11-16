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

    $hashFormat = "$2y$10$";
    $salt = "2rOr5iJKE30xOiFtjEwH43";
    $hashFormat_salt = $hashFormat.$salt;
    $password = crypt($password, $hashFormat_salt);

    $query5 = "INSERT INTO admin_users (username, password, email) VALUES ('$newUser', '$password', '$email')";
    $result5 = mysqli_query($connection,$query5);

    if($result5){
        echo "success";
    } else{
        echo "error";
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