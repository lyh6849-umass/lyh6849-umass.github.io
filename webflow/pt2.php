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
}

div.c3 label input:checked ~ span {
  background-color: #425064;
  font-weight:bold;
  color:white;
}

</style>

</head>
<body>

  <div class="w-form">
  <form id="email-form" name="email-form" data-name="Email Form" method="post" class="form" action="pt3.php">
        
  <div class="c3 medrec_nomed"><div class="b1"><h1 class="heading-4">Do you take any prescribed medications on a regular basis?</h1>
  <label class="radio-button-field-3 w-radio"><input type="radio" name="medrec_momed" value="Yes" class="w-form-formradioinput radio-button-3 w-radio-input">
  <span class="radio-button-label-3 w-form-label medrec_nomedbtn">Yes</span></label>
  <label class="radio-button-field-3 w-radio"><input type="radio" name="medrec_momed" value="None" class="w-form-formradioinput radio-button-3 w-radio-input">
  <span class="radio-button-label-3 w-form-label medrec_nomedbtn">No</span></label>
  <script>$(document).ready(()=>{ $(".medrec_nomedbtn").on('click',()=>{ $("html, body").animate({scrollTop: $(".medrec_nomed").offset().top + $(".medrec_nomed").height()}, 0);});});</script>



</div></div>

<?php 
date_default_timezone_set("America/New_York");
$time= date('m_d_y');
$user = 'b77225dc29feba';
$password = '52bed046';
$dbname = 'heroku_bf6133839e3e3aa';
$host = 'us-cdbr-iron-east-04.cleardb.net';
$port = 3306;
$conn = new mysqli($host, $user, $password, $dbname);
$qn = $_POST['q1'];






echo "<input style=\"display:none\" type=\"text\" name=\"q1\" value=\"".$qn."\">";

$sql = "SELECT * FROM med_db WHERE qn = '$qn';";
$r5 = $conn->query($sql);
if ($r5->num_rows>0){
  echo "<style>.medrec_nomed {display:none;]</style>";
  echo "<div class=\"c3 medrec\"><div class=\"b1\"><h1 class=\"heading-4\">Please bring all medication bottles for review.</h1>";
  echo "<a href=\"#\" class=\"button-2 w-button  medrecnext\">I'm ready</a>";
  echo "<script>$(document).ready(()=>{ $(\".medrecnext\").on('click',()=>{ $(\"html, body\").animate({scrollTop: $(\".medrec\").offset().top + $(\".medrec\").height()}, 100);});});</script>";
  echo "</div></div>";
  while ($row5=$r5->fetch_assoc()){
    $m = $row5['med'];

        
        $d = $row5['dose'];
        $id = $row5['id'];
        $s=strstr($d,' ',true); // 1.2.3.1.4.2.1.
        if($s=="PLS"||$s=="Pls"||$s=="Plz"||$s=="Please"||$s=="PLEASE"){
          $d = strstr($d,' ');
        }
        $i1 = $id."_1";
        $i2 = $id."_2";
        $i3 = $id."_3";
        $i4 = $id."_4";
        if($m!==""){
          if($s=="Take"||$s=="TAKE"){
            $d = strstr($d,' ');
            echo "<div class=\"c3 ".$id."\"><div class=\"b1\"><h1 class=\"heading-4\">Do you take this medication?</h1>
            <div class=\"div-block-10\">
              <div class=\"text-block-4\">Pharmacy</div>
              <div class=\"div-block-12\">
                <div class=\"div-block-11\">".$m."</div>
              </div>
              <div class=\"div-block-13\">".$d."</div>
            </div>
            <label class=\"radio-button-field-3 w-radio ".$i1."\"><input type=\"radio\" data-name=\"Radio 11\" id=\"radio-11\" name=\"".$id."\" value=\"Continued\" class=\"w-form-formradioinput radio-button-3 w-radio-input\"><span class=\"radio-button-label-3 w-form-label ".$i1."\">Correct</span></label>
            <label class=\"radio-button-field-3 w-radio ".$i2."\"><input type=\"radio\" data-name=\"Radio 12\" id=\"radio-12\" name=\"".$id."\" value=\"Patient is taking differently\" class=\"w-form-formradioinput radio-button-3 w-radio-input\"><span class=\"radio-button-label-3 w-form-label ".$i2."\">Yes, but different DIRECTION</span></label>
            <label class=\"radio-button-field-3 w-radio ".$i3."\"><input type=\"radio\" data-name=\"Radio 13\" id=\"radio-13\" name=\"".$id."\" value=\"Discontinued\" class=\"w-form-formradioinput radio-button-3 w-radio-input\"><span class=\"radio-button-label-3 w-form-label ".$i3."\">No, I don't take it</span></label>
            <label class=\"radio-button-field-3 w-radio ".$i4."\"><input type=\"radio\" data-name=\"Radio 14\" id=\"radio-14\" name=\"".$id."\" value=\"Duplicate\" class=\"w-form-formradioinput radio-button-3 w-radio-input\"><span class=\"radio-button-label-3 w-form-label ".$i4."\">Duplicate Medication</span></label></div></div>
            <script>$(document).ready(()=>{ $(\".".$i1."\").on('click',()=>{ $(\"html, body\").animate({scrollTop: $(\".".$id."\").offset().top + $(\".".$id."\").height()}, 0);});});</script>
            <script>$(document).ready(()=>{ $(\".".$i2."\").on('click',()=>{ $(\"html, body\").animate({scrollTop: $(\".".$id."\").offset().top + $(\".".$id."\").height()}, 0);});});</script>
            <script>$(document).ready(()=>{ $(\".".$i3."\").on('click',()=>{ $(\"html, body\").animate({scrollTop: $(\".".$id."\").offset().top + $(\".".$id."\").height()}, 0);});});</script>
            <script>$(document).ready(()=>{ $(\".".$i4."\").on('click',()=>{ $(\"html, body\").animate({scrollTop: $(\".".$id."\").offset().top + $(\".".$id."\").height()}, 0);});});</script>
            ";
          } else {
            echo "<div class=\"c3 ".$id."\"><div class=\"b1\"><h1 class=\"heading-4\">Do you use this medication or instrument?</h1>
            <div class=\"div-block-10\">
              <div class=\"text-block-4\">Pharmacy</div>
              <div class=\"div-block-12\">
                <div class=\"div-block-11\">".$m."</div>
              </div>
              <div class=\"div-block-13\">".$d."</div>
            </div>
            <label class=\"radio-button-field-3 w-radio ".$i1."\"><input type=\"radio\" data-name=\"Radio 11\" id=\"radio-11\" name=\"".$id."\" value=\"Continued\" class=\"w-form-formradioinput radio-button-3 w-radio-input\"><span class=\"radio-button-label-3 w-form-label ".$i1."\">Correct</span></label>
            <label class=\"radio-button-field-3 w-radio ".$i2."\"><input type=\"radio\" data-name=\"Radio 12\" id=\"radio-12\" name=\"".$id."\" value=\"Patient is taking differently\" class=\"w-form-formradioinput radio-button-3 w-radio-input\"><span class=\"radio-button-label-3 w-form-label ".$i2."\">Yes, but different DIRECTION</span></label>
            <label class=\"radio-button-field-3 w-radio ".$i3."\"><input type=\"radio\" data-name=\"Radio 13\" id=\"radio-13\" name=\"".$id."\" value=\"Discontinued\" class=\"w-form-formradioinput radio-button-3 w-radio-input\"><span class=\"radio-button-label-3 w-form-label ".$i3."\">No, I don't use it</span></label>
            <label class=\"radio-button-field-3 w-radio ".$i4."\"><input type=\"radio\" data-name=\"Radio 14\" id=\"radio-14\" name=\"".$id."\" value=\"Duplicate\" class=\"w-form-formradioinput radio-button-3 w-radio-input\"><span class=\"radio-button-label-3 w-form-label ".$i4."\">Duplicate Medication(instrument)</span></label></div></div>
            <script>$(document).ready(()=>{ $(\".".$i1."\").on('click',()=>{ $(\"html, body\").animate({scrollTop: $(\".".$id."\").offset().top + $(\".".$id."\").height()}, 0);});});</script>
            <script>$(document).ready(()=>{ $(\".".$i2."\").on('click',()=>{ $(\"html, body\").animate({scrollTop: $(\".".$id."\").offset().top + $(\".".$id."\").height()}, 0);});});</script>
            <script>$(document).ready(()=>{ $(\".".$i3."\").on('click',()=>{ $(\"html, body\").animate({scrollTop: $(\".".$id."\").offset().top + $(\".".$id."\").height()}, 0);});});</script>
            <script>$(document).ready(()=>{ $(\".".$i4."\").on('click',()=>{ $(\"html, body\").animate({scrollTop: $(\".".$id."\").offset().top + $(\".".$id."\").height()}, 0);});});</script>
            ";
          
      }
  
      }

  }
  echo "<div class=\"c3 medrec_momed\"><div class=\"b1\"><h1 class=\"heading-4\">Do you take medication other than what's asked above?</h1>";
  echo "
  <label class=\"radio-button-field-3 w-radio medrec_momedbtn\"><input type=\"radio\" name=\"medrec_momed\" value=\"Yes\" class=\"w-form-formradioinput radio-button-3 w-radio-input\"><span class=\"radio-button-label-3 w-form-label medrec_momedbtn\">Yes</span></label>
  <label class=\"radio-button-field-3 w-radio medrec_momedbtn\"><input type=\"radio\" name=\"medrec_momed\" value=\"No\"  class=\"w-form-formradioinput radio-button-3 w-radio-input\"><span class=\"radio-button-label-3 w-form-label medrec_momedbtn\">No</span></label>
  <script>$(document).ready(()=>{ $(\".medrec_momedbtn\").on('click',()=>{ $(\"html, body\").animate({scrollTop: $(\".medrec_momed\").offset().top + $(\".medrec_momed\").height()}, 0);});});</script></div></div>";

}
if ($conn->query($sql) === TRUE) {echo "";} else {echo "";}


////find cc_id for dm
$sql = "SELECT q_id FROM cc_db WHERE visit_diagnosis='Diabetes Follow Up';";
$r=$conn->query($sql);
while($row=$r->fetch_assoc()){
  $dmid=$row['q_id'];
}


//all question generator
$sql = "SELECT cc_id FROM pt_cc_db WHERE pt_id ='$qn';";
$r=$conn->query($sql);
if($r->num_rows>0){
  while($row=$r->fetch_assoc()){
    $cc=$row['cc_id'];
    $sql = "SELECT * FROM question_db WHERE cc_id = '$cc' ORDER BY id ;";
    $r2 = $conn->query($sql);
    if ($r2->num_rows>0){
      while ($row2=$r2->fetch_assoc()){
        $q_id = $row2['question_id'];
        echo "<div class=\"c2 w-container ".$row2['question_id']."\"><div class=\"b1\"><h1 class=\"heading\">".$row2['value']."</h1>";
          $sql = "SELECT * FROM answer_db WHERE question_id = '$q_id';";
          $r3 = $conn->query($sql);
          if ($r3->num_rows>0){
            while($row3=$r3->fetch_assoc()){
              if($row3['answer_type']=="radio"){
                echo "<label class=\"radio-button-field-3 w-radio\">
                    <input type=\"radio\" name=\"".$row2['question_id']."\" value=\"".$row3['answer_id']."\" class=\"w-form-formradioinput radio-button-3 w-radio-input\">
                    <span class=\"radio-button-label-3 w-form-label ".$row3['answer_id']."\">".$row3['answer_value']."</span></label>";
                echo "<script>$(document).ready(()=>{ $(\".".$row3['answer_id']."\").on('click',()=>{ $(\"html, body\").animate({scrollTop: $(\".".$row2['question_id']."\").offset().top + $(\".".$row2['question_id']."\").height()}, 100);});});</script>";

                  } elseif($row3['answer_type']=="checkbox"){
                echo "<label class=\"w-checkbox checkbox-field \">
                <input type=\"checkbox\" id=\"".$row3['answer_id']."\" name=\"".$row2['question_id']."[]\" value=\"".$row3['answer_id']."\" class=\"w-checkbox-input checkbox ".$row3['answer_id']."\"  style=\"display:none;\" ><span for=\"\" class=\"checkbox-label w-form-label ".$row3['answer_id']."\">".$row3['answer_value']."</span></label>";
                                $i = $r3->num_rows+2;
                $next = $row2['question_id']."a".$i;
            }

            $i = $row3['answer_id'];
            for($j=1;$j<=20;$j++){
              echo "<script>$(document).ready(()=>{ 
                  $(\".".$i."\").on('click',()=>{
                    $(\".".$i."q".$j."\").css(\"display\" ,\"flex\"); 
                  });});</script>";}
            };

            
            $k = $r3->num_rows+1;
            if($k>2){
              echo "<label class=\"radio-button-field-3 w-radio\">
              <input type=\"radio\" name=\"".$row2['question_id']."\" value=\"".$row2['question_id']."a".$k."\" class=\"w-form-formradioinput radio-button-3 w-radio-input\">
              <span class=\"radio-button-label-3 w-form-label ".$row2['question_id']."a".$k."\">I can't find the answer</span></label>";
              echo "<script>$(document).ready(()=>{ $(\".".$row2['question_id']."a".$k."\").on('click',()=>{ $(\"html, body\").animate({scrollTop: $(\".".$row2['question_id']."\").offset().top + $(\".".$row2['question_id']."\").height()}, 100);});});</script>";
  
            }


            if($row2['question_type']=="checkbox"){
            echo "<a href=\"#\" class=\"button-2 w-button ".$next."\">Next</a>";
            echo "<script>$(document).ready(()=>{ $(\".".$next."\").on('click',()=>{ $(\"html, body\").animate({scrollTop: $(\".".$row2['question_id']."\").offset().top + $(\".".$row2['question_id']."\").height()}, 100);});});</script>";
          } else {};
  
};
echo "</div></div>";
};
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
<div class="c3"> <div class="b1"> <p class="paragraph-2">You&#x27;ve answered all questions. Answers will be reviewed at your appointment time. For <span class="text-span">EMERGENCY </span>services, please call 911.</p><label class="w-checkbox"><input  type="checkbox" id="checkbox" name="checkbox" required="" data-name="Checkbox" class="w-checkbox-input"><span class="w-form-label">I&#x27;ve understood the above instruction.</span></label><input type="submit" value="Submit" data-wait="Please wait..." class="sbm w-button"></div> </div>
</form>


  </div><img src="images/silver-iphone-6-near-blue-and-silver-stethoscope-48603.jpg" srcset="images/silver-iphone-6-near-blue-and-silver-stethoscope-48603-p-1080.jpeg 1080w, images/silver-iphone-6-near-blue-and-silver-stethoscope-48603-p-1600.jpeg 1600w, images/silver-iphone-6-near-blue-and-silver-stethoscope-48603-p-2000.jpeg 2000w, images/silver-iphone-6-near-blue-and-silver-stethoscope-48603-p-2600.jpeg 2600w, images/silver-iphone-6-near-blue-and-silver-stethoscope-48603-p-3200.jpeg 3200w, images/silver-iphone-6-near-blue-and-silver-stethoscope-48603.jpg 3888w" sizes="100vw" alt="" class="image">
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js?site=5ea24fa4777920d17bd4218b" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src='jquery.js'></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>