<?php 
    $taxiname = $row['taxiname'];
    $taxinumber = $row['taxinumber'];

echo '<div class="taxiBox">
        <h2>'.$taxiname.'</h2>

        <a class="number" href="tel:'.$taxinumber.'">'.$taxinumber.'</a>
    </div>'
?>                


     