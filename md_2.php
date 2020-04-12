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
  $pt = $time."_".$_POST['q1'];
  $q1 = $_POST['q1'];

  /*$sql= "SELECT * FROM center_db WHERE answer_id = 'q2a1q1a1' AND patient_id = '$pt';";
  $result = $conn->query($sql);
  if ($result ->num_rows>0){
  echo "<b>[Upper respiratory infection]</b><br>";
  };*/
  echo "Appointment Time: ".$q1."<BR><BR>";
  $sql = "SELECT * FROM pt_cc_db WHERE pt_id ='$pt';";
  $r2=$conn->query($sql);
  if ($r2->num_rows>0){
    while($row2=$r2->fetch_assoc()){
      echo "[".$row2['visit_diagnosis']."]<br>";
      $i = $row2['cc_id'];
        $sql = "SELECT * FROM center_db WHERE patient_id = '$pt' AND question_cc = '$i';";
          $r3= $conn->query($sql);
          if($r3->num_rows>0){
            while($row3=$r3->fetch_assoc()){
              $i = $row3['question_id'];
              $sql = "SELECT * FROM question_db WHERE question_id='$i';";
              $r4=$conn->query($sql);
              if($r4->num_rows>0){
                while ($row4=$r4->fetch_assoc()){
                  echo $row4['value'].": ";
                }
              }
              $i = $row3['answer_id'];
              $sql = "SELECT * FROM answer_db WHERE answer_id='$i';";
              $r5=$conn->query($sql);
              if($r5->num_rows>0){
                while ($row5=$r5->fetch_assoc()){
                  echo $row5['answer_value']."<br>";
            }
          }
    }
  }
  echo "<br>";

}
  }
?>
</div>
</body>
</html>