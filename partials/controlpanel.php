<?php 

if( $_SESSION['usertype']=='admin'){
    include_once "partials/controlpanel.php";    
} else {
    header("Location:error.php");
    die();
}

global $data;
global $connection;

$data = mysqli_connect("localhost","root","941000023870268","freonnet_admin_users");

function CreateTaxi() {
    global $data;
    global $taxiname;
    global $taxinumber;

    $taxiname = $_POST["taxiname"];
    $taxinumber = $_POST["taxinumber"]; 

    $taxiname = mysqli_real_escape_string($data,$taxiname);
    $taxinumber = mysqli_real_escape_string($data,$taxinumber);

    $guery = "INSERT INTO taxi_database (taxiname, taxinumber) VALUES ('$taxiname', '$taxinumber')";
    $result = mysqli_query($data, $guery);

    if(!$result){
        die('ERROR, contact daniel.trstansky@gmail.com please');
    }    
}

if(isset($_POST['deletetaxi'])){
   
    $id=$_POST['deleteid'];

    $connection = mysqli_connect("localhost","root","941000023870268","freonnet_admin_users");

    $query2 = "DELETE FROM taxi_database WHERE id = '$id'";
    $result2 = mysqli_query($connection, $query2);
    if($result2){
       
    } else {
                die('ERROR, contact daniel.trstansky@gmail.com please');
    }
};

if(isset($_POST["submit"])){
    CreateTaxi();
}
?>

<div id="addIcon" class="addIcon">
    <a href="#"><i class="fas fa-plus"></i></a>
</div>


<div class="controlpanel">
        <div class="addTaxi">
            <form action="admin.php" method="post">
                <label for="taxiname">Názov Taxislužby</label>
                <input name="taxiname" type="text">
                <label for="taxinumber">Číslo Taxislužby</label>
                <input name="taxinumber" type="text">
                <button type="submit" name="submit" class="button">Pridať</button>
            </form>
        </div>

        <div class="container">
            <section class="mainContent">

<?php 

function ReadTaxi(){
    global $data;
    global $result;

    $data = mysqli_connect("localhost","root","941000023870268","freonnet_admin_users");

    $query = "SELECT id, taxiname, taxinumber FROM taxi_database";
    $result = mysqli_query($data, $query);
   
    if(!$result){
        die('ERROR, contact daniel.trstansky@gmail.com please');
    }
    if(mysqli_num_rows($result) > 0) {
        
        while($row = mysqli_fetch_array($result)){
            include "partials/taxiboxadmin.php";
        }
    }
}
    ReadTaxi();
?>
        