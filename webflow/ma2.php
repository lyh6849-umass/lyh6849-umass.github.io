<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Fri May 01 2020 02:11:45 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="5ea63181c07d78d2e93fdb5d" data-wf-site="5ea24fa4777920d17bd4218b">
<head>
  <meta charset="utf-8">
  <title>ma2</title>
  <meta content="ma2" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/yonghyun-lees-five-star-project.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Droid Sans:400,700"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
</head>
<body>
  <div class="c2">
    <div class="div-block-2">
      <h1 class="heading-2">Visit diagnoses are saved.<br>Please instruct patient to start the <a href="#" class="link-2">questionnaire</a>.</h1>
    </div>
  </div><img src="images/silver-iphone-6-near-blue-and-silver-stethoscope-48603.jpg" srcset="images/silver-iphone-6-near-blue-and-silver-stethoscope-48603-p-1080.jpeg 1080w, images/silver-iphone-6-near-blue-and-silver-stethoscope-48603-p-1600.jpeg 1600w, images/silver-iphone-6-near-blue-and-silver-stethoscope-48603-p-2000.jpeg 2000w, images/silver-iphone-6-near-blue-and-silver-stethoscope-48603-p-2600.jpeg 2600w, images/silver-iphone-6-near-blue-and-silver-stethoscope-48603-p-3200.jpeg 3200w, images/silver-iphone-6-near-blue-and-silver-stethoscope-48603.jpg 3888w" sizes="100vw" alt="" class="image">
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js?site=5ea24fa4777920d17bd4218b" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>









<div style ="display:inline;">
<?php
date_default_timezone_set("America/New_York");
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
$qn = $_POST['q1'];

//visit diagnosis list automatic update
$sql = "SELECT * FROM cc_db;";
$r3=$conn->query($sql);
for ($i=1;$i<=10;$i++){
  $i2="q2_".$i;
  $i3=$_POST[$i2];
  $i3= ucwords($i3);
$sql = "INSERT INTO cc_db (visit_diagnosis) VALUES ('$i3');";
echo $i3."<br>";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
};
echo "<br><br><br><br>";
//data insert to qn_tele_db
$qq=$_POST['q3'];
$sql = "INSERT INTO qn_tele_db (qn, tele) VALUES ('$qn','$qq');";
if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error;};

//data insert to pt_cc_db
for ($i=1;$i<=10;$i++){
$j = "q2_".$i;
$h = $_POST[$j];
if(isset($h)){
  $sql = "SELECT * FROM cc_db WHERE visit_diagnosis = '$h';";
  $r2 = $conn->query($sql);
  if($r2->num_rows>0){
    while ($row2 = $r2->fetch_assoc()){
      $k = $row2['q_id'];
      $h = $row2['visit_diagnosis'];
      $sql = "INSERT INTO pt_cc_db (pt_id, cc_id, visit_diagnosis) VALUES ('$qn', '$k','$h');";
      echo $qn." ".$k."<br>";
      if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error;};
};
};
};
};

//med rec
$i= $_POST['medication'];
$n = substr_count($i,"•");
$lines=explode("•", $i);
for ($j=0;$j<=$n;$j++){
  //echo $lines[$j]."<br>";
  $k = strstr($lines[$j],', Disp:',true);
  //echo $k."<br>";
  $l = strstr($k,', ',true);
  //echo $l."<br>";
  $m = substr(strstr($k,', '), 2);
  //  $m = strstr(substr(strstr($k,', '), 2)," ");
  //echo $m."<br>";
  $arr = explode(' ',trim($m));
  //echo $arr[0]."<br>";
  $e= $arr[0];
  if(strlen($l)>3){
      $sql = "INSERT INTO med_db (qn, med, dose) VALUES ('$qn', '$l', '$m');";
      if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error;}  
      }; 
  }
  $conn -> close();
?>
</div>
</body>
</html>

