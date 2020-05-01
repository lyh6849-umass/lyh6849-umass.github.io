<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/6507119a2f.js" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width"/>
<link href = "css.css" type = "text/css" rel="stylesheet">
<style>.c1 {display:none;}</style>

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

 
<?php 
date_default_timezone_set("America/New_York");
$time= date('m_d_y');
$user = 'b77225dc29feba';
$password = '52bed046';
$dbname = 'heroku_bf6133839e3e3aa';
$host = 'us-cdbr-iron-east-04.cleardb.net';
$port = 3306;
$conn = new mysqli($host, $user, $password, $dbname);
$pt = $time."_".$_POST['q1'];
echo $pt;

$sql = "SELECT cc_id FROM pt_cc_db WHERE pt_id ='$pt';";
$r=$conn->query($sql);
if($r->num_rows>0){
  while($row=$r->fetch_assoc()){
    $cc=$row['cc_id'];
    

    //bring all question in none display

    $sql = "SELECT * FROM question_db WHERE cc_id = '$cc' ORDER BY question_id ;";
    $r2 = $conn->query($sql);
    if ($r2->num_rows>0){
      while ($row2=$r2->fetch_assoc()){
        $q_id = $row2['question_id'];
        echo "<div class=\"c2 ".$row2['question_id']."\">  <div class=\"b1\"><h2>".$row2['value']."</h2>";
          $sql = "SELECT * FROM answer_db WHERE question_id = '$q_id';";
          $r3 = $conn->query($sql);
          if ($r3->num_rows>0){
            while($row3=$r3->fetch_assoc()){
              if($row3['answer_type']=="radio"){
                echo "<label><input id=\"".$row3['answer_id']."\" type=\"radio\" name=\"".$row2['question_id']."\" value=\"".$row3['answer_id']."\" style=\"display:none;\"><span class=\"".$row3['answer_id']."\">".$row3['answer_value']." </span></label><br>";
                } elseif($row3['answer_type']=="checkbox"){
                echo "<label><input id=\"".$row3['answer_id']."\" type=\"checkbox\" name=\"".$row2['question_id']."[]\" value=\"".$row3['answer_id']."\" style=\"display:none;\"><span class=\"".$row3['answer_id']."\">".$row3['answer_value']." </span></label><br>";
                }
            };
          };
          if($row2['question_type']=="checkbox"){
            echo "<br><label><input type=\"button\" style=\"display: none;\"><span class=\"ma_1_submit ".$row2['question_id']."a1\">Next</span></label><br>";
          } else {};
  echo "</div></div>";
};

};

//first question generator
if($cc!==""){
  for($p=1;$p<=20;$p++){
    echo "<style>.".$cc."q".$p." {display:flex;}</style>";
  }
};



  }
}
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
$sql= "SELECT * FROM answer_db;";
$result = $conn->query($sql);
if($result->num_rows>0){
while($row = $result->fetch_assoc()){
  $i= $row['answer_id'];
  $id= $row['question_id'];
    for($j=1;$j<=3;$j++){
      if($row['answer_type']!=="checkbox"){
        echo "<script>$(document).ready(()=>{ 
          $(\".".$i."\").on('click',()=>{
            $(\"html, body\").animate({scrollTop: $(\".".$id."\").offset().top + $(\".".$id."\").height()}, 0);
          
          });});</script>";
                        };  
      echo "<script>$(document).ready(()=>{ 
          $(\".".$i."\").on('click',()=>{
            $(\".".$i."q".$j."\").css(\"display\" ,\"flex\"); 
          });});</script>";
                    };
                };                    
            };
  
$conn -> close();
?>
</div>
</body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src='jquery.js'></script> 

</html>
 
 
 
 
 
 
 
 
 
 
 
 
