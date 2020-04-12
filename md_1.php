<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
<link href = "css.css" type = "text/css" rel="stylesheet">
</head>
<body>

<p class="c1"> Fitchburg Adult Medicine</p>
<img class="bg" src="../img/umass3.png">
<form class="pt_form" action="md_2.php" method="post">
    <div class="q1 c2" style="display:flex;">
        <div class="b1ap"> 
        <h1>APPOINTMENT TIME</h1>
            <div style ="display:inline; text-align:center;">
            <label><input class="q1a1" style="display:none;" type="radio" name="q1" value="8:30"><span class = " q1a1">08:30</span></label>
            <label><input class="q1a2" style="display:none;" type="radio" name="q1" value="8:45"><span class = " q1a2 ">08:45</span></label>
            <label><input class="q1a3" style="display:none;" type="radio" name="q1" value="9:00"><span class = " q1a3 ">09:00</span></label>
            <label><input class="q1a4" style="display:none;" type="radio" name="q1" value="9:15"><span class = " q1a4">09:15</span></label>
            <label><input class="q1a5" style="display:none;" type="radio" name="q1" value="9:30"><span class = " q1a5">09:30</span></label>
            <label><input class="q1a6" style="display:none;" type="radio" name="q1" value="9:45"><span class = " q1a6">09:45</span></label>
            <label><input class="q1a7" style="display:none;" type="radio" name="q1" value="10:00"><span class = " q1a7">10:00</span></label>
            <label><input class="q1a8" style="display:none;" type="radio" name="q1" value="10:15"><span class = " q1a8">10:15</span></label>
            <label><input class="q1a9" style="display:none;" type="radio" name="q1" value="10:30"><span class = " q1a9">10:30</span></label>
            <label><input class="q1a10" style="display:none;" type="radio" name="q1" value="10:45"><span class = " q1a10">10:45</span></label>
            <label><input class="q1a11" style="display:none;" type="radio" name="q1" value="11:00"><span class = " q1a11">11:00</span></label>
            <label><input class="q1a12" style="display:none;" type="radio" name="q1" value="11:15"><span class = " q1a12">11:15</span></label>
            <label><input class="q1a13" style="display:none;" type="radio" name="q1" value="11:30"><span class = " q1a13">11:30</span></label>
            <label><input class="q1a14" style="display:none;" type="radio" name="q1" value="11:45"><span class = " q1a14">11:45</span></label>
            <label><input class="q1a15" style="display:none;" type="radio" name="q1" value="12:00"><span class = " q1a15">12:00</span></label>
            <label><input class="q1a16" style="display:none;" type="radio" name="q1" value="12:15"><span class = " q1a16">12:15</span></label>
            <label><input class="q1a17" style="display:none;" type="radio" name="q1" value="12:30"><span class = " q1a17">12:30</span></label>
            <label><input class="q1a18" style="display:none;" type="radio" name="q1" value="2:00"><span class = " q1a18">02:00</span></label>
            <label><input class="q1a19" style="display:none;" type="radio" name="q1" value="2:15"><span class = " q1a19">02:15</span></label>
            <label><input class="q1a20" style="display:none;" type="radio" name="q1" value="2:30"><span class = " q1a20">02:30</span></label>
            <label><input class="q1a21" style="display:none;" type="radio" name="q1" value="2:45"><span class = " q1a21">02:45</span></label>
            <label><input class="q1a22" style="display:none;" type="radio" name="q1" value="3:00"><span class = " q1a22">03:00</span></label>
            <label><input class="q1a23" style="display:none;" type="radio" name="q1" value="3:15"><span class = " q1a23">03:15</span></label>
            <label><input class="q1a24" style="display:none;" type="radio" name="q1" value="3:30"><span class = " q1a24">03:30</span></label>
            <label><input class="q1a25" style="display:none;" type="radio" name="q1" value="3:45"><span class = " q1a25">03:45</span></label>
            <label><input class="q1a26" style="display:none;" type="radio" name="q1" value="4:00"><span class = " q1a26">04:00</span></label>
            <label><input class="q1a27" style="display:none;" type="radio" name="q1" value="4:15"><span class = " q1a27">04:15</span></label>
            <label><input class="q1a28" style="display:none;" type="radio" name="q1" value=""><span class = " q1a28">-- : --</span></label>
            </div>
        </div>
    </div>
    <div class="c2" style="display:flex;">
      <div class="b1ap"> 
      <label><input type="submit" style="display:none;"><span id="submitbtn">Submit</span></label>
      </div>
    </div>
  </form>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src='jquery.js'></script> 

<?php
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
    ?>
</body>
</html>
 
 
 

