<!DOCTYPE html>
<html>
<head>

</head>
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

?>

<body>
<form method="post" action="add_q.php">
Chief Complaint: <select  name="cc">
<?php
$sql = "SELECT * FROM cc_db;";
$r = $conn->query($sql);
if ($r->num_rows>0){
    while ($row=$r->fetch_assoc()){
        echo "<option value=\"".$row['cc']."\">".$row['value']."</option>";
    };
};
?>
</select><br>
Question: 
<input  type="text" name="question_id" placeholder="enter question class here"></input>
<input  type="text" name="q_to_pt" placeholder="q_to_pt here"></input>
<input  type="text" name="q_value" placeholder="q_value here"></input><br>

<input  type="text" name="a1_to_pt" placeholder="a_to_pt here"></input>
<input type="text" name="a1_value" placeholder="a_value here"></input>
<label><input type="radio" name="a1_y_n" value="Yes" checked><span>Yes</span></label>
<label><input type="radio" name="a1_y_n" value="No"><span>No</span></label>
<label><input type="radio" name="a1_y_n" value=""><span>Other</span></label><br>

<input  type="text" name="a2_to_pt"></input>
<input type="text" name="a2_value" placeholder="a_value here"></input>
<label><input type="radio" name="a2_y_n" value="yes" checked><span>Yes</span></label>
<label><input type="radio" name="a2_y_n" value="No"><span>No</span></label>
<label><input type="radio" name="a2_y_n" value=""><span>Other</span></label><br>
 
<input  type="text" name="a3_to_pt" placeholder="a_to_pt here"></input>
<input type="text" name="a3_value" placeholder="a_value here"></input>
<label><input type="radio" name="a3_y_n" value="yes" checked><span>Yes</span></label>
<label><input type="radio" name="a3_y_n" value="No"><span>No</span></label>
<label><input type="radio" name="a3_y_n" value=""><span>Other</span></label><br>
 
<input  type="text" name="a4_to_pt" placeholder="a_to_pt here"></input>
<input type="text" name="a4_value" placeholder="a_value here"></input>
<label><input type="radio" name="a4_y_n" value="yes" checked><span>Yes</span></label>
<label><input type="radio" name="a4_y_n" value="No"><span>No</span></label>
<label><input type="radio" name="a4_y_n" value=""><span>Other</span></label><br>
 
<input  type="text" name="a5_to_pt" placeholder="a_to_pt here"></input>
<input type="text" name="a5_value" placeholder="a_value here"></input>
<label><input type="radio" name="a5_y_n" value="yes" checked><span>Yes</span></label>
<label><input type="radio" name="a5_y_n" value="No"><span>No</span></label>
<label><input type="radio" name="a5_y_n" value=""><span>Other</span></label><br>
 
<input  type="text" name="a6_to_pt" placeholder="a_to_pt here"></input>
<input type="text" name="a6_value" placeholder="a_value here"></input>
<label><input type="radio" name="a6_y_n" value="yes" checked><span>Yes</span></label>
<label><input type="radio" name="a6_y_n" value="No"><span>No</span></label>
<label><input type="radio" name="a6_y_n" value=""><span>Other</span></label><br>
 
<input  type="text" name="a7_to_pt" placeholder="a_to_pt here"></input>
<input type="text" name="a7_value" placeholder="a_value here"></input>
<label><input type="radio" name="a7_y_n" value="yes" checked><span>Yes</span></label>
<label><input type="radio" name="a7_y_n" value="No"><span>No</span></label>
<label><input type="radio" name="a7_y_n" value=""><span>Other</span></label><br>
 
<input  type="text" name="a8_to_pt" placeholder="a_to_pt here"></input>
<input type="text" name="a8_value" placeholder="a_value here"></input>
<label><input type="radio" name="a8_y_n" value="yes" checked><span>Yes</span></label>
<label><input type="radio" name="a8_y_n" value="No"><span>No</span></label>
<label><input type="radio" name="a8_y_n" value=""><span>Other</span></label><br>
 
<input  type="text" name="a9_to_pt" placeholder="a_to_pt here"></input>
<input type="text" name="a9_value" placeholder="a_value here"></input>
<label><input type="radio" name="a9_y_n" value="yes" checked><span>Yes</span></label>
<label><input type="radio" name="a9_y_n" value="No"><span>No</span></label>
<label><input type="radio" name="a9_y_n" value=""><span>Other</span></label><br>
 



<input type="submit">
</form>




<?php 
$q_id = $_POST['question_id'];
$cc = $_POST['cc'];
$q_v = $_POST['q_value'];
$q_to_pt = $_POST['q_to_pt'];

$sql = "INSERT INTO question_db (question_id, value, cc, q_to_pt) VALUES ('$q_id','$q_v','$cc','$q_to_pt');";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    };
    $i=1;
while ($i<=8){
    $a_id = $q_id."a".$i;
    $a_to_pt = "a".$i."_to_pt";     
    $a_pt = $_POST[$a_to_pt];
    $a_value = "a".$i."_value";       
    $a_v= $_POST[$a_value];
    $a_y_n = "a".$i."_y_n";           
    $a_y=$_POST[$a_y_n];
    echo "<br>".$_POST[$a_to_pt]."<br>";
    if($_POST[$a_to_pt]==""){
        $i++;
    } else {
        $sql = "INSERT INTO answer_db (answer_id, value, y_n, question_id, a_to_pt) VALUES ('$a_id','$a_v','$a_y','$q_id','$a_pt');";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        } 
        $i++;
    };
};

?>
 
</body>
</html>
 
 
 

