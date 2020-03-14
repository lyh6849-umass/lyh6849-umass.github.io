<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<h1>Patient rooming process has finised. <br> Dr. Lee is currently reviewing the record <br> He will be with patient in short time.</h2>



</body>
</html>

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
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    exit();
  }


  $sql= "SELECT id FROM question;";
  $result = $conn->query($sql);
  if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
      $id = $row["id"];
      if(isset($_POST[$id])){
      $ans = $_POST[$id];
      $sql .="INSERT INTO patient_questions_answers (patient_id,question_id,answer_id) VALUES ('$time','$id','$ans');";
      } else {};
    };
    
  if ($conn -> multi_query($sql)) {
    do {
      /*https://www.w3schools.com/php/func_mysqli_multi_query.asp*/
    } while ($conn -> next_result());
  } 
    $conn -> close();
  };
  
?>