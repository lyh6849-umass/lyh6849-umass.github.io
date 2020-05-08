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
      echo "<tr><td>".$row['id']."</td><td>".$row['q_id']."</td><td>".$row['visit_diagnosis']."</span></td></tr>";
    }
    echo"</table>";
}

?>