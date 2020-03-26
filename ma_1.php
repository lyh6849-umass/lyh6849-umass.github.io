<!DOCTYPE html>
<html>
<head>
    <link href = "index.css" type = "text/css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
</head>
 
<body>


</div>
<form class="ma_form" method="POST" action="ma_2.php">
    <div class="y q1">
        <div class="aptime">
            <h1>APPOINTMENT TIME</h1>
            <label><input class="q1a1" type="radio" name="q1" value="q1a1"><span class = "q1a1">08:30</span></label>
            <label><input class="q1a2" type="radio" name="q1" value="q1a2"><span class = "q1a2">08:45</span></label>
            <label><input class="q1a3" type="radio" name="q1" value="q1a3"><span class = "q1a3">09:00</span></label>
            <label><input class="q1a4" type="radio" name="q1" value="q1a4"><span class = "q1a4">09:15</span></label><br>
            <label><input class="q1a5" type="radio" name="q1" value="q1a5"><span class = "q1a5">09:30</span></label>
            <label><input class="q1a6" type="radio" name="q1" value="q1a6"><span class = "q1a6">09:45</span></label>
            <label><input class="q1a7" type="radio" name="q1" value="q1a7"><span class = "q1a7">10:00</span></label>
            <label><input class="q1a8" type="radio" name="q1" value="q1a8"><span class = "q1a8">10:15</span></label><br>
            <label><input class="q1a9" type="radio" name="q1" value="q1a9"><span class = "q1a9">10:30</span></label>
            <label><input class="q1a10" type="radio" name="q1" value="q1a10"><span class = "q1a10">10:45</span></label>
            <label><input class="q1a11" type="radio" name="q1" value="q1a11"><span class = "q1a11">11:00</span></label>
            <label><input class="q1a12" type="radio" name="q1" value="q1a12"><span class = "q1a12">11:15</span></label><br>
            <label><input class="q1a13" type="radio" name="q1" value="q1a13"><span class = "q1a13">11:30</span></label>
            <label><input class="q1a14" type="radio" name="q1" value="q1a14"><span class = "q1a14">11:45</span></label>
            <label><input class="q1a15" type="radio" name="q1" value="q1a15"><span class = "q1a15">12:00</span></label>
            <label><input class="q1a16" type="radio" name="q1" value="q1a16"><span class = "q1a16">12:15</span></label><br>
            <label><input class="q1a17" type="radio" name="q1" value="q1a17"><span class = "q1a17">12:30</span></label>
            <label><input class="q1a18" type="radio" name="q1" value="q1a18"><span class = "q1a18">02:00</span></label>
            <label><input class="q1a19" type="radio" name="q1" value="q1a19"><span class = "q1a19">02:15</span></label>
            <label><input class="q1a20" type="radio" name="q1" value="q1a20"><span class = "q1a20">02:30</span></label><br>
            <label><input class="q1a21" type="radio" name="q1" value="q1a21"><span class = "q1a21">02:45</span></label>
            <label><input class="q1a22" type="radio" name="q1" value="q1a22"><span class = "q1a22">03:00</span></label>
            <label><input class="q1a23" type="radio" name="q1" value="q1a23"><span class = "q1a23">03:15</span></label>
            <label><input class="q1a24" type="radio" name="q1" value="q1a24"><span class = "q1a24">03:30</span></label><br>
            <label><input class="q1a25" type="radio" name="q1" value="q1a25"><span class = "q1a25">03:45</span></label>
            <label><input class="q1a26" type="radio" name="q1" value="q1a26"><span class = "q1a26">04:00</span></label>
            <label><input class="q1a27" type="radio" name="q1" value="q1a27"><span class = "q1a27">04:15</span></label>
        </div>
    </div>

    <div class="y q2">
        <h1> Visit Diagnoses </h1>
            <label><input class="q2a1q1a1" type="checkbox" name="q2a1q1" value="q2a1q1a1"><span class="q2a1q1a1"> URI </span></label>
            <label><input class="q2a1q2a1" type="checkbox" name="q2a1q2" value="q2a1q2a1"><span class="q2a1q2a1"> Dizziness </span></label>
            <label><input class="q2a1q3a1" type="checkbox" name="q2a1q3" value="q2a1q3a1"><span class="q2a1q3a1"> Urinary symptom </span></label><br><br>
            <label><input class="q2a1q4a1" type="submit" name="q2a1q4" value="q2a1q4a1"><span class="q2a1q4a1"> Next </span></label>
    </div>
</form>




<script
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
    <script src='index.js'></script> 

    </body>
</html>


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


    $sql= "SELECT question_id FROM question_db;";
    $result = $conn->query($sql);
    if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        for ($i=1;$i<=28;$i++){
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
    
    for ($i=10;$i<=10;$i++){
        for($j=1;$j<=2;$j++){
            echo "<script>$(document).ready(()=>{ 
                $(\".q2a1q".$i."a1\").on('click',()=>{
                    $(\".q2a1q".$i."a1q".$j."\").css(\"display\" ,\"flex\"); 
                    $(\"html, body\").animate({scrollTop: $(\".q2\").offset().top + $(\".q2\").height()}, 250);
                });});</script>";

        };
        };
  ?>