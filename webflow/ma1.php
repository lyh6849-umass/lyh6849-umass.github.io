<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Fri May 01 2020 02:11:45 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="5ea48f4b088154bfedb25cb9" data-wf-site="5ea24fa4777920d17bd4218b">
<head>
  <meta charset="utf-8">
  <title>ma1</title>
  <meta content="ma1" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/yonghyun-lees-five-star-project.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Droid Sans:400,700"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
</head>
<body>
  <div class="w-form">
    <form id="email-form" name="email-form" data-name="Email Form" method="post" class="form" action="ma2.php">
      <div class="c3 q1">
        <div class="b1">
          <h1 class="heading">Questionnaire Number</h1><input type="text" class="text-field w-input" maxlength="256" name="q1" data-name="q1" placeholder="Number Here" id="q" required=""><a href="#" class="button-2 w-button q1a1">Next</a></div>
          
        </div>
      <div class="c3">
        <div class="b1">
          <h1 class="heading">VISIT DIAGNOSIS</h1>
          <div class="c4 input_list" id><input type="text"  list="list2" class="text-field w-input" maxlength="256" name="q2_1" data-name="q2" placeholder="Search Here" id="q-2" required=""></div>
          <div class="div-block-5"><a href="#" class="button-2 w-button plus">+</a><input type="submit" value="Submit" data-wait="Please wait..." class="submit-button w-button"></div>
        </div>
      </div>
      <div class="" style="display:none;">
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
  date_default_timezone_set("America/New_York");
  $time= date('m_d_y_h_i_s');

  $sql = "SELECT visit_diagnosis FROM cc_db;";
  $r6=$conn->query($sql);
  if($r6->num_rows>0){
    echo "<datalist id=\"list2\">";
    while ($row6=$r6->fetch_assoc()){
      echo "<option value=\"".$row6['visit_diagnosis']."\" style=\"display:none;\"><option>";
    }
    echo "</datalist>";
  }



  $conn -> close();
?>
</div>
    </form>
    <div class="w-form-done">
      <div>Thank you! Your submission has been received!</div>
    </div>
    <div class="w-form-fail">
      <div>Oops! Something went wrong while submitting the form.</div>
    </div>
  </div><img src="images/silver-iphone-6-near-blue-and-silver-stethoscope-48603.jpg" srcset="images/silver-iphone-6-near-blue-and-silver-stethoscope-48603-p-1080.jpeg 1080w, images/silver-iphone-6-near-blue-and-silver-stethoscope-48603-p-1600.jpeg 1600w, images/silver-iphone-6-near-blue-and-silver-stethoscope-48603-p-2000.jpeg 2000w, images/silver-iphone-6-near-blue-and-silver-stethoscope-48603-p-2600.jpeg 2600w, images/silver-iphone-6-near-blue-and-silver-stethoscope-48603-p-3200.jpeg 3200w, images/silver-iphone-6-near-blue-and-silver-stethoscope-48603.jpg 3888w" sizes="100vw" alt="" class="image">
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js?site=5ea24fa4777920d17bd4218b" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <script src="jquery.js" type="text/javascript"></script>
  <!--<script>   $(document).ready(()=>{ $(".q1a1").on('click',()=>{ $("html, body").animate({scrollTop: $(".q1").offset().top + $(".q1").height()}, 1000);});});</script>-->
  <script>   $(document).ready(()=>{ $(".q1a1").on('click', () =>{ 
    $("html, body").animate({scrollTop: $(".q1").offset().top + $(".q1").height()}, 1000);});});</script>
  <script>   
        var i = 2;
          $(document).ready(()=>{
          $(".plus").on('click',()=>{
            var html1 = '<input class=\"text-field w-input\" list=\"list2\" type=\"text\" id=\"transcript\" name =\"q2_';
            var html2 = '\" placeholder = \"Search Here\" maxlength=\"256\">';
            $('.input_list').append(html1+i+html2);
            i++;
          });});
      </script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>