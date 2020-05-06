<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link href = "css.css" type = "text/css" rel="stylesheet">

</head>
<body>

<?php
$user = 'b77225dc29feba';
$password = '52bed046';
$dbname = 'heroku_bf6133839e3e3aa';
$host = 'us-cdbr-iron-east-04.cleardb.net';
$port = 3306;

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn ->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn ->connect_error;
    exit();
  } else {};
  date_default_timezone_set("America/New_York");
  $time= date('m_d_y');
  $qn = $_POST['q1'];


  /*$sql= "SELECT * FROM center_db WHERE answer_id = 'q2a1q1a1' AND patient_id = '$pt';";
  $result = $conn->query($sql);
  if ($result ->num_rows>0){
  echo "<b>[Upper respiratory infection]</b><br>";
  };*/
  echo "Questionnaire ID: ".$qn."<BR><BR>";

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
        echo "<tr><td>".$m."</td><td>".$d."</td><td><span style=\"color:green;\">".$recon."</span></td></tr>";
      } elseif ($recon == "Discontinued" || $recon =="Patient is taking differently") {
        echo "<tr><td>".$m."</td><td>".$d."</td><td><span style=\"color:red;\">".$recon."</span></td></tr>";
      } elseif ($recon == ""){
        echo "<tr><td>".$m."</td><td>".$d."</td><td><span style=\"color:blue;\">Patient didn't answer</span></td></tr>";
      };
      
    }
    echo "</table><br><br><br>";
  }
      
      


  $sql = "SELECT * FROM pt_cc_db WHERE pt_id ='$qn';";
  $r2=$conn->query($sql);
  if ($r2->num_rows>0){
    while($row2=$r2->fetch_assoc()){
      echo "[".$row2['visit_diagnosis']."]<br>";
      $i = $row2['cc_id'];
        $sql = "SELECT * FROM center_db WHERE patient_id = '$qn' AND question_cc = '$i';";
          $r3= $conn->query($sql);
          if($r3->num_rows>0){
            while($row3=$r3->fetch_assoc()){
              if($row3['answer_value']=="Start"){
              } elseif ($row3['answer_value']=="Next"){} 
              else {echo $row3['question_value'].": ".$row3['answer_value']."<br>";};
            }
    }
  }
  echo "<br>";

}

?>
</div>
</body>
</html>