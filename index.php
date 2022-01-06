<?php 
    session_start();

    include "partials/head.php";
    include "partials/header.php";
?>        

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
                <div class="description">
                    <p>„ <span>Freonnet</span> – Vaša pomoc v IT oblasti“ sa zaoberá </p>                        
                        <ul>
                           <li>
                           - správou a konfiguráciou počítačových LAN sietí (aj štrukturovaná kabeláž a optické siete)
                           </li>

                           <li>
                            - Montáž zabezpečovacích a kamerových systémov
                           </li>

                           <li>
                            - Elektroinštalačné práce
                           </li>
                       </ul>

                       <p>Vaša spokojnosť je pre nás najdôležitejšia, preto je náš prístup profesionálny.</p> 
                </div>
         </div>
        </div>
</div> 
</div>

</footer>

<?php include "partials/footer.php"?>