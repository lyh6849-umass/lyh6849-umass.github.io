<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link href = "css.css" type = "text/css" rel="stylesheet">
</head>
<body>
<p class="c1"> Fitchburg Adult Medicine</p>
    <div class="c2" style="display:flex;">
    <h2>Visit diagnoses are saved. <br>Please instruct patient to start the <a href="../pt_1.php" style="text-decoration:none; ">questionnaire.</a></h2>
    <?php
    /*$cb=$_POST['checkbox'];
    $cbs= implode(",", $cb);
    echo $cbs;*/
    ?>
</div>
<div style ="display:none;">
<?php
date_default_timezone_set("America/New_York");
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
$time= date('m_d_y');
$pt = $time."_".$_POST['q1'];

//visit diagnosis list automatic update
$sql = "SELECT * FROM cc_db;";
$r3=$conn->query($sql);
for ($i=1;$i<=10;$i++){
  $i2="q2_".$i;
  $i3=$_POST[$i2];
  $i3= ucwords($i3);
$sql = "INSERT INTO cc_db (visit_diagnosis) VALUES ('$i3');";
echo $i3."<br>";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
};
echo "<br><br><br><br>";
//data insert to pt_cc_db
for ($i=1;$i<=10;$i++){
$j = "q2_".$i;
$h = $_POST[$j];
if(isset($h)){
  $sql = "SELECT * FROM cc_db WHERE visit_diagnosis = '$h';";
  $r2 = $conn->query($sql);
  if($r2->num_rows>0){
    while ($row2 = $r2->fetch_assoc()){
      $k = $row2['q_id'];
      $h = $row2['visit_diagnosis'];
      $sql = "INSERT INTO pt_cc_db (pt_id, cc_id, visit_diagnosis) VALUES ('$pt', '$k','$h');";
      echo $pt." ".$k."<br>";
      if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
};
};
};
};
};
  $conn -> close();
?>
</div>
</body>
</html>

