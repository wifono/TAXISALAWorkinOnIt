<?php 

function Connection() {
    global $connection;

    $connection = mysqli_connect("localhost","root","941000023870268","freonnet_admin_users");

    if(!$connection){
        die("oh fuck");
    }
}
?>