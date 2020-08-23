<!DOCTYPE html>
<html data-wf-page="5ea63181c07d78d2e93fdb5d" data-wf-site="5ea24fa4777920d17bd4218b">
<head>
</head>
<body>
<form action="HTNmanage.php" method="post">
<textarea src rows="20" cols="200" name="text"></textarea><br>
                <input type="submit"><br>
 


<?php
include 'db.php';
$text = $_POST['text']; 
$n = substr_count($text,"\n");
$lines=explode("\n", $text);


$sql = "SELECT * FROM htn_med_db";
$r=$conn->query($sql);
$htn_med_db=array();
if($r->num_rows>0){
  while($row = $r->fetch_assoc()){
      $htn_med_db [] = $row['med'];
      
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



  $hypoglycemia_agent=0;
  for($j=0;$j<=$n;$j++){
    preg_match_all('/•.+,.+,\sDisp:.+Rfl:/i', $lines[$j], $output_array);
    if(count($output_array[0])>0){
        preg_match_all('/\w+/i', $output_array[0][0], $output_array);
        if(count(array_intersect($output_array[0],$dm_hypoglycemia_agent))>0){
            echo $output_array[0][0]."<br>".$hypoglycemia_agent;
            $hypoglycemia_agent++;
        }
        } 
    }
//DM med list
    $dm_full_med_list=array();
    for ($j=0;$j<=$n;$j++){
        
        $str=strtolower($lines[$j]);
        preg_match_all('/\w+/', $str, $output_array);
        //print_r($output_array[0]); echo "<BR>";
        $jj=$output_array[0];
        if(count(array_intersect($jj,$dm_med_db))>0){
            $jj=$str;
            $jj=preg_replace('/\((.*?)\)/', '', $jj);
            preg_match_all('/disp/',$jj,$out);
            if(count($out[0])>0){$jj = strstr($jj,', disp:',true);}
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
            $dm_full_med_list[]=$jj;
        }
       
    }

    $htn_full_med_list=array();
    for ($j=0;$j<=$n;$j++){
    $str=strtolower($lines[$j]);



//creat blood pressure list 
        preg_match_all('/ /i',$str,$kkk);


 //create $htn_full_med_list   
    preg_match_all('/\w+/', $str, $output_array);
    $jj=$output_array[0];
    if(count(array_intersect($jj,$htn_med_db))>0){
        $jj=$str;
        $jj=preg_replace('/\((.*?)\)/', '', $jj);
        preg_match_all('/disp/',$jj,$out);
        if(count($out[0])>0){$jj = strstr($jj,', disp:',true);}
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

for ($j=0;$j<=$n;$j++){
    $f=$j-$n;

//    echo $j.". ".$lines[$j]."<BR>";
    preg_match_all('/Current Assessment & Plan/i', $lines[$j],$array);
    $i=$j-1;
    preg_match_all('/diabetes mellitus/i', $lines[$i],$array_dm);
    preg_match_all('/hypothyroid/i', $lines[$i],$array_hypoth);
    preg_match_all('/(hypertension)|(high blood pressure)|(elevated blood pressure)/i', $lines[$i],$array_htn);
    if(count($array[0])>0){
            
        //hypothyroidism note starts
        if(count($array_hypoth[0])>0){
            echo"[Hypothyroidism]<BR>";
                    echo $lines[$i]."<BR>";

            for ($m=0;$m<=$n;$m++){
                preg_match_all('/tsh\s+(\d+\.\d+)\s+(\d\d\/\d\d\/\d\d\d\d)/i'.$lines[$m],$thy);
                echo $thy[0][0];

            }
        
        }

        //HTN note starts

        if(count($array_htn[0])>0){
            echo"[Hypertension]<BR>";
            echo "Blood pressure: <br>";
            for ($p=0;$p<=$n;$p++){
            
                preg_match_all('/(\d\d\/\d\d)\/(\d\d)\D{2,10}(\d{2,3})\/(\d{2,3})/', $lines[$p], $output_array);
                if (count($output_array[0])>0){
                    echo $output_array[1][0]."/20".$output_array[2][0].": ";
                    echo "<span style=\"color:";
                    if($output_array[3][0]>=140|$output_array[4][0]>=90){
                        echo "red";
                    }

                    echo "\">".$output_array[3][0]."/".$output_array[4][0]."</span><BR>";
                }
            }

            echo"Current regimen:<BR>";
            for($i=0;$i<count($htn_full_med_list);$i++){
                echo preg_replace('/•/i', '-', $htn_full_med_list[$i])."<BR>";

            }
            echo"Plan: <br>";
        }
        echo "<BR>";

        //DM note starts
        if(count($array_dm[0])>0){
            echo"[Diabetes Mellitus]<br>";
            echo"Current regimen:<BR>";
            for($i=0;$i<count($dm_full_med_list);$i++){
                echo preg_replace('/•/i', '-', $dm_full_med_list[$i])."<BR>";
            }
            preg_match_all('/HGBA1C\s(\d+.\d).{1,5}(\d\d\/\d\d\/\d\d\d\d)/i', $text, $output_array);
            if(count($output_array[0])>0){
            $diff=date_diff(date_create($output_array[2][0]),date_create(date('Y-m-d')));
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
            if($output_array[1][0]<=7){
                echo"green";
            } elseif($output_array[1][0]>7){
                echo"red";
            }
            echo "\">".$output_array[1][0];
            echo"</span>%.<br>";
            } elseif(count($output_array[0])==0){
                echo "No hgba1c level available in the system<BR>";
            }
            echo "Plan:<BR>";
            if($output_array[1][0]<=7){
                echo "Continue current treatment<BR>Encourage exercise & low sugar/fat/carbohydrate diet<BR>Every 4 month hgba1c check<br>";
                if($hypoglycemia_agent>0){
                    echo "Instructed to check fasting finger stick on a regular basis, 3-4 times /week<br>Instructed pt to notify office if blood glucose lvl is below 70<BR>";
                }
            } elseif ($output_array[1][0]>7){
                echo "Encourage exercise & low sugar/fat/carbohydrate diet<BR>Every 4 month hgba1c check<br>";
                if($hypoglycemia_agent>0){
                    echo "Instructed to check fasting finger stick on a regular basis, 3-4 times /week<br>Instructed pt to notify office if blood glucose lvl is below 70<BR>";
                }
            } 
        }
    }
    
}



?>


</form>
 
 
</body>
</html>       