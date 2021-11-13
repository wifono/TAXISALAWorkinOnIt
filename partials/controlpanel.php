
<?php 

global $data;

$data = mysqli_connect("localhost","root","941000023870268","freonnet_admin_users");

function CreateTaxi() {
    global $data;

    $taxiname = $_POST["taxiname"];
    $taxinumber = $_POST["taxinumber"]; 
    $guery = "INSERT INTO taxi_database (taxiname, taxinumber) VALUES ('$taxiname', '$taxinumber')";

    $result = mysqli_query($data, $guery);

    if(!$result){
        die("Error");
    }    
}

if(isset($_POST['deletetaxi'])){
    global $taxiid;
    $id=$taxiid;

    $connection = mysqli_connect("localhost","root","941000023870268","freonnet_admin_users");

    $query2 = " DELETE FROM taxi_database WHERE id = '$id'; ";
    $result2 = mysqli_query($connection, $query2);
    if($result2){
        echo "deleted";
    } else {
                die('error dpč');
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
            <form action="#" method="post">
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
        die("error");
    }
    if(mysqli_num_rows($result) > 0) {
        
        while($row = mysqli_fetch_array($result)){
            include "partials/taxiboxadmin.php";
        }
    }
}
    ReadTaxi();
?>
        