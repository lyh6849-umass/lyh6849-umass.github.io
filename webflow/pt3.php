<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Fri May 01 2020 01:18:01 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="5ea649addddc5f84439307ca" data-wf-site="5ea24fa4777920d17bd4218b">
<head>
  <meta charset="utf-8">
  <title>pt3</title>
  <meta content="pt3" property="og:title">
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
<div class="c3">
    <div class="div-block-2">
      <a href="#" class="link-block w-inline-block">
        <h1 class="heading-2">You will receive a text message 10-15 minutes prior to your appointment time.<br>It will guide you to the video call.</h1>
      </a><a href="
      <?php /*
 
  $qn = $_POST['q1'];
  $sql = "SELECT * FROM qn_tele_db WHERE qn='$qn';";
  $r2=$conn->query($sql);
  if ($r2->num_rows>0){
    while($row2=$r2->fetch_assoc()){
      echo $row2['tele'];
    }
  }
  if ($conn->query($sql) === TRUE) {echo "";} else {echo "";};*/?>
  " class="button-4 w-button"></a></div>
  </div>



<!--  <img src="images/silver-iphone-6-near-blue-and-silver-stethoscope-48603.jpg" srcset="images/silver-iphone-6-near-blue-and-silver-stethoscope-48603-p-1080.jpeg 1080w, images/silver-iphone-6-near-blue-and-silver-stethoscope-48603-p-1600.jpeg 1600w, images/silver-iphone-6-near-blue-and-silver-stethoscope-48603-p-2000.jpeg 2000w, images/silver-iphone-6-near-blue-and-silver-stethoscope-48603-p-2600.jpeg 2600w, images/silver-iphone-6-near-blue-and-silver-stethoscope-48603-p-3200.jpeg 3200w, images/silver-iphone-6-near-blue-and-silver-stethoscope-48603.jpg 3888w" sizes="100vw" alt="" class="image">-->
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js?site=5ea24fa4777920d17bd4218b" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->

</body>
</html>
<div style="display:inline">
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
  $qn=$_POST['q1'];

//medication infomration insert
$sql = "SELECT * FROM med_db WHERE qn = '$qn';";
$r5 = $conn->query($sql);
if ($r5->num_rows>0){
  while ($row5=$r5->fetch_assoc()){
    $id=$row5['id'];
    if(isset($_POST[$id])){
      $recon = $_POST[$id];
      $sql = "UPDATE med_db SET recon = '$recon' WHERE id='$id';";
      if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error."<BR>";}
    }
  }
}

  $sql= "SELECT * FROM question_db;";
  $result = $conn->query($sql);
  if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
      $id = $row["question_id"];
      $q_v= $row["value"];
      $q_cc=$row["cc_id"];
      $a_id = "";
      $a_v="";
      if($row['question_type']=="checkbox"){
        echo $_POST[$id];
        if(!empty($_POST[$id])){
          echo "checkbox is not empty<BR>"; 
          foreach ($_POST[$id] as $a){
              $sql = "SELECT * FROM answer_db WHERE answer_id ='$a';";
              $r=$conn->query($sql);
                if($r->num_rows>0){
                  while($row=$r->fetch_assoc()){
                    $a_v = $row['answer_value']."; ".$a_v;
                    echo $a_v;
                    $a_id=$a."; ".$a_id;
                  }
                }
              }
              $sql ="INSERT INTO center_db (patient_id, question_id, question_value, answer_id, answer_value, question_cc, question_type) VALUES ('$qn', '$id', '$q_v', '$a', '$a_v', '$q_cc', 'checkbox');";
              echo $q_v;
              if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error."<BR>";}
            } elseif(empty($_POST[$id])) {echo "checkbox is empty";};
          }
      else {
        if(isset($_POST[$id])){
          $a = $_POST[$id];
          $sql = "SELECT * FROM answer_db WHERE answer_id ='$a';";
          $r=$conn->query($sql);
          if($r->num_rows>0){
            while($row=$r->fetch_assoc()){
              $a_v = $row['answer_value'];
              $a_v = str_replace("'","\'",$a_v);
              $sql = "INSERT INTO center_db (patient_id, question_id, question_value, answer_id, question_cc, answer_value) VALUES ('$qn', '$id', '$q_v', '$a', '$q_cc', '$a_v');";      
              if ($conn->query($sql) === TRUE) {
                      echo "";
                      } else {
                      echo "Error: " . $sql . "<br>" . $conn->error."<BR>";
                }
              }
            }
          }
        }
      }
    }
?>
</div>

  

