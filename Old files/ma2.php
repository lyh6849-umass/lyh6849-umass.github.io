 
 
<!DOCTYPE html>
<html>
<head>
<link href = "ma2.css" type = "text/css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<form class="tov" method ="POST" action="ma2.php">
    <div class="q1"><h1>TIME OF VISIT</h1>
        <label><input class="q1a1" type="radio" name="q1" value="q1a1"><span class = "q1a1">08:30</span></label>
        <label><input class="q1a2" type="radio" name="q1" value="q1a2"><span class = "q1a2">08:45</span></label>
        <label><input class="q1a3" type="radio" name="q1" value="q1a3"><span class = "q1a3">09:00</span></label>
        <label><input class="q1a4" type="radio" name="q1" value="q1a4"><span class = "q1a4">09:15</span></label>
        <label><input class="q1a5" type="radio" name="q1" value="q1a5"><span class = "q1a5">09:30</span></label>
        <label><input class="q1a6" type="radio" name="q1" value="q1a6"><span class = "q1a6">09:45</span></label>
        <label><input class="q1a7" type="radio" name="q1" value="q1a7"><span class = "q1a7">10:00</span></label>
        <label><input class="q1a8" type="radio" name="q1" value="q1a8"><span class = "q1a8">10:15</span></label>
        <label><input class="q1a9" type="radio" name="q1" value="q1a9"><span class = "q1a9">10:30</span></label>
        <label><input class="q1a10" type="radio" name="q1" value="q1a10"><span class = "q1a10">10:45</span></label>
        <label><input class="q1a11" type="radio" name="q1" value="q1a11"><span class = "q1a11">11:00</span></label>
        <label><input class="q1a12" type="radio" name="q1" value="q1a12"><span class = "q1a12">11:15</span></label>
        <label><input class="q1a13" type="radio" name="q1" value="q1a13"><span class = "q1a13">11:30</span></label>
        <label><input class="q1a14" type="radio" name="q1" value="q1a14"><span class = "q1a14">11:45</span></label>
        <label><input class="q1a15" type="radio" name="q1" value="q1a15"><span class = "q1a15">12:00</span></label>
        <label><input class="q1a16" type="radio" name="q1" value="q1a16"><span class = "q1a16">12:15</span></label>
        <label><input class="q1a17" type="radio" name="q1" value="q1a17"><span class = "q1a17">12:30</span></label>
        <label><input class="q1a18" type="radio" name="q1" value="q1a18"><span class = "q1a18">02:00</span></label>
        <label><input class="q1a19" type="radio" name="q1" value="q1a19"><span class = "q1a19">02:15</span></label>
        <label><input class="q1a20" type="radio" name="q1" value="q1a20"><span class = "q1a20">02:30</span></label>
        <label><input class="q1a21" type="radio" name="q1" value="q1a21"><span class = "q1a21">02:45</span></label>
        <label><input class="q1a22" type="radio" name="q1" value="q1a22"><span class = "q1a22">03:00</span></label>
        <label><input class="q1a23" type="radio" name="q1" value="q1a23"><span class = "q1a23">03:15</span></label>
        <label><input class="q1a24" type="radio" name="q1" value="q1a24"><span class = "q1a24">03:30</span></label>
        <label><input class="q1a25" type="radio" name="q1" value="q1a25"><span class = "q1a25">03:45</span></label>
        <label><input class="q1a26" type="radio" name="q1" value="q1a26"><span class = "q1a26">04:00</span></label>
        <label><input class="q1a27" type="radio" name="q1" value="q1a27"><span class = "q1a27">04:15</span></label>
        <label><input class="q1a28" type="radio" name="q1" value="q1a28"><span class = "q1a28">--:--</span></label>
        <label><input class="q1a29" type="radio" name="q1" value="q1a29"><span class = "q1a29">--:--</span></label>
        <label><input class="q1a30" type="radio" name="q1" value="q1a30"><span class = "q1a30">--:--</span></label>
    </div>
    <div class="tovsub">
        <input type ="submit" value="Start MA Patient Evaluation">
    </div>
</form>
<?php
if(isset($_POST['q1'])){
    echo "<script>$(document).ready(()=>{\$(\".tov\").css(\"display\" ,\"none\");});</script>";
} else {
echo "<script>$(document).ready(()=>{\$(\".tov\").css(\"display\" ,\"inline-block\");});</script>";
};?>

<form class = "question" method="POST" action="ma2_db.php">
    <div class="y q3a1q3a2q1a1q1">
        <h2>Patient's BMI > 30?</h2> 
        <label><input class="q3a1q3a2q1a1q1a1" type="radio" name="q3a1q3a2q1a1q1" value="q3a1q3a2q1a1q1a1"><span class="q3a1q3a2q1a1q1a1">Yes</span></label>
        <label><input class="q3a1q3a2q1a1q1a2" type="radio" name="q3a1q3a2q1a1q1" value="q3a1q3a2q1a1q1a1"><span class="q3a1q3a2q1a1q1a2">No</span></label>
    </div>
 
    <div class="y q3a1q3a2q1a1q1a2q1">
        <h2>Does patient want Pap Smear today in this office? or want referral to OBGYN?  </h2> 
        <label><input class="q3a1q3a2q1a1q1a2q1a1" type="radio" name="q3a1q3a2q1a1q1a2q1" value="q3a1q3a2q1a1q1a2q1a1"><span class="q3a1q3a2q1a1q1a2q1a1">Today</span></label>
        <label><input class="q3a1q3a2q1a1q1a2q1a2" type="radio" name="q3a1q3a2q1a1q1a2q1" value="q3a1q3a2q1a1q1a2q1a2"><span class="q3a1q3a2q1a1q1a2q1a2">OBGYN</span></label>
</div> 
    <div class="y q3a1q13a2q1a1q1a1q1"><!-- pneumonia -->
        <h2>History of impaired splenic infarct, cochlear implant, CSF leakage, or invasive pneumococcal infection?</h2>
        <label><input class="q3a1q13a2q1a1q1a1q1a1" type="radio" name="q3a1q13a2q1a1q1a1q1" value="q3a1q13a2q1a1q1a1q1a1"><span class="q3a1q13a2q1a1q1a1q1a1">Yes</span></label>
        <label><input class="q3a1q13a2q1a1q1a1q1a2" type="radio" name="q3a1q13a2q1a1q1a1q1" value="q3a1q13a2q1a1q1a1q1a2"><span class="q3a1q13a2q1a1q1a1q1a2">No</span></label>
    </div>
 
    <div class="y q3a1q13a2q1a1q1a2q1">
        <h2>Previous PPSV23 Hx?</h2>
    <label><input class="q3a1q13a2q1a1q1a2q1a1" type="radio" name="q3a1q13a2q1a1q1a2q1" value="q3a1q13a2q1a1q1a2q1a1"><span class="q3a1q13a2q1a1q1a2q1a1">Yes, > 10 years ago</span></label>
    <label><input class="q3a1q13a2q1a1q1a2q1a2" type="radio" name="q3a1q13a2q1a1q1a2q1" value="q3a1q13a2q1a1q1a2q1a2"><span class="q3a1q13a2q1a1q1a2q1a2">Yes, 5-10 years ago</span></label>
    <label><input class="q3a1q13a2q1a1q1a2q1a3" type="radio" name="q3a1q13a2q1a1q1a2q1" value="q3a1q13a2q1a1q1a2q1a3"><span class="q3a1q13a2q1a1q1a2q1a3">Yes, < 5 years ago</span></label>
    <label><input class="q3a1q13a2q1a1q1a2q1a4" type="radio" name="q3a1q13a2q1a1q1a2q1" value="q3a1q13a2q1a1q1a2q1a4"><span class="q3a1q13a2q1a1q1a2q1a4">Yes, year unknown</span></label>
    <label><input class="q3a1q13a2q1a1q1a2q1a5" type="radio" name="q3a1q13a2q1a1q1a2q1" value="q3a1q13a2q1a1q1a2q1a5"><span class="q3a1q13a2q1a1q1a2q1a5">Never or don't know</span></label>
</div>
    <div class="y q3a1q13a2q1a1q1a2q1a3q1">
        <h2>Previous PCV13?</h2>
        <label><input class="q3a1q13a2q1a1q1a2q1a3q1a1" type="radio" name="q3a1q13a2q1a1q1a2q1a3q1" value="q3a1q13a2q1a1q1a2q1a3q1a1"><span class="q3a1q13a2q1a1q1a2q1a3q1a1">Yes</span></label>
        <label><input class="q3a1q13a2q1a1q1a2q1a3q1a2" type="radio" name="q3a1q13a2q1a1q1a2q1a3q1" value="q3a1q13a2q1a1q1a2q1a3q1a2"><span class="q3a1q13a2q1a1q1a2q1a3q1a2">No</span></label>
    </div>
  
    <div class="y q3a1q13a2q1a1q1a2q1a3q1a2q1">
        <h2>Any of following? <br>
            immunocompromise, <br>
            asplenia, <br>
            cerebrospinal fluid leak, <br>
            cochlear implant, <br>
            history invasive pneumococcal disease<br>
            chronic cardiac, lung, <br>
            liver disease, <br>
            diabetes mellitus, <br>
            smoking, <br>            alcohol use disorder</h2>
            <label><input class="q3a1q13a2q1a1q1a2q1a3q1a2q1a1" type="radio" name="q3a1q13a2q1a1q1a2q1a3q1a2q1" value="q3a1q13a2q1a1q1a2q1a3q1a2q1a1"><span class="q3a1q13a2q1a1q1a2q1a3q1a2q1a1">Yes</span></label>
            <label><input class="q3a1q13a2q1a1q1a2q1a3q1a2q1a2" type="radio" name="q3a1q13a2q1a1q1a2q1a3q1a2q1" value="q3a1q13a2q1a1q1a2q1a3q1a2q1a2"><span class="q3a1q13a2q1a1q1a2q1a3q1a2q1a2">No</span></label>
    </div>
  
    <div class="y q3a1q13a2q1a1q1a1q1a1q1">
        <h2>MD will decide after encounter</h2>
        <label><input class="q3a1q13a2q1a1q1a1q1a1q1a1" type="radio" name="q3a1q13a2q1a1q1a1q1a1q1" value="q3a1q13a2q1a1q1a1q1a1q1a1"><span class="q3a1q13a2q1a1q1a1q1a1q1a1">Next</span></label>
    </div>
 
    <div class="y q3a1q13a2q1a1q1a1q1a2q1">
        <h2>Immunocompromised (e.g. CKD)?</h2>
            <label><input class="q3a1q13a2q1a1q1a1q1a2q1a1" type="radio" name="q3a1q13a2q1a1q1a1q1a2q1" value="q3a1q13a2q1a1q1a1q1a2q1a1"><span class="q3a1q13a2q1a1q1a1q1a2q1a1">Yes</span></label>
            <label><input class="q3a1q13a2q1a1q1a1q1a2q1a2" type="radio" name="q3a1q13a2q1a1q1a1q1a2q1" value="q3a1q13a2q1a1q1a1q1a2q1a2"><span class="q3a1q13a2q1a1q1a1q1a2q1a2">No</span></label>
    </div>
 
    <div class="y q3a1q13a2q1a1q1a1q1a2q1a1q1">
        <h2>Previous PCV13 Hx?</h2>
        <label><input class="q3a1q13a2q1a1q1a1q1a2q1a1q1a1" type="radio" name="q3a1q13a2q1a1q1a1q1a2q1a1q1" value="q3a1q13a2q1a1q1a1q1a2q1a1q1a1"><span class="q3a1q13a2q1a1q1a1q1a2q1a1q1a1">Yes</span></label>
        <label><input class="q3a1q13a2q1a1q1a1q1a2q1a1q1a2" type="radio" name="q3a1q13a2q1a1q1a1q1a2q1a1q1" value="q3a1q13a2q1a1q1a1q1a2q1a1q1a2"><span class="q3a1q13a2q1a1q1a1q1a2q1a1q1a2">No</span></label>
    </div>
 
    <div class="y q3a1q13a2q1a1q1a1q1a2q1a1q1a1q1">
        <h2>Previous PPSV23 with in 5 years?</h2>
        <label><input class="q3a1q13a2q1a1q1a1q1a2q1a1q1a1q1a1" type="radio" name="q3a1q13a2q1a1q1a1q1a2q1a1q1a1q1" value="q3a1q13a2q1a1q1a1q1a2q1a1q1a1q1a1"><span class="q3a1q13a2q1a1q1a1q1a2q1a1q1a1q1a1">Yes</span></label>
        <label><input class="q3a1q13a2q1a1q1a1q1a2q1a1q1a1q1a2" type="radio" name="q3a1q13a2q1a1q1a1q1a2q1a1q1a1q1" value="q3a1q13a2q1a1q1a1q1a2q1a1q1a1q1a2"><span class="q3a1q13a2q1a1q1a1q1a2q1a1q1a1q1a2">No</span></label>
    </div>
 
    <div class="y q3a1q13a2q1a1q1a1q1a2q1a2q1">
        <h2>PPSV23 with in 10 years?</h2>
        <label><input class="q3a1q13a2q1a1q1a1q1a2q1a2q1a1" type="radio" name="q3a1q13a2q1a1q1a1q1a2q1a2q1" value="q3a1q13a2q1a1q1a1q1a2q1a2q1a1"><span class="q3a1q13a2q1a1q1a1q1a2q1a2q1a1">Yes</span></label>
        <label><input class="q3a1q13a2q1a1q1a1q1a2q1a2q1a2" type="radio" name="q3a1q13a2q1a1q1a1q1a2q1a2q1" value="q3a1q13a2q1a1q1a1q1a2q1a2q1a2"><span class="q3a1q13a2q1a1q1a1q1a2q1a2q1a2">No</span></label>
    </div>
    <div class="ma2sub">
        <input class = "ma2sub" type="submit" value="Submit">
    </div>
    
</form>
<script
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
    <script src='ma2.js'></script> 
</body>
</html>
 
 
<?php




    date_default_timezone_set("America/New_York");
    $time= date('m_d_y_h_i_s');
    echo $time."<br>";
    
    $user = 'root';
    $password = 'root';
    $dbname = 'mydb';
    $host = 'localhost';
    $port = 3306;
    $conn = new mysqli($host, $user, $password, $dbname);
    if ($conn ->connect_errno) {
        echo "Failed to connect to MySQL: " . $conn ->connect_error;
        exit();
    };
    $sql= "SELECT id FROM question;";
    $result = $conn->query($sql);
    if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        for ($i=1;$i<=5;$i++){
            for($j=1;$j<=2;$j++){
                $id = $row["id"];
                $ans_id = $id."a".$i;
                $que_id = $ans_id."q".$j;
                echo "<script>$(document).ready(()=>{ 
                        $(\".".$ans_id."\").on('click',()=>{
                            $(\".".$que_id."\").css(\"display\" ,\"flex\"); 
                            $(\".".$id."\").slideUp();
                        });});</script>";
                    };                    
                };
            };
    } else {};
    $conn -> close();


?>
<?php
    $user = 'root';
    $password = 'root';
    $dbname = 'mydb';
    $host = 'localhost';
    $port = 3306;
    $conn = new mysqli($host, $user, $password, $dbname);
    if ($conn ->connect_errno) {
        echo "Failed to connect to MySQL: " . $conn ->connect_error;
        exit();
    };
    $sql = "SELECT answer_id FROM patient_questions_answers WHERE patient_id='03_03_20_03_42_59'";
    $result = $conn->query($sql);
    if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        for($i=1;$i<=2;$i++){
        echo "
        <script>$(document).ready(()=> { 
            $(\".".$row['answer_id']."q".$i."\").css(\"display\" ,\"flex\"); 
            });</script>
            ";
            
    }}} else {};
    ?>


 
 
 
 
 
 
 

