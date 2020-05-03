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

  $sql = "SELECT * FROM cc_db;";
  $r2=$conn->query($sql);
  if ($r2->num_rows>0){
    while($row2=$r2->fetch_assoc()){
      $q = $row2['q_id'];
      $v = $row2['visit_diagnosis'];
      $sql = "INSERT INTO cc_db2 (q_id, visit_diagnosis) VALUES ('$q','$v');";
      if ($conn->query($sql) === TRUE) {echo "success!";} else {echo "Error: " . $sql . "<br>" . $conn->error."<BR>";}
    }
  }
  if ($conn->query($sql) === TRUE) {echo "success!";} else {echo "Error: " . $sql . "<br>" . $conn->error."<BR>";}
  ?>