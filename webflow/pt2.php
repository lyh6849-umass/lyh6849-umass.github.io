<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Mon Apr 27 2020 03:19:36 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="5ea63534dddc5f630b928dc6" data-wf-site="5ea24fa4777920d17bd4218b">
<head>
  <meta charset="utf-8">
  <title>pt2</title>
  <meta content="pt2" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/yonghyun-lees-five-star-project.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Droid Sans:400,700"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
  <style> .c2 {display:none;}
div.c2 label input:checked ~ span {
  background-color: #425064;
  font-weight:bold;
  color:white;

}</style>

</head>
<body>

  <div class="w-form">
  <form id="email-form" name="email-form" data-name="Email Form" method="post" class="form" action="pt3.php">
  <div class="c3">
        <div class="b1">
          <p class="paragraph-2">Please answer following question regarding your symptoms. Answers are going to be reviewed after Dr. Lee finishes encounter with previous patient. If you need <span class="text-span">EMERGENCY </span>care, please notify medical assistant who&#x27;s at the counter for help. </p><a href="#" class="button-2 w-button">Next</a></div>
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
$qn = $_GET['q1'];
echo "<input style=\"display:none\" type=\"text\" name=\"q1\" value=\"".$qn."\">";
//all question generator
$sql = "SELECT cc_id FROM pt_cc_db WHERE pt_id =$qn;";if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error."<BR>";}
$r=$conn->query($sql);
if($r->num_rows>0){
  while($row=$r->fetch_assoc()){if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error."<BR>";}
    $cc=$row['cc_id'];
    $sql = "SELECT * FROM question_db WHERE cc_id = '$cc' ORDER BY question_id ;";
    $r2 = $conn->query($sql);
    if ($r2->num_rows>0){
      while ($row2=$r2->fetch_assoc()){
        $q_id = $row2['question_id'];
        echo "<div class=\"c2 w-container ".$row2['question_id']."\"><div class=\"b1\"><h1 class=\"heading\">".$row2['value']."</h1>";
          $sql = "SELECT * FROM answer_db WHERE question_id = '$q_id';";
          $r3 = $conn->query($sql);
          if ($r3->num_rows>0){if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error."<BR>";}
            while($row3=$r3->fetch_assoc()){
              if($row3['answer_type']=="radio"){
                echo "<label class=\"radio-button-field-3 w-radio\">
                    <input type=\"radio\" name=\"".$row2['question_id']."\" value=\"".$row3['answer_id']."\" class=\"w-form-formradioinput radio-button-3 w-radio-input\">
                    <span class=\"radio-button-label-3 w-form-label ".$row3['answer_id']."\">".$row3['answer_value']."</span></label>";
                echo "<script>$(document).ready(()=>{ $(\".".$row3['answer_id']."\").on('click',()=>{ $(\"html, body\").animate({scrollTop: $(\".".$row2['question_id']."\").offset().top + $(\".".$row2['question_id']."\").height()}, 1000);});});</script>";
                } elseif($row3['answer_type']=="checkbox"){
                echo "<label class=\"w-checkbox checkbox-field \">
                <input type=\"checkbox\" id=\"".$row3['answer_id']."\" data-name=\"".$row2['question_id']."[]\" value=\"".$row3['answer_id']."class=\"w-checkbox-input checkbox ".$row3['answer_id']."\"  style=\"display:none;\" ><span for=\"\" class=\"checkbox-label w-form-label ".$row3['answer_id']."\">".$row3['answer_value']."</span></label>";
                $i = $r3->num_rows+1;
                $next = $row2['question_id']."a".$i;
            }
            if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error."<BR>";}
            $i = $row3['answer_id'];
            for($j=1;$j<=3;$j++){
              echo "<script>$(document).ready(()=>{ 
                  $(\".".$i."\").on('click',()=>{
                    $(\".".$i."q".$j."\").css(\"display\" ,\"flex\"); 
                  });});</script>";}
            };if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error."<BR>";}
            if($row2['question_type']=="checkbox"){
            echo "<a href=\"#\" class=\"button-2 w-button ".$next."\">Next</a>";
            echo "<script>$(document).ready(()=>{ $(\".".$next."\").on('click',()=>{ $(\"html, body\").animate({scrollTop: $(\".".$row2['question_id']."\").offset().top + $(\".".$row2['question_id']."\").height()}, 1000);});});</script>";
          } else {};if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error."<BR>";}
  echo "</div></div>";
};

};if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error."<BR>";}
  }
  //first question generator
if($cc!==""){
    for($p=1;$p<=20;$p++){
      echo "<style> .".$cc."q".$p." {display:flex;}</style>";
    }
  };
}
}
?>
      <div class="c3">
        <div class="b1">
          <p class="paragraph-2">You have answered all question. Answers are going to be reviewed after Dr. Lee finishes encounter with previous patient. If you need <span class="text-span">EMERGENCY </span>care, please notify medical assistant who&#x27;s at the counter for help. </p><input type="submit" value="Submit" data-wait="Please wait..." class="sbm w-button"></div>
      </div></form>


    <div class="w-form-done">
      <div>Thank you! Your submission has been received!</div>
    </div>
    <div class="w-form-fail">
      <div>Oops! Something went wrong while submitting the form.</div>
    </div>
  </div><img src="images/silver-iphone-6-near-blue-and-silver-stethoscope-48603.jpg" srcset="images/silver-iphone-6-near-blue-and-silver-stethoscope-48603-p-1080.jpeg 1080w, images/silver-iphone-6-near-blue-and-silver-stethoscope-48603-p-1600.jpeg 1600w, images/silver-iphone-6-near-blue-and-silver-stethoscope-48603-p-2000.jpeg 2000w, images/silver-iphone-6-near-blue-and-silver-stethoscope-48603-p-2600.jpeg 2600w, images/silver-iphone-6-near-blue-and-silver-stethoscope-48603-p-3200.jpeg 3200w, images/silver-iphone-6-near-blue-and-silver-stethoscope-48603.jpg 3888w" sizes="100vw" alt="" class="image">
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js?site=5ea24fa4777920d17bd4218b" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src='jquery.js'></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>