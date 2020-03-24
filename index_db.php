<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link href = "index_db.css" type = "text/css" rel="stylesheet">

</head>
<body>
    <div>
    <h1>Please instruct patient to start the self-evaluation questionnaire.</h1>
</div>
<?php
date_default_timezone_set("America/New_York");
$time= date('m_d_y_h_i_s');

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
 

$sql= "SELECT question_id FROM question_db;";
$result = $conn->query($sql);
if($result->num_rows>0){
  while($row = $result->fetch_assoc()){
    $id = $row["question_id"];
    if(isset($_POST[$id])){
    $ans = $_POST[$id];
    echo $ans;
    $sql .="INSERT INTO center_db (patient_id,question_id,answer_id) VALUES ('$pt','$id','$ans');";
    } else {};
  };
  
if (!$conn -> multi_query($sql)) {
    echo $conn->error;
  do {
    /*https://www.w3schools.com/php/func_mysqli_multi_query.asp*/
  } while ($conn -> next_result());
} 
  $conn -> close();
};

?>
</body>
</html>

