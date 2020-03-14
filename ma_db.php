<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link href = "ma_precharting_db.css" type = "text/css" rel="stylesheet">

</head>
<body>

<?php
date_default_timezone_set("America/New_York");
$time= date('m_d_y_h_i_s');



$user = 'root';
$password = 'root';
$dbname = 'mydb';
$host = 'localhost';
$port = 3306;
$conn = new mysqli($host, $user, $password, $dbname);
if ($conn ->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn ->connect_error;
    exit();
  } else {echo "connected";};
  $time= date('m_d_y_h_i_s');
  $sq ="INSERT INTO patient_question_answer (patient_id,question_id,answer_id) VALUES ('$time','1','c');";
  $sq .="INSERT INTO patient_question_answer (patient_id,question_id,answer_id) VALUES ('$time','b','c');";
  $sq2 .="SELECT patient_id FROM patient_question_answer WHERE answer_id ='c';";
  $r = $conn->query($sq2);
  $row = $r->fetch_assoc();
  if($r->num_rows>0){
    while($row=$r->fetch_array()){
      echo $row['patient_id']."<BR>";
      $p_id=$row['patient_id'];
    }
  }
  echo "<br>".$row['answer_id']."<br>";
    if($conn->query($sq2)==TRUE){echo "selected";}else{echo $conn->error;};
  echo $time;
    if($conn->multi_query($sq)==TRUE){echo "interted";} else {echo "what the fuck".$conn ->error;}
  

/*
$sql= "SELECT id FROM question;";
$result = $conn->query($sql);
if($result->num_rows>0){
  while($row = $result->fetch_assoc()){
    $id = $row["id"];

    if(isset($_POST[$id])){
      echo $id."<br>";
    $ans = $_POST[$id];
    echo $ans."<br>";
    $pt_id= $_POST['q1'];
    $sql .="INSERT INTO patient_question_answer (patient_id,question_id,answer_id) VALUES ('$time','$id','$ans');";

    };
  };
};
*/
?>
</body>
</html>

