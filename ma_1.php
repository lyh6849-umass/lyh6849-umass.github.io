<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <!-- Bootstrap CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link href = "css.css" type = "text/css" rel="stylesheet">
  </head>

  <body>
    <p id="c1"> Fitchburg Adult Medicine</p>
    <img class="c3" src="../lyh6849-umass.github.io/ss.jpeg">
  <form class="ma_form" method="POST" action="ma_2.php">
    <div class="c2 q1">
      <div class="b1">
        <div>
             <h1>APPOINTMENT TIME</h1>
                <select  name="q1" class="">
                <option   value="q1a1">8:30</option  >
                  <option   value="q1a2">8:45</option  >
                  <option   value="q1a3">9:00</option  >
                  <option   value="q1a4">9:15</option  >
                  <option   value="q1a5">9:30</option  >
                  <option   value="q1a6">9:45</option  >
                  <option   value="q1a7">10:00</option  >
                  <option   value="q1a8">10:15</option  >
                  <option   value="q1a9">10:30</option  >
                  <option   value="q1a10">10:45</option  >
                  <option   value="q1a11">11:00</option  >
                  <option   value="q1a12">11:15</option  >
                  <option   value="q1a13">11:30</option  >
                  <option   value="q1a14">11:45</option  >
                  <option   value="q1a15">12:00</option  >
                  <option   value="q1a16">12:15</option  >
                  <option   value="q1a17">12:30</option  >
                  <option   value="q1a18">2:00</option  >
                  <option   value="q1a19">2:15</option  >
                  <option   value="q1a20">2:30</option  >
                  <option   value="q1a21">2:45</option  >
                  <option   value="q1a22">3:00</option  >
                  <option   value="q1a23">3:15</option  >
                  <option   value="q1a24">3:30</option  >
                  <option   value="q1a25">3:45</option  >
                  <option   value="q1a26">4:00</option  >
                  <option   value="q1a27">4:15</option  >


                </select><br>
                <span class="q1a1 next">NEXT</span>
           
                </div></div></div>





    <div class="c2 q2">
      <div class="b1">
        <h1> Visit Diagnoses </h1>
        <div>
            <label><input class="q2a1q1a1" type="checkbox" name="q2a1q1" value="q2a1q1a1"><span class="q2a1q1a1"> URI </span></label>
            <label><input class="q2a1q2a1" type="checkbox" name="q2a1q2" value="q2a1q2a1"><span class="q2a1q2a1"> Dizziness </span></label>
            <label><input class="q2a1q3a1" type="checkbox" name="q2a1q3" value="q2a1q3a1"><span class="q2a1q3a1"> Urinary symptom </span></label><br>
</div>
<div>
            <label><input type="submit"> <div class="q2a1 next">NEXT</div></label>
            <div>
          
            </div></div>
</form>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>

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
  } else {echo "";};


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