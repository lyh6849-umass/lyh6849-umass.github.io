<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link href = "ma2_db.css" type = "text/css" rel="stylesheet">
</head>
<body>



</body>
</html>

<?php

date_default_timezone_set("America/New_York");
$time= date('m_d_y');
$user = 'b77225dc29feba';
$password = '52bed046';
$dbname = 'heroku_bf6133839e3e3aa';
$host = 'us-cdbr-iron-east-04.cleardb.net';
$port = 3306;
$conn = new mysqli($host, $user, $password, $dbname);
if ($conn ->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn ->connect_error;
    exit();
  } else {echo "connected";};
$pt=$time."_".$_POST['q0'];
  $sql= "SELECT question_id FROM question_db;";
  $result = $conn->query($sql);
  if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
      $id = $row["question_id"];
      if(isset($_POST[$id])){
      $ans = $_POST[$id];
      $sql = "INSERT INTO center_db (patient_id,question_id,answer_id) VALUES ('$pt','$id','$ans');";
      if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
     
      } else {};
      
    };

 
    $conn -> close();
  };
?>

  

