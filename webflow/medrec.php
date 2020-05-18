<?php
include 'db.php';
$qn = $_POST['qn'];
$sql = "SELECT * FROM med_db WHERE qn = '$qn';";
  $r=$conn->query($sql);
  if ($r->num_rows>0){
    echo "[Medication Reconcile]<br><table><th>Medication</th><th>Direction</th><th>Reconcile</th></tr>";
    while($row=$r->fetch_assoc()){
      $m = $row['med'];
      $d = $row['dose'];
      $id = $row['id'];
      $recon = $row['recon'];
      if ($recon == "Continued"){
        echo "<tr id=\"tr".$id."\"><td>".$m."</td><td>".$d."</td><td><span style=\"color:green;\">".$recon."</span></td><td><button id=\"del".$id."\" value=\"".$id."\" onclick=\"deleteAjax(".$id.")\">Del</button></td></tr>";
       } elseif ($recon == "Discontinued" || $recon =="Patient is taking differently") {
        echo "<tr id=\"tr".$id."\"><td>".$m."</td><td>".$d."</td><td><span style=\"color:red;\">".$recon."</span></td><td><button id=\"del".$id."\" value=\"".$id."\" onclick=\"deleteAjax(".$id.")\">Del</button></td></tr>";
      } elseif ($recon == ""){
        echo "<tr id=\"tr".$id."\"><td>".$m."</td><td>".$d."</td><td><span style=\"color:blue;\">".$recon."</span></td><td><button id=\"del".$id."\" value=\"".$id."\" onclick=\"deleteAjax(".$id.")\">Del</button></td></tr>";
      };
      
    }

    echo "</table>";
    $sql = "SELECT * FROM med_add_db WHERE qn='$qn';";
    $r=$conn->query($sql);
    if($r->num_rows>0){
      while($row=$r->fetch_assoc()){
        if($row['momed']=="Yes"){
          echo "<span style=\"color:red;\">Some mediations are missing in the record!</span>";
        } else{};
      }
    }echo"<br><br><br>";
  }

?>