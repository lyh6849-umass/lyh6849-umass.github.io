<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link href = "css.css" type = "text/css" rel="stylesheet">
</head>
<body>
<div class="y c2">
<h1>Your answers are currently being reviewed by Dr. Lee. <br> He will be with you in a minute.</h1>
</div>


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
  } else {echo "";};
$pt=$time."_".$_POST['q0'];

  $sql= "SELECT * FROM question_db;";
  $result = $conn->query($sql);
  if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
      $id = $row["question_id"];
      $q_v= $row["value"];
      $q_cc=$row["cc"];
      if(isset($_POST[$id])){
      $ans = $_POST[$id];
        $sq = "SELECT * FROM answer_db WHERE answer_id='$ans';";
        $result2 = $conn->query($sq);
        if($result2 ->num_rows>0){
          while($row2 = $result2->fetch_assoc()){
            $a_y_n = $row2['y_n'];
            $a_value = $row2['value'];
            $sql = "INSERT INTO center_db (patient_id, question_id, question_value, question_cc, answer_id, answer_y_n, answer_value) VALUES ('$pt', '$id', '$q_v', '$q_cc', '$ans','$a_y_n','$a_value');";
            if ($conn->query($sql) === TRUE) {
              echo "";
              } else {
              echo "Error: " . $sql . "<br>" . $conn->error."<BR><BR><BR>";
          };
          };
        };


       
     
      } else {};
      
    };};

 
    $conn -> close();

?>

  

