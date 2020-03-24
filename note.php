<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link href = "note.css" type = "text/css" rel="stylesheet">

</head>
<body>

<?php
$user = 'b77225dc29feba';
$password = '52bed046';
$dbname = 'heroku_bf6133839e3e3aa';
$host = 'us-cdbr-iron-east-04.cleardb.net';
$port = 3306;
date_default_timezone_set("America/New_York");
$conn = new mysqli($host, $user, $password, $dbname);
if ($conn ->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn ->connect_error;
    exit();
  } else {};
  $time= date('m_d_y');
  $pt = $time."_".$_POST['q4'];

  $sql= "SELECT * FROM center_db WHERE answer_id = 'q2a1q1a1';";
  $result = $conn->query($sql);
  if ($result ->num_rows>0){
  echo "<b>[Upper respiratory infection]</b><br>";
  };

  $sql= "SELECT * FROM center_db WHERE patient_id = '$pt';";
  $result = $conn->query($sql);
  if ($result ->num_rows>0){
    while($row = $result->fetch_assoc()){
      $q_id = $row["question_id"];
      $a_id = $row["answer_id"];
        $sql ="SELECT * FROM answer_db WHERE answer_id = '$a_id';";
        $result2=$conn->query($sql);
        if ($result2 ->num_rows>0){
            while($row2 = $result2->fetch_assoc()){
                $sql="SELECT * FROM question_db WHERE question_id='$q_id'";
                  $result3=$conn->query($sql);
                  if($result3->num_rows>0);
                  while($row3 = $result3->fetch_assoc()){
                    if($row3['symptom']=="URI"){
                    echo $row3["value"].": ".$row2["value"]."<br>";
                    } else {};
                  };
            };
        };
        
    };
  };
  echo "<BR><BR>";

  $sql= "SELECT * FROM center_db WHERE answer_id = 'q2a1q2a1';";
  $result = $conn->query($sql);
  if ($result ->num_rows>0){
  echo "<b>[Dizziness]</font></b><br>";
  };
  $sql= "SELECT * FROM center_db WHERE patient_id = '$pt';";
  $result = $conn->query($sql);
  if ($result ->num_rows>0){
    while($row = $result->fetch_assoc()){
      $q_id = $row["question_id"];
      $a_id = $row["answer_id"];
        $sql ="SELECT * FROM answer_db WHERE answer_id = '$a_id';";
        $result2=$conn->query($sql);
        if ($result2 ->num_rows>0){
            while($row2 = $result2->fetch_assoc()){
                $sql="SELECT * FROM question_db WHERE question_id='$q_id'";
                  $result3=$conn->query($sql);
                  if($result3->num_rows>0);
                  while($row3 = $result3->fetch_assoc()){
                    if($row3['symptom']=="Dizziness"){
                    echo $row3["value"].": ".$row2["value"]."<br>";
                    } else {};
                  };
            };
        };
        
    };
  };
  echo "<BR><BR>";
  $sql= "SELECT * FROM center_db WHERE answer_id = 'q2a1q2a1';";
  $result = $conn->query($sql);
  if ($result ->num_rows>0){
  echo "<b>[UTI]</b><br>";
  };
  $sql= "SELECT * FROM center_db WHERE patient_id = '$pt';";
  $result = $conn->query($sql);
  if ($result ->num_rows>0){
    while($row = $result->fetch_assoc()){
      $q_id = $row["question_id"];
      $a_id = $row["answer_id"];
        $sql ="SELECT * FROM answer_db WHERE answer_id = '$a_id';";
        $result2=$conn->query($sql);
        if ($result2 ->num_rows>0){
            while($row2 = $result2->fetch_assoc()){
                $sql="SELECT * FROM question_db WHERE question_id='$q_id'";
                  $result3=$conn->query($sql);
                  if($result3->num_rows>0);
                  while($row3 = $result3->fetch_assoc()){
                    if($row3['symptom']=="UTI"){
                    echo $row3["value"].": ".$row2["value"]."<br>";
                    } else {};
                  };
            };
        };
        
    };
  };
  

  $conn -> close();
?>
