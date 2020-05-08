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

    $sql = "SELECT answer_id , answer_value FROM answer_db;";
    $r = $conn->query($sql);
    if($r->num_rows>0){
      while ($row = $r->fetch_assoc()){
          $s = $row['answer_id'];
          $t = $row['answer_value'];
          $j = substr_count($s,"a");
          if($j==1){
            echo $s."<br>";
            echo $t."<br>";
            $sql = "INSERT INTO cc_db (q_id, visit_diagnosis) VALUES ('$s','$t') ON DUPLICATE KEY UPDATE q_id = '$s', visit_diagnosis = '$t';";
            if ($conn->query($sql) === TRUE) {echo "updated";} else {echo "Error: " . $sql . "<br>" . $conn->error;}  
          } else {};
      }
    }