<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link href = "css.css" type = "text/css" rel="stylesheet">
</head>
<body>
<p class="c1"> Fitchburg Adult Medicine</p>
<img class="bg" src="../img/umass3.png">
<div class="gradient_1"></div>
<div class="gradient_2"></div>
<form action="pt_3.php" method ="post">
<?php 
$i = $_POST['q1'];
echo "<input type=\"text\" value=\"$i\" style=\"display:none;\" name =\"q1\">";
?>
<div class="c2 q0" style="display:flex;">
  <div class="b1"><h2>Please answer following questions. <br>  Answers will be reviewed by Dr. Lee.</h2>
    <label><input id="q0a1" style ="display:none;" type="radio" name="q0" value="q0a1"><span class="q0a1">Start</span></label>
  </div>
</div>
 
<?php 
date_default_timezone_set("America/New_York");
$time= date('m_d_y');
$user = 'b77225dc29feba';
$password = '52bed046';
$dbname = 'heroku_bf6133839e3e3aa';
$host = 'us-cdbr-iron-east-04.cleardb.net';
$port = 3306;
$conn = new mysqli($host, $user, $password, $dbname);
 
//question generator
$sql = "SELECT * FROM question_db ORDER BY question_id ;";
$r2 = $conn->query($sql);
if ($r2->num_rows>0){
while ($row2=$r2->fetch_assoc()){
  $q_id = $row2['question_id'];
  echo "<div class=\"c2 ".$row2['question_id']."\">  <div class=\"b1\"><h2>".$row2['value']."</h2>";
  $sql = "SELECT * FROM answer_db WHERE question_id = '$q_id';";
  $r3 = $conn->query($sql);
  if ($r3->num_rows>0){
    while($row3=$r3->fetch_assoc()){
      echo "<label><input id=\"".$row3['answer_id']."\" type=\"radio\" name=\"".$row2['question_id']."\" value=\"".$row3['answer_id']."\" style=\"display:none;\"><span class=\"".$row3['answer_id']."\">".$row3['answer_value']." </span></label><br>";
    };
  };
  echo "</div></div>";
};
};
?>
 
<div class="y c2 q1000">
<div class="b1"><h2>You've answered all questions. <br>Please submit, answers will be delivered to Dr Lee.</h2>
<label><input class="q1000a1" type="submit" style="display:none;" name="q1000" value="q1000a1"><span class="q1000a1">SUBMIT</span></label>
<script>$(document).ready(()=> {$(".q1000").css("display" ,"flex");});</script>
</div></div>
</form>
 
<div style="display:inline;">
<?php

//first question for each cc 
$pt = $time."_".$_POST['q1'];
echo $pt."\n";
$sql = "SELECT * FROM pt_cc_db WHERE pt_id = '$pt';";
$r4 = $conn->query($sql);
if ($r4->num_rows>0){
  echo $r4->num_rows;
  while ($row4=$r4->fetch_assoc()){
    $z=$row4['cc_id'];
    if($z!==""){
      for($p=1;$p<=20;$p++){
        echo "<script>$(document).ready(()=>{
          $(\".".$z."q".$p."\").css(\"display\",\"flex\")
          ;});</script>";
      }
    };
  };
};
 
//scroller generator + follow up quesetion generator
$sql= "SELECT question_id FROM question_db;";
$result = $conn->query($sql);
if($result->num_rows>0){
while($row = $result->fetch_assoc()){
    for ($i=1;$i<=10;$i++){
        for($j=1;$j<=1;$j++){
            $id = $row["question_id"];
            $ans_id = $id."a".$i;
            $que_id = $ans_id."q".$j;
                echo "<script>$(document).ready(()=>{ 
                    $(\".".$ans_id."\").on('click',()=>{
                        $(\".".$que_id."\").css(\"display\" ,\"flex\"); 
                        $(\"html, body\").animate({scrollTop: $(\".".$id."\").offset().top + $(\".".$id."\").height()}, 250);
                      });});</script>";
                };                    
            };
        };
} else {};
  
$conn -> close();
?>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src='jquery.js'></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


</html>
 
 
 
 
 
 
 
 
 
 
 
 
