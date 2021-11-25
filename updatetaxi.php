<?php 

if(isset($_POST['edittaxi'])){
    $connection = mysqli_connect("localhost","root","941000023870268","freonnet_admin_users");

    $editedname = $_POST['editedname'];
    $editednumber = $_POST['editednumber'];
    $id = $_POST['editid'];

    $editedname = mysqli_real_escape_string($connection,$editedname);
    $editednumber = mysqli_real_escape_string($connection,$editednumber);

    $query4 = "UPDATE taxi_database SET taxiname='$editedname', taxinumber='$editednumber' WHERE id= '$id'";
    $result4 = mysqli_query($connection, $query4);

    header("location:admin.php");
    die();

    if(!$result4){
       die("error zas");
    }
 }

?>