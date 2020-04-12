

<!DOCTYPE html>
<html>
<head>

<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  

</head>

<body>


<h1 class="testbtn" style="cursor:pointer;">what</h1>
    <div class="divdiv" style="height:100px; background-color:blue;"></div>
<?php
$s= "1.2.1.4.2.   hellow";
echo $s."<br>";
$s = "q".$s;
$s = strstr($s, '   ', true);
echo $s."<br>";
$sn = strlen($s);
echo $sn."<br>";
for ($i=1;$i<=10;$i++){
$s = preg_replace('/\./',"a",$s,1);
$s = preg_replace('/\./',"q",$s,1);
}
echo $s;



    //connect to DB
date_default_timezone_set("America/New_York");
$time= date('m_d_y');
$user = 'b77225dc29feba';
$password = '52bed046';
$dbname = 'heroku_bf6133839e3e3aa';
$host = 'us-cdbr-iron-east-04.cleardb.net';
$port = 3306;
$conn = new mysqli($host, $user, $password, $dbname);

    //quesetion generator
$sql = "SELECT * FROM question_db;";
$r2 = $conn->query($sql);
if ($r2->num_rows>0){
while ($row2=$r2->fetch_assoc()){
  $q_id = $row2['question_id'];
  echo "(class: ".$row2['question_id'].")(cc: ".$row2['cc_id'].") ".$row2['q_to_pt']."<br>";
    $sql = "SELECT * FROM answer_db WHERE question_id = '$q_id';";
    $r3 = $conn->query($sql);
    if ($r3->num_rows>0){
        while($row3=$r3->fetch_assoc()){
      echo "(class: ".$row3['answer_id'].") ".$row3['a_to_pt'];
      echo "<button class=\"".$row3['answer_id']."add\">+</button><br>";
      echo "<script>$(document).ready(()=>{ $(\".".$row3['answer_id']."add\").on('click',()=>{"."$(\".".$row2['question_id']."_1\").append('(class: <input type=\"text\" value=\"".$row3['answer_id']."q1\">)(cc: <input type=\"text\" value=\"".$row2['cc_id']."\">)<input type=\"text\" placeholder=\"question to patient\"><br><input type =\"text\"><br><input type =\"text\"><br><input type =\"text\"><br><input type =\"text\"><br><input type =\"text\"><br><input type =\"text\"><br><input type =\"text\"><br><input type =\"text\"><br><input type =\"text\"><br>')
    ;});});
    </script>";
    };
  };
  echo "<button class=\"".$row2['question_id']."add\">+</button>";
  echo "<div class=\"".$row2['question_id']."_1\"></div>";
  echo "<br><br>";
  echo "<script>$(document).ready(()=>{ $(\".".$row2['question_id']."add\").on('click',()=>{"."$(\".".$row2['question_id']."_1\").append
    ('(class: <input type=\"text\" value=\"".$row2['question_id']."01\">)(cc: <input type=\"text\" value=\"".$row2['cc_id']."\">)<input type=\"text\" placeholder=\"question to patient\"><br><input type =\"text\"><br><input type =\"text\"><br><input type =\"text\"><br><input type =\"text\"><br><input type =\"text\"><br><input type =\"text\"><br><input type =\"text\"><br><input type =\"text\"><br><input type =\"text\"><br>')
    ; });});
    </script>";
};

};



?>
 
    </body>
    <script src="wtf.js"> </script>
</html>
 
<?php 
$l = strlen($row['q']);
for($i=1;$i<=$l;$i++){
    
}
$w1 = subtr($row['q'],1);
$w1 = subtr($row['q'],1);
