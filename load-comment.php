<?php
include 'db.php';

  $sql = "SELECT * FROM med_db;";
  $r=$conn->query($sql);
  if ($r->num_rows>0){
    echo "[Medication Reconcile]<br><table><th>Medication</th><th>Direction</th><th>Reconcile</th><th>Edit</th></tr>";
    while($row=$r->fetch_assoc()){
      $m = $row['med'];
      $d = $row['dose'];
      $id = $row['id'];
      $recon = $row['recon'];
      if ($recon == "Continued"){
        echo "<tr><td>".$m."</td><td>".$d."</td><td><span style=\"color:green;\">".$recon."</span></td><td></td></tr>";
      } elseif ($recon == "Discontinued" || $recon =="Patient is taking differently") {
        echo "<tr><td>".$m."</td><td>".$d."</td><td><span style=\"color:red;\">".$recon."</span></td><td><button id=\"del\">Del</button></td></tr>";
      } elseif ($recon == ""){
        echo "<tr><td>".$m."</td><td>".$d."</td><td><span style=\"color:blue;\">Patient didn't answer</span></td></tr>";
      };
      
    }

    echo "</table>";
    $sql = "SELECT * FROM med_add_db;";
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