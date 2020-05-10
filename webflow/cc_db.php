<?php 
set_time_limit(0);
date_default_timezone_set("America/New_York");
$time= date('m_d_y');
$user = 'b77225dc29feba';
$password = '52bed046';
$dbname = 'heroku_bf6133839e3e3aa';
$host = 'us-cdbr-iron-east-04.cleardb.net';
$port = 3306;
$conn = new mysqli($host, $user, $password, $dbname);

$sql = "SELECT * FROM cc_db;";
$r=$conn->query($sql);
if($r->num_rows>0){
    echo "[cc_db]<br><table><th>id</th><th>q_id</th><th>visit_diagnosis</th></tr>";
    while ($row=$r->fetch_assoc()){
      echo "<tr><td>".$row['id']."</td><td>".$row['q_id']."</td><td>".$row['visit_diagnosis']."</td></tr>";
    }
    echo"</table>";
}

if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error;};


$sql = "SELECT * FROM answer_db;";
if($r->num_rows>0){
  echo "[cc_db]<br><table><th>answer_id</th><th>answer_value</th><th>cc_id</th><th>answer_type</th></tr>";
  while ($row=$r->fetch_assoc()){
    echo "<tr><td>".$row['answer_id']."</td><td>".$row['answer_value']."</td><td>".$row['cc_id']."</td><td>".$row['answer_type']."</td></tr>";
  }
  echo"</table>";
}
if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error;};

?>