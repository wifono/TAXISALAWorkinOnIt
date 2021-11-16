<?php 
  
    $taxiid = $row["id"]; 
    $taxiname = $row['taxiname'];
    $taxinumber = $row['taxinumber'];


 echo '<div class="taxiBoxAdmin" id="'.$taxiid.'">
<h2>'.$taxiname.'</h2>
<a class="number">'.$taxinumber.'</a>

 <div class="controls">
 <form action="admin.php" method="post">
        <ul>
           <input type="hidden" name="deleteid" value="'.$taxiid.'">
           <button type="submit" name="deletetaxi" id="'.$taxiid.'"><i class="fas fa-trash"></i></button>
        </ul>
</form>
</div>

</div>

<div id="'.$taxiid.'" class="editmodal editmodal'.$taxiid.'">
<h2>'.$taxiname.'</h2>
<form action="updatetaxi.php" method="post">
<input name="editedname" type="text" placeholder="'.$taxiname.'" value="'.$taxiname.'"></input>
<input name="editednumber" type"text" placeholder="'.$taxinumber.'" value="'.$taxinumber.'"></input>
<input type="hidden" name="editid" value="'.$taxiid.'">
<button type="submit" name="edittaxi" value="Edit">EDIT</button>
</form>
</div>';
?>