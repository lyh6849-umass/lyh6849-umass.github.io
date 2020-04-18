<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link href = "css.css" type = "text/css" rel="stylesheet">
</head>
<body>
<div class="y c2" style="display:flex;">
  <div class="b1">
<h2>Your answers are currently being reviewed by Dr. Lee. <br> He will be with you in a minute.</h2>
</div></div>


</body>
</html>

<?php
//I've made some changes here!
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
$pt=$time."_".$_POST['q1'];

  $sql= "SELECT * FROM question_db;";
  $result = $conn->query($sql);
  if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
      $id = $row["question_id"];
      $q_v= $row["value"];
      $q_cc=$row["cc_id"];
      $a_id = "";
      $a_v="";
      if($row['question_type']=="checkbox"){
        if(!empty($_POST[$id])){
          foreach ($_POST[$id] as $a){
              $sql = "SELECT * FROM answer_db WHERE answer_id ='$a';";
              $r=$conn->query($sql);
                if($r->num_rows>0){
                  while($row=$r->fetch_assoc()){
                    $a_v = $row['answer_value']."; ".$a_v;
                    $a_id=$a."; ".$a_id;
                  }
                }
              }
              $sql ="INSERT INTO center_db (patient_id, question_id, question_value, answer_id, answer_value, question_cc, question_type) VALUES ('$pt', '$id', '$q_v', '$a', '$a_v', '$q_cc', 'checkbox');";
              if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error."<BR>";}
            }
          }
      else {
        if(isset($_POST[$id])){
          $a = $_POST[$id];
          $sql = "SELECT * FROM answer_db WHERE answer_id ='$a';";
          $r=$conn->query($sql);
          if($r->num_rows>0){
            while($row=$r->fetch_assoc()){
              $a_v = $row['answer_value'];
              $a_v = str_replace("'","\'",$a_v);
              $sql = "INSERT INTO center_db (patient_id, question_id, question_value, answer_id, question_cc, answer_value) VALUES ('$pt', '$id', '$q_v', '$a', '$q_cc', '$a_v');";
                    if ($conn->query($sql) === TRUE) {
                      echo "";
                      } else {
                      echo "Error: " . $sql . "<br>" . $conn->error."<BR>";
                }
              }
            }
          }
        }
      }
    }
?>

  

