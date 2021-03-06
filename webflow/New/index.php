<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Sat Aug 22 2020 18:40:54 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="5ea8d9557a0b6934a6d45220" data-wf-site="5ea8d9557a0b694827d4521f">
<head>
  <meta charset="utf-8">
  <title>Yonghyun Lee&#x27;s Beautiful Project</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/yonghyun-lees-beautiful-project.webflow.css" rel="stylesheet" type="text/css">
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
  <style> 
  .c2 {display:none;}
  div.c2 label input:checked ~ span {
  	background-color: #425064;
  	font-weight:bold;
  	color:white;
  	cursor: pointer;}
      
</style>
</head>
<body>

  <div class="w-row">
    <div class="column w-col w-col-6">
      <div class="form-block w-form">
        <form id="email-form" name="email-form" data-name="Email Form" class="form" action="index.php" method="post"><textarea placeholder="Enter data" maxlength="500000" id="field" name="text" class="textarea w-input"></textarea><input type="submit" value="Submit" data-wait="Please wait..." class="submit-button w-button"></form>
        <div class="w-form-done">
          <div>Thank you! Your submission has been received!</div>
        </div>
        <div class="w-form-fail">
          <div>Oops! Something went wrong while submitting the form.</div>
        </div>
      </div>
    </div>
    <div class="column-2 w-col w-col-6">
      
<?php
include 'db.php';
$text = $_POST['text']; 
$n = substr_count($text,"\n");
$lines=explode("\n", $text);
$u=0;
$total="";
for ($p=0;$p<=$n;$p++){
    $total=$total.$lines[$p];
}

/*
$array2=(explode('. ',strtolower($total)));
for($m=0;$m<count($array2);$m++){
    $array2_2=explode('. ',$array2[$m]);
    for($e=0;$e<count($array2_2);$e++){
        echo"-".$array2_2[$e]."<BR>";
    }
}
$array3=str_split($total);
$total="";
for($m=0;$m<count($array3);$m++){
    $total=$total.$array3[$m];
}
*/


    

$sql = "SELECT * FROM htn_med_db";
$r=$conn->query($sql);
$htn_med_db=array();
if($r->num_rows>0){
  while($row = $r->fetch_assoc()){
      $htn_med_db [] = $row['med'];
      
}}
$sql = "SELECT * FROM hld_med_db";
$r=$conn->query($sql);
$hld_med_db=array();
if($r->num_rows>0){
  while($row = $r->fetch_assoc()){
      $hld_med_db [] = $row['med'];
}}

$sql = "SELECT * FROM asthma_med_db";
$r=$conn->query($sql);
$asthma_med_db=array();
if($r->num_rows>0){
  while($row = $r->fetch_assoc()){
      $asthma_med_db [] = $row['med'];
      $asthma_med_db [] = $row['brand'];
}}

$sql = "SELECT * FROM dm_med_db";
$r=$conn->query($sql);
$dm_med_db=array();
$dm_hypoglycemia_agent=array();
if($r->num_rows>0){
  while($row = $r->fetch_assoc()){
      $dm_med_db [] = $row['dm_med'];
      if ($row['hypoglycemia risk']>0){
          $dm_hypoglycemia_agent[]=$row['dm_med'];
      }
}}

$th_med_db=array("levothyroxine");


//data extract from $text

//All medication list generator 
$th_full_med_list=array();
$asthma_full_med_list=array();
for ($p=0;$p<=$n;$p++){
    $str=strtolower($lines[$p]);
    preg_match_all('/.+(tablet|capsule|unit|inhaler|nebulizer).*,\s.*(take|inject|inhale).*(tablet|unit|vial|puff)/i',$str,$out_med);
    preg_match_all('/\w+/', $str, $out_word);
    if(count($out_med[0])>0){
        $jj=$str;
        $jj=preg_replace('/\((.*?)\)/', '', $jj);
        preg_match_all('/disp/',$jj,$out_disp);
        if(count($out_disp[0])>0){$jj = strstr($jj,', disp:',true);}
        $jj=str_replace("under the skin","",$jj);
        $jj=str_replace("by mouth","",$jj);
        $jj=str_replace("chew and swallow","take",$jj);
        $jj=str_replace("twice daily","2 times a day",$jj);
        $jj=str_replace("twice a day","2 times a day",$jj);
        $jj=str_replace(" with meals","",$jj);
        $jj=str_replace("once a week","weekly",$jj);
        $jj=str_replace(" before meals","",$jj);
        $jj=str_replace(" with dinner","",$jj);
        $jj=str_replace(" with food","",$jj);
        $jj=str_replace("daily","1 time a day",$jj);
        $jj=str_replace("weekly","1 time a week",$jj);
        $jj=str_replace("subcutaneously ","",$jj);
        $jj=str_replace("1/2","0.5",$jj);
        $jj=str_replace("times 1 time","times",$jj);
        $jj=str_replace("every morning ","1 time a day ",$jj);
        $jj=str_replace("before breakfast ","",$jj);
        $jj=str_replace("three","3",$jj);
        $jj=str_replace(" u "," units ",$jj);
        $jj=str_replace(" with breakfast","",$jj);
        $jj=str_replace("every day","1 time a day",$jj);
        $jj=str_replace("daily","1 time a day",$jj);
        $jj=str_replace("every 12 hours","2 times a day",$jj);
        $jj=str_replace("at bed time","1 time a day",$jj);
        $jj=str_replace("nightly","1 time a day",$jj);
        $jj=str_replace(" ss "," sliding scale ",$jj);
        $jj=str_replace("inejct","inject",$jj);
        $jj=str_replace("in the am","1 time a day",$jj);
        $jj=str_replace("in the pm","1 time a day",$jj);
        $jj=str_replace("/ml","/1ml",$jj);
        if(count(array_intersect(array_map('strtolower',$out_word[0]),array_map('strtolower',$asthma_med_db)))>0){$asthma_full_med_list[]=$jj;}
        if(count(array_intersect(array_map('strtolower',$out_word[0]),array_map('strtolower',$th_med_db)))>0){$th_full_med_list[]=$jj;}
    }
    preg_match_all('/\w+/', $str, $output_array);
    $jj=$output_array[0];
  
    if(count(array_intersect($output_array[0],$dm_med_db))>0){
        $jj=$str;
        $jj=preg_replace('/\((.*?)\)/', '', $jj);
        preg_match_all('/disp/',$jj,$out_disp);
        if(count($out_disp[0])>0){$jj = strstr($jj,', disp:',true);}
        $jj=str_replace("under the skin","",$jj);
        $jj=str_replace("by mouth","",$jj);
        $jj=str_replace("chew and swallow","take",$jj);
        $jj=str_replace("twice daily","2 times a day",$jj);
        $jj=str_replace("twice a day","2 times a day",$jj);
        $jj=str_replace(" with meals","",$jj);
        $jj=str_replace("once a week","weekly",$jj);
        $jj=str_replace(" before meals","",$jj);
        $jj=str_replace(" with dinner","",$jj);
        $jj=str_replace(" with food","",$jj);
        $jj=str_replace("daily","1 time a day",$jj);
        $jj=str_replace("weekly","1 time a week",$jj);
        $jj=str_replace("subcutaneously ","",$jj);
        $jj=str_replace("1/2","0.5",$jj);
        $jj=str_replace("times 1 time","times",$jj);
        $jj=str_replace("every morning ","1 time a day ",$jj);
        $jj=str_replace("before breakfast ","",$jj);
        $jj=str_replace("three","3",$jj);
        $jj=str_replace(" u "," units ",$jj);
        $jj=str_replace(" with breakfast","",$jj);
        $jj=str_replace("every day","1 time a day",$jj);
        $jj=str_replace("daily","1 time a day",$jj);
        $jj=str_replace("every 12 hours","2 times a day",$jj);
        $jj=str_replace("at bed time","1 time a day",$jj);
        $jj=str_replace("nightly","1 time a day",$jj);
        $jj=str_replace(" ss "," sliding scale ",$jj);
        $jj=str_replace("inejct","inject",$jj);
        $jj=str_replace("in the am","1 time a day",$jj);
        $jj=str_replace("in the pm","1 time a day",$jj);
        $jj=str_replace("/ml","/1ml",$jj);
        $jj=str_replace("","",$jj);
        preg_match_all('/.+(tablet|capsule|unit).*,\s.*(take|inject).*(tablet|unit)/',$jj,$rrr);
        if(count($rrr[0])>0){$dm_full_med_list[]= $jj;}
    }}


    
//loop with "patient active problem list"
$pt_act_prob_list=0;
for ($j=0;$j<=$n;$j++){
    $string=$lines[$j];
    preg_match_all("/patient active problem list/i",$string,$out);
    preg_match_all("/•/i",$string,$out2);
    preg_match_all("/\*\*end/i",$string,$out3);

    if(count($out2[0])>0&&$pt_act_prob_list==1){
        preg_match_all("/hypertension/i",$string,$out_htn);
        preg_match_all("/diabetes mellitus/i",$string,$out_dm);
        preg_match_all("/(hypothyroid)|(hypothyroidism)/i",$string,$out_th);
        preg_match_all("/(asthma)|(copd)|(chronic obstructive lung disease)|(airway)|(reactive airway)/i",$string,$out_asthma);
        preg_match_all("/(dyslipidemia)|(cholesterol)|(hypertriglyceridemia)|(elevated LDL)|(hyperglyceridemia)|(hyperlipidemia)/i",$string,$out_hld);
        preg_match_all("/(CKD)|(kidney disease)|(AKI\s)|(CKI\s)|(AKD\s)|(kidney failure)|(kidney insufficiency)|(renal insufficiency)|(renal failure)/i",$string,$out_ckd);
//Asthma, copd note starts
        if(count($out_asthma[0])>0){
            echo ucfirst(preg_replace('/•\s*/i', '', $string))."<BR>";
            echo "<div id=\"copy_asthma\">";
            echo "Currently on: <BR>";
            for($i=0;$i<count($asthma_full_med_list);$i++){echo preg_replace('/•/i', '-', $asthma_full_med_list[$i])."<BR>";}
            echo "Plan: <BR>";
            echo "</div>";
            echo "<button onclick=\"copyTo('#copy_asthma')\">Copy</button><br><BR>";
        }
//HTN note starts
        if(count($out_htn[0])>0){

            $htn_full_med_list=array();
            echo ucfirst(preg_replace('/•\s*/i', '', $string))."<BR>";

            //generate BP list, print.
            $first_bp=0;
            for ($p=0;$p<=$n;$p++){
            preg_match_all('/(\d\d\/\d\d)\/(\d\d)\D{0,10}(\d{2,3})\/(\d{2,3})/', $lines[$p], $output_array);
            if (count($output_array[0])>0&&$first_bp<6){
                $first_bp++;
                echo $output_array[1][0]."/20".$output_array[2][0].": ";
                echo "<span style=\"color:";
                if($output_array[3][0]>=140|$output_array[4][0]>=90){
                    echo "red";
                }
                echo "\">".$output_array[3][0]."/".$output_array[4][0]."</span><BR>";
                if($first_bp==1){
                    $first_sbp=$output_array[3][0];
                    $first_dbp=$output_array[4][0];
                }}}

            for ($p=0;$p<=$n;$p++){
                //create HTN_med list
                $str=strtolower($lines[$p]);
                preg_match_all('/\w+/', $str, $output_array);
                $jj=$output_array[0];
                if(count(array_intersect($jj,$htn_med_db))>0){
                    $jj=$str;
                    $jj=preg_replace('/\((.*?)\)/', '', $jj);
                    preg_match_all('/disp/',$jj,$out_disp);
                    if(count($out_disp[0])>0){$jj = strstr($jj,', disp:',true);}
                    $jj=str_replace("under the skin","",$jj);
                    $jj=str_replace("by mouth","",$jj);
                    $jj=str_replace("chew and swallow","take",$jj);
                    $jj=str_replace("twice daily","2 times a day",$jj);
                    $jj=str_replace("twice a day","2 times a day",$jj);
                    $jj=str_replace(" with meals","",$jj);
                    $jj=str_replace("once a week","weekly",$jj);
                    $jj=str_replace(" before meals","",$jj);
                    $jj=str_replace(" with dinner","",$jj);
                    $jj=str_replace(" with food","",$jj);
                    $jj=str_replace("daily","1 time a day",$jj);
                    $jj=str_replace("weekly","1 time a week",$jj);
                    $jj=str_replace("subcutaneously ","",$jj);
                    $jj=str_replace("1/2","0.5",$jj);
                    $jj=str_replace("times 1 time","times",$jj);
                    $jj=str_replace("every morning ","1 time a day ",$jj);
                    $jj=str_replace("before breakfast ","",$jj);
                    $jj=str_replace("three","3",$jj);
                    $jj=str_replace(" u "," units ",$jj);
                    $jj=str_replace(" with breakfast","",$jj);
                    $jj=str_replace("every day","1 time a day",$jj);
                    $jj=str_replace("daily","1 time a day",$jj);
                    $jj=str_replace("every 12 hours","2 times a day",$jj);
                    $jj=str_replace("at bed time","1 time a day",$jj);
                    $jj=str_replace("nightly","1 time a day",$jj);
                    $jj=str_replace(" ss "," sliding scale ",$jj);
                    $jj=str_replace("inejct","inject",$jj);
                    $jj=str_replace("in the am","1 time a day",$jj);
                    $jj=str_replace("in the pm","1 time a day",$jj);
                    $jj=str_replace("/ml","/1ml",$jj);
                    $jj=str_replace("","",$jj);
                    preg_match_all('/.+(tablet|capsule).*,\s.*(take).*(tablet)/',$jj,$rrr);
                    if(count($rrr[0])>0){$htn_full_med_list[]= $jj;}
                }
            }
            //display htn_med list
            echo "Currently on: <BR>";
                for($i=0;$i<count($htn_full_med_list);$i++){
                    echo preg_replace('/•/i', '-', $htn_full_med_list[$i])."<BR>";
                }
            //plan 
            echo "Plan: <BR>";
            if($first_sbp<140&&$first_dbp<90){
                echo "-Most recent blood pressure with in target.<BR>-Continue current treatment.<BR>-Encourage regular exercise, low sugar/carbohydrate/fat diet.<BR>-At least twice a year blood pressure monitor in the office.<BR>";
            }elseif($first_sbp>=140|$first_dbp>=90){
                echo "";
            }

            echo "<button onclick=\"copyTo('#copy_htn')\">Copy</button>";
        }//HTN nots ends Here 
//HTN note copy starts
        if(count($out_htn[0])>0){
            echo "<div style=\"display:none\" id=\"copy_htn\">";
            $htn_full_med_list=array();

            //generate BP list, print.
            $first_bp=0;
            echo "Date: Blood pressure<BR>";
            for ($p=0;$p<=$n;$p++){
            preg_match_all('/(\d\d\/\d\d)\/(\d\d)\D{0,10}(\d{2,3})\/(\d{2,3})/', $lines[$p], $output_array);
            if (count($output_array[0])>0&&$first_bp<6){
                $first_bp++;
                echo $output_array[1][0]."/20".$output_array[2][0].": ";
                echo $output_array[3][0]."/".$output_array[4][0]."<BR>";
                if($first_bp==1){
                    $first_sbp=$output_array[3][0];
                    $first_dbp=$output_array[4][0];
                }}}
            echo"<BR>";
            for ($p=0;$p<=$n;$p++){
                //create HTN_med list
                $str=strtolower($lines[$p]);
                preg_match_all('/\w+/', $str, $output_array);
                $jj=$output_array[0];
                if(count(array_intersect($jj,$htn_med_db))>0){
                    $jj=$str;
                    $jj=preg_replace('/\((.*?)\)/', '', $jj);
                    preg_match_all('/disp/',$jj,$out_disp);
                    if(count($out_disp[0])>0){$jj = strstr($jj,', disp:',true);}
                    $jj=str_replace("under the skin","",$jj);
                    $jj=str_replace("by mouth","",$jj);
                    $jj=str_replace("chew and swallow","take",$jj);
                    $jj=str_replace("twice daily","2 times a day",$jj);
                    $jj=str_replace("twice a day","2 times a day",$jj);
                    $jj=str_replace(" with meals","",$jj);
                    $jj=str_replace("once a week","weekly",$jj);
                    $jj=str_replace(" before meals","",$jj);
                    $jj=str_replace(" with dinner","",$jj);
                    $jj=str_replace(" with food","",$jj);
                    $jj=str_replace("daily","1 time a day",$jj);
                    $jj=str_replace("weekly","1 time a week",$jj);
                    $jj=str_replace("subcutaneously ","",$jj);
                    $jj=str_replace("1/2","0.5",$jj);
                    $jj=str_replace("times 1 time","times",$jj);
                    $jj=str_replace("every morning ","1 time a day ",$jj);
                    $jj=str_replace("before breakfast ","",$jj);
                    $jj=str_replace("three","3",$jj);
                    $jj=str_replace(" u "," units ",$jj);
                    $jj=str_replace(" with breakfast","",$jj);
                    $jj=str_replace("every day","1 time a day",$jj);
                    $jj=str_replace("daily","1 time a day",$jj);
                    $jj=str_replace("every 12 hours","2 times a day",$jj);
                    $jj=str_replace("at bed time","1 time a day",$jj);
                    $jj=str_replace("nightly","1 time a day",$jj);
                    $jj=str_replace(" ss "," sliding scale ",$jj);
                    $jj=str_replace("inejct","inject",$jj);
                    $jj=str_replace("in the am","1 time a day",$jj);
                    $jj=str_replace("in the pm","1 time a day",$jj);
                    $jj=str_replace("/ml","/1ml",$jj);
                    $jj=str_replace("","",$jj);
                    preg_match_all('/.+(tablet|capsule).*,\s.*(take).*(tablet)/',$jj,$rrr);
                    if(count($rrr[0])>0){$htn_full_med_list[]= $jj;}
                }}
            //display htn_med list
            echo "Currently on: <BR>";
                for($i=0;$i<count($htn_full_med_list);$i++){
                    echo preg_replace('/•/i', '-', $htn_full_med_list[$i])."<BR>";
                }
            //plan 
            echo "<BR>";
            echo "Plan: <BR>";
            if($first_sbp<140&&$first_dbp<90){
                echo "-Most recent blood pressure with in target.<BR>-Continue current treatment.<BR>-Encourage regular exercise, low sugar/carbohydrate/fat diet.<BR>-At least twice a year blood pressure monitor in the office.<BR>";
            }elseif($first_sbp>=140|$first_dbp>=90){
                echo "";
            }
            echo "</div><BR><BR>";        
        }//HTN note copy ends here;
//DM note starts here
        if(count($out_dm[0])>0){
            echo ucfirst(preg_replace('/•\s*/i', '', $string))."<BR>";
            preg_match_all('/HGBA1C\s(\d+.\d).{1,5}(\d\d\/\d\d\/\d\d\d\d)/i', $text, $out_a1c);
            for ($p=0;$p<=$n;$p++){
                //create DM_med list
                $str=strtolower($lines[$p]);
                preg_match_all('/\w+/', $str, $output_array);
                $jj=$output_array[0];
                if(count(array_intersect($jj,$dm_med_db))>0){
                    $jj=$str;
                    $jj=preg_replace('/\((.*?)\)/', '', $jj);
                    preg_match_all('/disp/',$jj,$out_disp);
                    if(count($out_disp[0])>0){$jj = strstr($jj,', disp:',true);}
                    $jj=str_replace("under the skin","",$jj);
                    $jj=str_replace("by mouth","",$jj);
                    $jj=str_replace("chew and swallow","take",$jj);
                    $jj=str_replace("twice daily","2 times a day",$jj);
                    $jj=str_replace("twice a day","2 times a day",$jj);
                    $jj=str_replace(" with meals","",$jj);
                    $jj=str_replace("once a week","weekly",$jj);
                    $jj=str_replace(" before meals","",$jj);
                    $jj=str_replace(" with dinner","",$jj);
                    $jj=str_replace(" with food","",$jj);
                    $jj=str_replace("daily","1 time a day",$jj);
                    $jj=str_replace("weekly","1 time a week",$jj);
                    $jj=str_replace("subcutaneously ","",$jj);
                    $jj=str_replace("1/2","0.5",$jj);
                    $jj=str_replace("times 1 time","times",$jj);
                    $jj=str_replace("every morning ","1 time a day ",$jj);
                    $jj=str_replace("before breakfast ","",$jj);
                    $jj=str_replace("three","3",$jj);
                    $jj=str_replace(" u "," units ",$jj);
                    $jj=str_replace(" with breakfast","",$jj);
                    $jj=str_replace("every day","1 time a day",$jj);
                    $jj=str_replace("daily","1 time a day",$jj);
                    $jj=str_replace("every 12 hours","2 times a day",$jj);
                    $jj=str_replace("at bed time","1 time a day",$jj);
                    $jj=str_replace("nightly","1 time a day",$jj);
                    $jj=str_replace(" ss "," sliding scale ",$jj);
                    $jj=str_replace("inejct","inject",$jj);
                    $jj=str_replace("in the am","1 time a day",$jj);
                    $jj=str_replace("in the pm","1 time a day",$jj);
                    $jj=str_replace("/ml","/1ml",$jj);
                    $jj=str_replace("","",$jj);
                    preg_match_all('/.+(tablet|capsule|unit).*,\s.*(take|inject).*(tablet|unit)/',$jj,$rrr);
                    if(count($rrr[0])>0){$dm_full_med_list[]= $jj;}
                }}
                //display DM_med list
            echo "Currently on: <BR>";
                for($i=0;$i<count($dm_full_med_list);$i++){
                    echo preg_replace('/•/i', '-', $dm_full_med_list[$i])."<BR>";
                }
            $hypoglycemia_agent=0;
            for($k=0;$k<=$n;$k++){
                preg_match_all('/•.+,.+,\sDisp:.+Rfl:/i', $lines[$k], $output_array);
                if(count($output_array[0])>0){
                    preg_match_all('/\w+/i', $output_array[0][0], $output_array);
                    if(count(array_intersect($output_array[0],$dm_hypoglycemia_agent))>0){
                        //echo $output_array[0][0]."<br>".$hypoglycemia_agent;
                        $hypoglycemia_agent++;
                    }
                    } 
                }
            if(count($out_a1c[0])>0){
                $diff=date_diff(date_create($out_a1c[2][0]),date_create(date('Y-m-d')));
                echo "Most recent hgba1c level checked <span style=\"color:";
                if($diff->format('%m')>5){
                    echo "red";
                    } elseif($diff->format('%m')<=3){
                    echo "green";
                    } elseif($diff->format('%m')<=5 &&$diff->format('%m')>3 ){
                    echo "#e6e600";
                    }
                    echo "\">".$diff->format('%m month(s) %d day(s)')."</span>" ;
                echo " ago was ";
                echo "<span style=\"color:";
                if($out_a1c[1][0]<=7){
                    echo"green";
                } elseif($out_a1c[1][0]>7){
                    echo"red";
                }
                echo "\">".$out_a1c[1][0];
                echo"</span>%.<br>";
                } elseif(count($out_a1c[0])==0){
                    echo "No hgba1c level available in the system<BR>";
                }
                echo"<BR>";
                echo "Plan:<BR>";
                if($out_a1c[1][0]<=7){
                    echo "Continue current treatment<BR>Encourage exercise and low sugar/fat/carbohydrate diet<BR>Every 4 month hgba1c check<br>";
                    if($hypoglycemia_agent>0){
                        echo "Instructed to check fasting finger stick on a regular basis, 3-4 times /week<br>Instructed pt to notify office if blood glucose lvl is below 70<BR>";
                    }
                } elseif ($out_a1c[1][0]>7){
                    echo "Encourage exercise and low sugar/fat/carbohydrate diet<BR>Every 4 month hgba1c check<br>";
                    if($hypoglycemia_agent>0){
                        echo "Instructed to check fasting finger stick on a regular basis, 3-4 times /week<br>Instructed pt to notify office if blood glucose lvl is below 70<BR>";
                    }
                } 
            echo "<button onclick=\"copyTo('#copy_dm')\">Copy</button>";}//DM note ends here
//DM note copy starts here
        if(count($out_dm[0])>0){
            echo "<div style=\"display:none\" id=\"copy_dm\">";
            preg_match_all('/HGBA1C\s(\d+.\d).{1,5}(\d\d\/\d\d\/\d\d\d\d)/i', $text, $out_a1c);
            for ($p=0;$p<=$n;$p++){
                //create DM_med list
                $str=strtolower($lines[$p]);
                preg_match_all('/\w+/', $str, $output_array);
                $jj=$output_array[0];
                if(count(array_intersect($jj,$dm_med_db))>0){
                    $jj=$str;
                    $jj=preg_replace('/\((.*?)\)/', '', $jj);
                    preg_match_all('/disp/',$jj,$out_disp);
                    if(count($out_disp[0])>0){$jj = strstr($jj,', disp:',true);}
                    $jj=str_replace("under the skin","",$jj);
                    $jj=str_replace("by mouth","",$jj);
                    $jj=str_replace("chew and swallow","take",$jj);
                    $jj=str_replace("twice daily","2 times a day",$jj);
                    $jj=str_replace("twice a day","2 times a day",$jj);
                    $jj=str_replace(" with meals","",$jj);
                    $jj=str_replace("once a week","weekly",$jj);
                    $jj=str_replace(" before meals","",$jj);
                    $jj=str_replace(" with dinner","",$jj);
                    $jj=str_replace(" with food","",$jj);
                    $jj=str_replace("daily","1 time a day",$jj);
                    $jj=str_replace("weekly","1 time a week",$jj);
                    $jj=str_replace("subcutaneously ","",$jj);
                    $jj=str_replace("1/2","0.5",$jj);
                    $jj=str_replace("times 1 time","times",$jj);
                    $jj=str_replace("every morning ","1 time a day ",$jj);
                    $jj=str_replace("before breakfast ","",$jj);
                    $jj=str_replace("three","3",$jj);
                    $jj=str_replace(" u "," units ",$jj);
                    $jj=str_replace(" with breakfast","",$jj);
                    $jj=str_replace("every day","1 time a day",$jj);
                    $jj=str_replace("daily","1 time a day",$jj);
                    $jj=str_replace("every 12 hours","2 times a day",$jj);
                    $jj=str_replace("at bed time","1 time a day",$jj);
                    $jj=str_replace("nightly","1 time a day",$jj);
                    $jj=str_replace(" ss "," sliding scale ",$jj);
                    $jj=str_replace("inejct","inject",$jj);
                    $jj=str_replace("in the am","1 time a day",$jj);
                    $jj=str_replace("in the pm","1 time a day",$jj);
                    $jj=str_replace("/ml","/1ml",$jj);
                    $jj=str_replace("","",$jj);
                    preg_match_all('/.+(tablet|capsule).*,\s.*(take).*(tablet)/',$jj,$rrr);
                    if(count($rrr[0])>0){$dm_full_med_list[]= $jj;}
                }}
                //display dm_med list
            echo "Currently on: <BR>";

                for($i=0;$i<count($dm_full_med_list);$i++){
                    echo preg_replace('/•/i', '-', $dm_full_med_list[$i]);
               
                }
            $hypoglycemia_agent=0;
            for($k=0;$k<=$n;$k++){
                preg_match_all('/•.+,.+,\sDisp:.+Rfl:/i', $lines[$k], $output_array);
                if(count($output_array[0])>0){
                    preg_match_all('/\w+/i', $output_array[0][0], $output_array);
                    if(count(array_intersect($output_array[0],$dm_hypoglycemia_agent))>0){
                        //echo $output_array[0][0]."<br>".$hypoglycemia_agent;
                        $hypoglycemia_agent++;
                    }
                    } 
                }
            if(count($out_a1c[0])>0){
                echo"<BR><BR>";
                $diff=date_diff(date_create($out_a1c[2][0]),date_create(date('Y-m-d')));
                echo "Most recent hgba1c level checked ".$diff->format('%m month(s) %d day(s)');
                echo " ago was ";
                echo $out_a1c[1][0];
                echo"%.<br>";
                } elseif(count($out_a1c[0])==0){
                    echo "No hgba1c level available in the system<BR>";
                }
                echo"<BR>";
                echo "Plan:<BR>";
                if($out_a1c[1][0]<=7){
                    echo "Continue current treatment<BR>Encourage exercise and low sugar/fat/carbohydrate diet<BR>Every 4 month hgba1c check<br>";
                    if($hypoglycemia_agent>0){
                        echo "Instructed to check fasting finger stick on a regular basis, 3-4 times /week<br>Instructed pt to notify office if blood glucose lvl is below 70<BR>";
                    }
                } elseif ($out_a1c[1][0]>7){
                    echo "Encourage exercise and low sugar/fat/carbohydrate diet<BR>Every 4 month hgba1c check<br>";
                    if($hypoglycemia_agent>0){
                        echo "Instructed to check fasting finger stick on a regular basis, 3-4 times /week<br>Instructed pt to notify office if blood glucose lvl is below 70<BR>";
                    }
                } 
                echo "</div><BR><BR>";
        }//DM note copy ends here
//HLD note starts here
        if(count($out_hld[0])>0){
            $hld_full_med_list=array();
            echo ucfirst(preg_replace('/•\s*/i', '', $string))."<BR>";
            echo "<div id=\"copy_hld\">";
            //generate lipid panel list, print.
            preg_match_all('/((cholesterol)|(hdlcholeste)|(ldlcholeste)|(trig))\s+(\d+).{1,6}(\d\d\/\d\d\/\d\d\d\d)/i', $text, $out_hld_panel);
            echo "Lipid panel:<BR>";
            for ($q=0;$q<count($out_hld_panel[0]);$q++){
                
                echo " - ".$out_hld_panel[0][$q]."<BR>";
            }
            preg_match_all('/The 10-year ASCVD risk score \(Goff DC Jr\., et al\., 2013\) is\:\s+((\d+)|(\d+\.\d+))%/i', $text, $out_ascvd);
            if(count($out_ascvd[1])>0){
                echo "10 year ASCVD risk is ".$out_ascvd[1][0]."%.<BR>"; 
            } elseif(count($out_ascvd[1])==0){
                echo "ASCVD risk not available<BR>";
            }
            //create hld_med list, display
            $hld_full_med_list=array();
            for ($p=0;$p<=$n;$p++){
                $str=strtolower($lines[$p]);
                preg_match_all('/\w+/', $str, $output_array);
                $jj=$output_array[0];
                if(count(array_intersect($jj,$hld_med_db))>0){
                    $jj=$str;
                    $jj=preg_replace('/\((.*?)\)/', '', $jj);
                    preg_match_all('/disp/',$jj,$out_disp);
                    if(count($out_disp[0])>0){$jj = strstr($jj,', disp:',true);}
                    $jj=str_replace("under the skin","",$jj);
                    $jj=str_replace("by mouth","",$jj);
                    $jj=str_replace("chew and swallow","take",$jj);
                    $jj=str_replace("twice daily","2 times a day",$jj);
                    $jj=str_replace("twice a day","2 times a day",$jj);
                    $jj=str_replace(" with meals","",$jj);
                    $jj=str_replace("once a week","weekly",$jj);
                    $jj=str_replace(" before meals","",$jj);
                    $jj=str_replace(" with dinner","",$jj);
                    $jj=str_replace(" with food","",$jj);
                    $jj=str_replace("daily","1 time a day",$jj);
                    $jj=str_replace("weekly","1 time a week",$jj);
                    $jj=str_replace("subcutaneously ","",$jj);
                    $jj=str_replace("1/2","0.5",$jj);
                    $jj=str_replace("times 1 time","times",$jj);
                    $jj=str_replace("every morning ","1 time a day ",$jj);
                    $jj=str_replace("before breakfast ","",$jj);
                    $jj=str_replace("three","3",$jj);
                    $jj=str_replace(" u "," units ",$jj);
                    $jj=str_replace(" with breakfast","",$jj);
                    $jj=str_replace("every day","1 time a day",$jj);
                    $jj=str_replace("daily","1 time a day",$jj);
                    $jj=str_replace("every 12 hours","2 times a day",$jj);
                    $jj=str_replace("at bed time","1 time a day",$jj);
                    $jj=str_replace("nightly","1 time a day",$jj);
                    $jj=str_replace(" ss "," sliding scale ",$jj);
                    $jj=str_replace("inejct","inject",$jj);
                    $jj=str_replace("in the am","1 time a day",$jj);
                    $jj=str_replace("in the pm","1 time a day",$jj);
                    $jj=str_replace("/ml","/1ml",$jj);
                    $jj=str_replace("","",$jj);
                    preg_match_all('/.+(tablet|capsule).*,\s.*(take).*(tablet)/',$jj,$rrr);
                    if(count($rrr[0])>0){$hld_full_med_list[]= $jj;}
                }
            }
            echo "Currently on: <BR>";
                for($i=0;$i<count($hld_full_med_list);$i++){echo preg_replace('/•/i', '-', $hld_full_med_list[$i])."<BR>";}
            //plan 
            echo "Plan: continue current treatment<BR>";
            echo "</div>";
            echo "<button onclick=\"copyTo('#copy_hld')\">Copy</button><br><BR>";
        }//HLD nots ends Here 
//CKD note starts here
preg_match_all('/creatinine\s+(\d+\.\d+).{1,6}(\d\d\/\d\d\/\d\d\d\d)/i', $text, $out_cr); 
if(count($out_ckd[0])>0){
    $cr_average=0;
    echo ucfirst(preg_replace('/•\s*/i', '', $string))."<BR>";
    echo "<div id=\"copy_ckd\">";
    if(count($out_cr[0])>0){
        //display Cr 
        for ($t=0;$t<count($out_cr[0]);$t++){
            echo$out_cr[0][$t]."<BR>";
        }
        $cr_prog=1;
        for ($u=1;$u<count($out_cr[0]);$u++){
            if($out_cr[1][$u]>$out_cr[1][0]){
                $cr_prog=$cr_prog*0;
            }
        }
        if($out_cr[1][0]>$out_cr[1][1]+0.05&&$out_cr[1][1]>$out_cr[1][2]+0.05){
            $cr_prog=$cr_prog*0;
        }

        $diff=date_diff(date_create($out_cr[2][0]),date_create(date('Y-m-d')));
        echo "Most recent creatinine was checked ".$diff->format('%m month(s) %d day(s)')." ago.<BR>";
        echo "Plan:<BR>";
        if($cr_prog==0){
            echo"-Most recent Cr within baseline range.<BR>-Continue Cr monitor every 4 months<BR>";
            if($diff->format('%m')>3){
                echo"-Recheck Cr with in a month<BR>";
            }
        } elseif($cr_prog==1){
            echo"-Most recent Cr out of baseline range.<BR>-Further evaluation by nephrology indicated<BR>";
        }
        echo "</div>";
        echo "<button onclick=\"copyTo('#copy_ckd')\">Copy</button><br><BR>";
    }

}//CKD note ends here
//Hypothyroidism note starts here
        preg_match_all('/tsh\s+(\d+\.\d+).{1,6}(\d\d\/\d\d\/\d\d\d\d)/i', $text, $out_tsh); 
        if(count($out_th[0])>0){
            echo ucfirst(preg_replace('/•\s*/i', '', $string))."<BR>";
            echo "<div id=\"copy_th\">";
            echo "Currently on: <BR>";
            for($i=0;$i<count($th_full_med_list);$i++){
                echo preg_replace('/•/i', '-', $th_full_med_list[$i])."<BR>";
           
            }
            echo"<BR>";
            if(count($out_tsh[0])>0){
                //display Cr 
                echo "Recent TSH results<BR>";
                for ($t=0;$t<count($out_tsh[0]);$t++){
                    echo$out_tsh[0][$t]."<BR>";
                }
                

                $diff=date_diff(date_create($out_tsh[2][0]),date_create(date('Y-m-d')));
                echo "Most recent TSH was checked ".$diff->format('%m month(s) %d day(s)')." ago.<BR>";
                echo "Plan:<BR>";
                if($out_tsh[1][0]>0.4&&$out_tsh[1][0]<4.5){
                    echo"-Most recent TSH within target.<BR>-Continue TSH monitor every 6-12 months<BR>";
                    if($diff->format('%m')>11){
                        echo"-Recheck TSH with in a month<BR>";
                    }
                } elseif($out_tsh[1][0]<=0.4|$out_tsh[1][0]>=4.5){
                    echo"<br>";
                }
                
            }
            
            echo "</div>";
                echo "<button onclick=\"copyTo('#copy_th')\">Copy</button><br><BR>";

        }//Hypothyroidism note ends here







    }
    if(count($out[0])>0){
        $pt_act_prob_list=$pt_act_prob_list+1;
    }
    if(count($out3[0])>0){
        $pt_act_prob_list=$pt_act_prob_list+1;
    }







}//Entire note ends here

?>


<script>
function copyTo(element) {
  var $temp = $("<textarea>");
  var brRegex = /<br\s*[\/]?>/gi;
  $("body").append($temp);
  $temp.val($(element).html().replace(brRegex, "\r\n")).select();
  document.execCommand("copy");
  $temp.remove();
}
</script>


    </div>


  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=5ea8d9557a0b694827d4521f" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>
