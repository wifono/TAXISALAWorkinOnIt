<?php 
  
    $taxiid = $row["id"]; 
    $taxiname = $row['taxiname'];
    $taxinumber = $row['taxinumber'];


 echo '<div id="'.$taxiid.'" class="taxiBoxAdmin">
<h2>'.$taxiname.'</h2>
<a class="number" href="tel:'.$taxinumber.'"]>'.$taxinumber.'</a>

 <div class="controls">
 <form action="admin.php" method="post">
        <ul>
           <li><a id="'.$taxiid.'" href="#"><i class="fas fa-edit"></i></a></li>
           <input type="hidden" name="deleteid" value="'.$taxiid.'">
           <button type="submit" name="deletetaxi" id="'.$taxiid.'"><i class="fas fa-trash"></i></button>
        </ul>
</form>
</div>
</div>';
?>