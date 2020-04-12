<!doctype html>
<html lang="en">
  <head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href = "bootstrap.css" type = "text/css" rel="stylesheet">
  </head>

  <body>
  <form id="labnol" method="get" action="">
  <div class="speech">
    <input type="text" name="q" id="transcript" placeholder="Speak" />
    <img onclick="startDictation()" src="//i.imgur.com/cHidSVu.gif" />
  </div>
</form>

<script>
  function startDictation() {
    if (window.hasOwnProperty('webkitSpeechRecognition')) {
      var recognition = new webkitSpeechRecognition();
      recognition.continuous = false;
      recognition.interimResults = false;
      recognition.lang = "en-US";
      recognition.start();
      recognition.onresult = function(e) {
        document.getElementById('transcript').value
                                 = e.results[0][0].transcript;
        recognition.stop();
      };
      recognition.onerror = function(e) {
        recognition.stop();
      }
    }
  }
</script>

  <form id="labnol" method="get" action="http://www.labnol.org">
      <div class="speech">
        <input type="text" name="s" id="transcript" placeholder="Say Something"/>
        <img onclick="startDictation()" src="https://i.imgur.com/cHidSVu.gif" />
      </div>
    </form>

    
    <img class="bg" src="../img/umass3.png">
    <p id="c1"> FITCHBURG ADULT MEDICINE</p>

  <form method="POST" action="ma_2.php"> 
  <div class="containe justify-content-center">
    <div class="q1 row justify-content-center align-items-center" style="height: 100vh;  ">
      <div class="col-lg-9 col-sm-10 justify-content-center h-75 col d-flex align-items-center flex-column" style="">
      <h1>APPOINTMENT TIME</h1>
                <select class="form-control form-control-lg" name="q1" >
                  <option selected>Choose.. </option>
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
                <span class="q1a1 btn btn-dark">NEXT</span>
      </div>
    </div>
    <div class="q2 row justify-content-center align-items-center" style="height: 100vh;  ">
      <div class="col-lg-9 col-sm-10 justify-content-center h-75 col d-flex align-items-center flex-column " style="">
         <h1> Visit Diagnoses </h1>
        <div>
            <label><input class="q2a1q1a1" type="checkbox" name="q2a1q1" value="q2a1q1a1"><span class="q2a1q1a1 btn btn-outline-info"> URI </span></label>
            <label><input class="q2a1q2a1" type="checkbox" name="q2a1q2" value="q2a1q2a1"><span class="q2a1q2a1 btn btn-outline-info"> Dizziness </span></label>
            <label><input class="q2a1q3a1" type="checkbox" name="q2a1q3" value="q2a1q3a1"><span class="q2a1q3a1 btn btn-outline-info"> Urinary symptom </span></label><br>
                        
            <label><input type="submit"> <div class="q2a1 next">NEXT</div></label>
            <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
    <label class="custom-control-label" for="defaultUnchecked">Default unchecked</label>
</div>
<div class="form-check">
    <input type="checkbox" class="form-check-input" id="materialUnchecked">
    <label class="form-check-label" for="materialUnchecked">Material unchecked</label>
</div>
</div>
</div>
</div>
          
  </form>


</div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src='bootstrap.js'></script> 
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

  
<script>



</script>
