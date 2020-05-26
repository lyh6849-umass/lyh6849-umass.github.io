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
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js?site=5ea24fa4777920d17bd4218b" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>




<form action="ma3.php" method="POST">
<input type="submit">
<div style ="display:inline;">
<?php
$nn=1;
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
  } else {echo "";};
$time= date('m_d_y');
$qn = $_POST['q1'];

//data insert to qn_tele_db
$qq=$_POST['q3'];
$sql = "INSERT INTO qn_tele_db (qn, tele) VALUES ('$qn','$qq');";
if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error;};

//data insert to pt_cc_db, cc_db from visit diagnosis
for ($i=1;$i<=10;$i++){
$j = "q2_".$i;
echo $j;
$h = $_POST[$j];
if(isset($h)){
  $sql = "INSERT INTO cc_db (visit_diagnosis) VALUES ('$h');";
  if ($conn->query($sql) === TRUE) {echo "";} else {echo "";}  
  $sql = "SELECT * FROM cc_db WHERE visit_diagnosis = '$h';";
  $r2 = $conn->query($sql);
  if($r2->num_rows>0){
    while ($row2 = $r2->fetch_assoc()){
      if($row2['q_id']==""){
        echo "<br><input type=\"text\" name=\"visit_dx".$nn."\" value=\"".$h."\">
        <input type=\"text\" list=\"list2\" name =\"svd".$nn."\"><br>";
        $nn=$nn+1;
      } 
      $k2 = $row2['q_id'];
      $sql = "INSERT INTO pt_cc_db (pt_id, cc_id, visit_diagnosis) VALUES ('$qn', '$k2', '$h');";
      if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error;}  
      };
    };
  };
};

//data insert to pt_cc_db, cc_db from textarea
$i= $_POST['medication'];
$n = substr_count($i,"\n");
$lines=explode("\n", $i);
for ($j=0;$j<=$n;$j++){
  $jj=$lines[$j];
  //echo "jj is: ".$jj."<br>jj0 is :".$jj[0]."<br>";
  //echo "•<br>";
  if(strpos($jj, "***") !== false){
    $jj =  substr(substr(ucwords(trim($jj, "***")),1),0,-1);;
    $sql = "INSERT INTO cc_db (visit_diagnosis) VALUES ('$jj');";
    if ($conn->query($sql) === TRUE) {echo "";} else {echo "";}  

    $sql = "SELECT * FROM cc_db WHERE visit_diagnosis='$jj';";
    $r=$conn->query($sql);
    if($r->num_rows>0){
      while($row = $r->fetch_assoc()){
        if($row['q_id']==""){
          echo "<br><input type=\"text\" name=\"visit_dx".$nn."\" value=\"".$jj."\">
          <input type=\"text\" list=\"list2\" name =\"svd".$nn."\"><br>";
          $nn=$nn+1;
        } 
        $k2 = $row['q_id'];
        $sql = "INSERT INTO pt_cc_db (pt_id, cc_id, visit_diagnosis) VALUES ('$qn', '$k2', '$jj');";
        if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error;}  

        }
      }
    } 
  } 


  $time_input = strtotime("2011/05/21");  
  $date_input = getDate($time_input);  
  echo "<br><br><br><br>";                 


// DM meds to center_db
$array1 = array();
$sql = "SELECT dm_med FROM dm_med_db;";
$r=$conn->query($sql);
if($r->num_rows>0){
  while($row=$r->fetch_assoc()){
    $array1[]=$row['dm_med'];
  }}
  echo "<br>";

$i= $_POST['medication'];
$n = substr_count($i,"\n");
$lines=explode("\n", $i);
$hban=0;
$trn=0;
$hbay="";
$hbam="";
$hbad="";

for ($j=0;$j<=$n;$j++){
  $jj=$lines[$j];
  //echo "jj is".$jj."<br>";
  //echo "trnis".$trn."<br>";
  //string with last time treatment regimen changed
  $nr=0;
  for ($i=0;$i<strlen($jj);$i++){
    if(is_numeric($jj[$i])){$nr++;};
  }
  if($nr<4 && $trn==1){
    $trn++;
  }


  if($trn==1){
    $arr2=str_split($jj);
    $nn2=strlen($jj);
    $n2i=1;
    for($i=0;$i<$nn2;$i++){
      if(is_numeric($arr2[$i]) && $n2i==1){
        $year=$arr2[$i];
        $n2i++;
      } elseif(is_numeric($arr2[$i]) && $n2i==2){
        $year=$year*10+$arr2[$i];
        $n2i++;
      } elseif(is_numeric($arr2[$i]) && $n2i==3){
        $year=$year*10+$arr2[$i];
        $n2i++;
      } elseif(is_numeric($arr2[$i]) && $n2i==4){
        $year=$year*10+$arr2[$i];
        $n2i++;
      } elseif(is_numeric($arr2[$i]) && $n2i==5){
        $month=$arr2[$i];
        $n2i++;
      } elseif(is_numeric($arr2[$i]) && $n2i==6){
        $month=$month*10+$arr2[$i];
        if($month<10){
          $month="0".$month;
        }
        $n2i++;
      } elseif(is_numeric($arr2[$i]) && $n2i==7){
        $day=$arr2[$i];

        $n2i++;
      } elseif(is_numeric($arr2[$i]) && $n2i==8){
        $day=$day*10+$arr2[$i];
        $n2i++;
        if($day<10){
          $day="0".$day;
      }
      $date=$year."-".$month."-".$day;
      echo $date;
    }



  }
  $plan=trim(strstr($jj,': '),': ');
  $sql = "INSERT INTO dm_treat(qn, plan, date) VALUES('$qn','$plan','$date');";
  if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error;}  
}

if(strpos(strtolower($jj), strtolower("treatment(DM)")) !==false){
  $trn++;
}


    //strings with medication name
  if(0 < count(array_intersect(array_map('strtolower', explode(' ', $jj)), array_map('strtolower',$array1))))
  {
    if(strpos($jj, "Rfl:") !== false){
      if(strpos($jj, "syringe") == false){
        echo substr(strstr($jj,', Disp:',true),3)."yeah<br>";

  }}}
  //strings with HBA1C
  if(strpos($jj, "HGBA1C") !== false){
    $arr1 = str_split($jj);
    //print_r ($arr1);
    //echo "<br>";
    $nn = strlen($jj);
    $ni=1;
    for($i=0;$i<$nn;$i++){
      if (is_numeric($arr1[$i]) && $ni==1){
          $ni++;
      } elseif(is_numeric($arr1[$i])&&$ni==2){
        $hba=$arr1[$i];
        $ni=$ni+1;
      } elseif(is_numeric($arr1[$i])&&$ni==3){
        $hba=$hba*10+$arr1[$i];
        //echo "hba1c is: ".$hba."<br>";
      } elseif($arr1[$i]=="."&&$ni==3){
        $ni=$ni+1;
      } elseif(is_numeric($arr1[$i])&&$ni==4){
        $hba=$hba+0.1*$arr1[$i];
        $ni++;
        $hban++;
        //echo "hba1c is: ".$hba."<br>";
      } elseif($arr1[$i]==" "&&$ni=5){
        $ni++;
      } elseif(is_numeric($arr1[$i])&&$ni==6){
        $hbam = $arr1[$i];
        $ni++;
      } elseif(is_numeric($arr1[$i])&&$ni==7){
        $hbam = $hbam*10 + $arr1[$i];
        $ni++;
        if($hbam<10){
          $hbam="0".$hbam;
        } else {};
        echo "Month is: ".$hbam."<br>";
      } elseif(is_numeric($arr1[$i])&&$ni==8){
        $hbad = $arr1[$i];
        $ni++;
      } elseif(is_numeric($arr1[$i])&&$ni==9){
        $hbad = $hbad*10 + $arr1[$i];
        $ni++;
        if($hbad<10){
          $hbad="0".$hbad;
        } else {};
        echo "Date is: ".$hbad."<br>";
      } elseif(is_numeric($arr1[$i])&&$ni==10){
        $hbay = $arr1[$i];
        $ni++;
      } elseif(is_numeric($arr1[$i])&&$ni==11){
        $hbay = $hbay*10 + $arr1[$i];
        $ni++;
      } elseif(is_numeric($arr1[$i])&&$ni==12){
        $hbay = $hbay*10 + $arr1[$i];
        $ni++;
      } elseif(is_numeric($arr1[$i])&&$ni==13){
        $hbay = $hbay*10 + $arr1[$i];
        $ni++;
        echo "Year is: ".$hbay."<br>";
      }
        
        //echo $arr1[$i]."=".$ni."<br>";
    }
    $date = $hbay."-".$hbam."-".$hbad;
    if ($hban !==0){
      $sql = "INSERT INTO dm_a1c (qn,prox,a1c,date) VALUES('$qn','$hban','$hba','$date');";
      if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error;}    
  
    }
  }


  } 
/*
    if($hban==1){
      $hba1=$hba;
      $date=$hbay."-".$hbam."-".$hbad;
      $date1=date_create($date);
      $date1st = $date1;
      $date2= date('Y-m-d');
      $date2= date_create($date2);
      $diff=date_diff($date1,$date2);
      if($diff->format('%y')==0){
        $hbaint1 = "The lastest HbA1c checked ".$diff->format('%m month(s)/%d day(s)')." ago is ".$hba1."% ";
      } else {
        $hbaint1 =  "The lastest HbA1c checked ".$diff->format('%y year(s)/%m month(s)/%d day(s)')." ago is ".$hba1."% ";
      }
    } elseif($hban==2){
      $hba2=$hba;
      $hbag=$hba2-$hba1;
      $date=$hbay."-".$hbam."-".$hbad;
      $date1=date_create($date);
      $date2nd=$date1;
      $date2= date('Y-m-d');
      $date2= date_create($date2);
      $diff=date_diff($date1st,$date2nd);
      if($hbag>0){
        if($diff->format('%y')==0){
          $hbaint2 =  "which has improved by ".$hbag."% from HbA1c(".$hba2."%) checked with ".$diff->format('%m month(s)/%d day(s)')." interval<br>";
        } else {
          $hbaint2 =  "which has improved by ".$hbag."% from HbA1c(".$hba2."%) checked with ".$diff->format('%y year(s)/%m month(s)/%d day(s)')." interval<br>";
        }
      } elseif($hbag==0){
        if($diff->format('%y')==0){
          $hbaint2 =  "which equals to the HbA1c checked with ".$diff->format('%m month(s)/%d day(s)')." interval<br>";
        } else {
          $hbaint2 =  "which equals to the HbA1c checked with ".$diff->format('%y year(s)/%m month(s)/%d day(s)')." interval<br>";
        }
      } elseif($hbag<0){
        if($diff->format('%y')==0){
          $hbaint2 =  "which has progressed by ".$hbag."% from HbA1c(".$hba2."%) checked with ".$diff->format('%m month(s)/%d day(s)')." interval<br>";
        } else {
          $hbaint2 =  "which has progressed by ".$hbag."% from HbA1c(".$hba2."%) checked with ".$diff->format('%y year(s)/%m month(s)/%d day(s)')." interval<br>";
        }
      }
    } */

  
 

 /*
        */
echo $hbaint1.$hbaint2;



//med rec
$i= $_POST['medication'];
$n = substr_count($i,"\n");
$lines=explode("\n", $i);
  for ($j=0;$j<=$n;$j++){
    $jj=$lines[$j];
    if(strpos($jj, "Rfl:") !== false){
    $k = strstr($lines[$j],', Disp:',true);

    $k=strtolower($k);
    $k=str_replace(" take","",$k);
    $k=str_replace(" oral","",$k);
    $k=str_replace(" for pain","",$k);
    $k=str_replace(" by mouth","",$k);
    $k=str_replace(" with meals","",$k);
    $k=str_replace(" injection","",$k);
    $k=str_replace(" inject","",$k);
    $k=str_replace(" subcutaneously","",$k);
    $k=str_replace(" under the skin","",$k);
    $k=str_replace(" with breakfast","a.m.",$k);
    $k=str_replace(" with dinner","p.m.",$k);
    $k=str_replace(" 70/30","",$k);
    $k=str_replace(" 100 unit/ml insulin pen","",$k);
    $k=str_replace("• ","",$k);
    $k=str_replace(" nightly","p.m.",$k);
    $k=str_replace(" twice daily","Twice a day",$k);
    $k=str_replace(" 2 times a day","Twice a day",$k);
    $k=str_replace(" twice qd","Twice a day",$k);
    $k=str_replace(" daily","Once a day",$k);
    $k=str_replace(" 3 times qd","Three times a day",$k);
    $k=str_replace(" 3 times daily","Three times a day",$k);
    $k=str_replace(" and "," ",$k);
    $k=str_replace(" insulin nph","nph",$k);
    $k=str_replace(" insulin regular","regular",$k);
    $k=str_replace(" insulin lispro","lispro",$k);
    $k=str_replace(" onetouch delica lancets","",$k);
    $k=str_replace("..",". ",$k);
    $k=str_replace(" chew","",$k);
    $k=str_replace(" swallow","",$k);
    $k=str_replace(" use","",$k);
    $k=str_replace(" u-100 insulin","",$k);
    $k=str_replace(" 100 unit/ml solution","",$k);
    $k=str_replace(" three times qd","Three times a day",$k);
    $k=str_replace(" three times a day","Three times a day",$k);
    $k=str_replace(" three times daily","Three times a day",$k);
    $k=str_replace(" as needed","prn",$k);
    $k=str_replace(" subcutaneously","",$k);
    $k=str_replace(" every day","Once a day",$k);
    $k=str_replace(" twice a day","Twice a day",$k);
    $k=str_replace(" 3 times a day","Three times a day",$k);
    $k=str_replace(" insulin glargine","glargine",$k);
    $k=str_replace(" once a day","Once a day",$k);
    $k=str_replace(" once qd","Once a day",$k);
    $k=str_replace(" instill","",$k);
    $k=str_replace(" 4 times a day","qid",$k);
    $k=str_replace(" 2 times qd","Twice a day",$k);
    $k=str_replace(" aspirin able","aspirin",$k);
    $k=str_replace(" capsule, ",", ",$k);
    $k=str_replace(" 1 capsule","",$k);
    $k=str_replace(" subcutaneously","",$k);
    $k=str_replace(" tablet, ",", ",$k);
    $k=str_replace(" 1 tablet","",$k);
    $k=str_replace(" ,",",",$k);
    $k=str_replace(" ,",",",$k);
    $k=str_replace(" one time per week","Once a week",$k);
    $k=str_replace(" one capsule","",$k);
    $k=str_replace(" 100 unit/ml","",$k);
    $k=str_replace(" insulin pen","",$k);
    $k=str_replace(" ,",",",$k);  
    $k=str_replace(" do not smoke while wearing patch.","",$k);
    $k=str_replace(" place","",$k);
    $k=str_replace(" patch,",",",$k);
    $k=str_replace(" 1 patch","",$k);
    $k=str_replace(" ,",",",$k);  
    $k=str_replace(" on the skin","",$k);
    $k=str_replace(" every 24 hours","Once a day",$k);
    if (strpos($k, "a.m.") !== false){
      if (strpos($k, "p.m.") == false){
        $k=str_replace(" a.m.","Once a day",$k);
        $k=str_replace(" qd qd","Once a day",$k);
      }
    }
    if (strpos($k, "p.m.") !== false){
      if (strpos($k, "a.m.") == false){
        $k=str_replace(" p.m.","Once a day",$k);
        $k=str_replace(" qd qd","Once a day",$k);
      }
    }
    $k=str_replace(" xr","",$k);
    $k=str_replace(" er","",$k);
    $k=str_replace(" ec","",$k);
    $k=str_replace(" xl","",$k);
    $k=str_replace(" 24 hr","",$k);
    $k=str_replace(" ,",",",$k);
    $k=str_replace(" Once a day Once a day","Once a day",$k);
    $k=str_replace(" ion","",$k);
    $k=str_replace(" subcutaneously","",$k);
    $k=str_replace(" subcutaneously","",$k);
    $k=str_replace(" subcutaneously","",$k);
    $k=str_replace(" subcutaneously","",$k);
    $k=str_replace(" subcutaneously","",$k);
    $k=str_replace(" subcutaneously","",$k);
    $k=str_replace(" subcutaneously","",$k);
   
  $g1="";
  $g2="";
  $g3="";
  $arr1 = str_split($k);
    $nn = strlen($k);
 
    $gn=0;
    for($i=0;$i<$nn;$i++){
      if($arr1[$i]=="(" && $gn==0){
       $g1=$g1.$arr1[$i]; 
       $gn++;
      } elseif($arr1[$i]==")" && $gn==1){
        $g1=$g1.$arr1[$i]; 
        $gn++;
 
      } elseif($gn==1){
        $g1=$g1.$arr1[$i]; 
      } elseif($arr1[$i]=="(" && $gn==2){
        $g2=$g2.$arr1[$i]; 
        $gn++;
 
       } elseif($arr1[$i]==")" && $gn==3){
        $g2=$g2.$arr1[$i]; 
        $gn++;
 
      } elseif($gn==3){
         $g2=$g2.$arr1[$i]; 
       } elseif ($arr1[$i]=="(" && $gn==4){
        $g3=$g3.$arr1[$i]; 
        $gn++;
 
       } elseif($gn==5){
         $g3=$g3.$arr1[$i]; 
       } elseif($arr1[$i]==")" && $gn==5){
         $g3=$g3.$arr1[$i]; 
         $gn++;
 
       }
    }  
    $k=str_replace($g1,"",$k);
    $k=str_replace($g2,"",$k);
    $k=str_replace($g3,"",$k);
  
    $l = strstr($k,', ',true);
    $m = substr(strstr($k,', '), 2);
    //$arr = explode(' ',trim($m));
    //$e= $arr[0];
    if(strlen($l)>3 
    && strpos($l, "strip") == false
    && strpos($l, "syringe") == false 
    && strpos($l, "lancet") == false
    && strpos($l, "needle") == false
    && strpos($m, "dx code") == false
    && strpos($l, "diagnostic") == false
    && strpos($l, "blood") == false
    && strpos($l, "misc") == false
    && strpos($l, "strip") == false
    && strpos($l, "strip") == false
    ){
      //$l=substr($l,5);
      //$arr1 = str_split($l);
        $sql = "INSERT INTO med_db (qn, med, dose) VALUES ('$qn', '$l', '$m');";
        if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error;}  
        }; 
      } 
    } 

  $sql = "SELECT visit_diagnosis FROM cc_db;";
  $r6=$conn->query($sql);
  if($r6->num_rows>0){
    echo "<datalist id=\"list2\">";
    while ($row6=$r6->fetch_assoc()){
      echo "<option value=\"".$row6['visit_diagnosis']."\" style=\"display:none;\"><option>";
    }
    echo "</datalist>";
  };
  $conn -> close();



$i= $_POST['medication'];
$n = substr_count($i,"\n");
$lines=explode("\n", $i);

for ($j=0;$j<=$n;$j++){
  $jj=$lines[$j];
  if(strpos($jj, "strip") !== false 
  || strpos($jj, "syringe") !== false
  || strpos($jj, "lancet") !== false
  || strpos($jj, "needle") !== false
  || strpos($jj, "lancet") !== false
  || strpos($jj, "lancet") !== false
  || strpos($jj, "lancet") !== false
  || strpos($jj, "lancet") !== false
  || strpos($jj, "diagnostic") !== false){
    $jj="";
  }
 
  $jj=strtolower($jj);
  $jj=strstr($jj,', disp',true); // 1.2.3.1.4.2.1.
  $jj=str_replace("take","",$jj);
  $jj=str_replace("oral","",$jj);
  $jj=str_replace("for pain","",$jj);
  $jj=str_replace("by mouth","",$jj);
  $jj=str_replace("with meals","",$jj);
  $jj=str_replace("inject","",$jj);
  $jj=str_replace("subcutaneously","",$jj);
  $jj=str_replace("under the skin","",$jj);
  $jj=str_replace("with breakfast","a.m.",$jj);
  $jj=str_replace("with dinner","p.m.",$jj);
  $jj=str_replace("70/30","",$jj);
  $jj=str_replace(" 100 unit/ml insulin pen","",$jj);
  $jj=str_replace("• ","",$jj);
  $jj=str_replace("nightly","p.m.",$jj);
  $jj=str_replace("twice daily","Twice a day",$jj);
  $jj=str_replace("2 times a day","Twice a day",$jj);
  $jj=str_replace("twice qd","Twice a day",$jj);
  $jj=str_replace("daily","Once a day",$jj);
  $jj=str_replace("3 times qd","Three times a day",$jj);
  $jj=str_replace("3 times daily","Three times a day",$jj);
  $jj=str_replace("and "," ",$jj);
  $jj=str_replace("insulin nph","nph",$jj);
  $jj=str_replace("insulin regular","regular",$jj);
  $jj=str_replace("insulin lispro","lispro",$jj);
  $jj=str_replace("","",$jj);
  $jj=str_replace("","",$jj);
  $jj=str_replace("onetouch delica lancets","",$jj);
  $jj=str_replace("..",". ",$jj);
  $jj=str_replace("chew","",$jj);
  $jj=str_replace("swallow","",$jj);
  $jj=str_replace("use","",$jj);
  $jj=str_replace("u-100 insulin","",$jj);
  $jj=str_replace("100 unit/ml solution","",$jj);
  $jj=str_replace("three times qd","Three times a day",$jj);
  $jj=str_replace("three times a day","Three times a day",$jj);
  $jj=str_replace("three times daily","Three times a day",$jj);
  $jj=str_replace("as needed","prn",$jj);
  $jj=str_replace("subcutaneously","",$jj);
  $jj=str_replace("every day","Once a day",$jj);
  $jj=str_replace("twice a day","Twice a day",$jj);
  $jj=str_replace("3 times a day","Three times a day",$jj);
  $jj=str_replace("insulin glargine","glargine",$jj);
  $jj=str_replace("once a day","Once a day",$jj);
  $jj=str_replace("once qd","Once a day",$jj);
  $jj=str_replace("instill","",$jj);
  $jj=str_replace("4 times a day","qid",$jj);
  $jj=str_replace("2 times qd","Twice a day",$jj);
  $jj=str_replace("aspirin able","aspirin",$jj);
  $jj=str_replace("capsule, ",", ",$jj);
  $jj=str_replace("1 capsule","",$jj);
  $jj=str_replace("subcutaneously","",$jj);
  $jj=str_replace("tablet, ",", ",$jj);
  $jj=str_replace("1 tablet","",$jj);
  $jj=str_replace(" ,",",",$jj);
  $jj=str_replace(" ,",",",$jj);
  $jj=str_replace("one time per week","Once a week",$jj);
  $jj=str_replace("one capsule","",$jj);
  $jj=str_replace("100 unit/ml","",$jj);
  $jj=str_replace("insulin pen","",$jj);
  $jj=str_replace(" ,",",",$jj);  
  $jj=str_replace("do not smoke while wearing patch.","",$jj);
  $jj=str_replace("place","",$jj);
  $jj=str_replace("patch,",",",$jj);
  $jj=str_replace("1 patch","",$jj);
  $jj=str_replace(" ,",",",$jj);  
  $jj=str_replace("on the skin","",$jj);
  $jj=str_replace("every 24 hours","Once a day",$jj);
  if (strpos($jj, "a.m.") !== false){
    if (strpos($jj, "p.m.") == false){
      $jj=str_replace("a.m.","Once a day",$jj);
      $jj=str_replace("qd qd","Once a day",$jj);
    }
  }
  if (strpos($jj, "p.m.") !== false){
    if (strpos($jj, "a.m.") == false){
      $jj=str_replace("p.m.","Once a day",$jj);
      $jj=str_replace("qd qd","Once a day",$jj);
    }
  }
  $jj=str_replace(" xr","",$jj);
  $jj=str_replace(" er","",$jj);
  $jj=str_replace(" ec","",$jj);
  $jj=str_replace(" xl","",$jj);
  $jj=str_replace(" 24 hr","",$jj);
  $jj=str_replace(" ,",",",$jj);
  $jj=str_replace("Once a day Once a day","Once a day",$jj);
  $jj=str_replace("do not crush tablets","",$jj);
 
 





  $g1="";
  $g2="";
  $g3="";
  $arr1 = str_split($jj);
    $nn = strlen($jj);

    $gn=0;
    for($i=0;$i<$nn;$i++){
      if($arr1[$i]=="(" && $gn==0){
       $g1=$g1.$arr1[$i]; 
       $gn++;
      } elseif($arr1[$i]==")" && $gn==1){
        $g1=$g1.$arr1[$i]; 
        $gn++;

      } elseif($gn==1){
        $g1=$g1.$arr1[$i]; 
      } elseif($arr1[$i]=="(" && $gn==2){
        $g2=$g2.$arr1[$i]; 
        $gn++;

       } elseif($arr1[$i]==")" && $gn==3){
        $g2=$g2.$arr1[$i]; 
        $gn++;

      } elseif($gn==3){
         $g2=$g2.$arr1[$i]; 
       } elseif ($arr1[$i]=="(" && $gn==4){
        $g3=$g3.$arr1[$i]; 
        $gn++;

       } elseif($gn==5){
         $g3=$g3.$arr1[$i]; 
       } elseif($arr1[$i]==")" && $gn==5){
         $g3=$g3.$arr1[$i]; 
         $gn++;

       }
    } 

    $jj=str_replace($g1,"",$jj);
    $jj=str_replace($g2,"",$jj);
    $jj=str_replace($g3,"",$jj);
    $jj=str_replace("subcutaneously","",$jj);
    $jj=str_replace("subcutaneously","",$jj);

  $jj=str_replace("()","",$jj);
  if($jj!==""){
    echo $jj."<br>";
  }

}








?>




</form>
</div>
</body>
</html>

