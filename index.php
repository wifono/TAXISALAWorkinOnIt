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
            
            <div class="infosheader">
                <h3>Freonnet</h3>
                <img src="assets/images/logo.png" alt="assets/images/logo.png">

            </div>
                <ul>
                    <li>Správa sietí</li>
                    <li>Opravy počítačov a notebookov</li>
                    <li>Kamerové systémy</li>
                    <li>Alarmy</li>
                    <li>Elektrikárske práce</li>
                </ul>

                <div class="description">
                    <p>Freonnet, je mladá spoločnosť poskytujúca pomoc v oblasti IT,
                        elektroniky a zabezpečenia. Freonnet ponúka služby týkajúce sa opravy elektronických zariadení,
                        počítačov, zabezpečenia, montáže elektrických zariadení či napríklad výrobu počítačových,
                        elektronických či optických výrobkov. Našim poslaním je pomáhať Vám v oblasti IT odborne a zodpovedne. </p>
                </div>
         </div>
        </div>
</div> 
</div>

</footer>

<?php include "partials/footer.php"?>