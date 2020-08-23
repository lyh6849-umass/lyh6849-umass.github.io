<?php
include 'db.php';

$sql = "SELECT * FROM dm_info";
$r=$conn->query($sql);
$dm_info=array();
if($r->num_rows>0){
  while($row = $r->fetch_assoc()){
      $dm_info [] = $row;
  }}

$sql = "SELECT * FROM med_db WHERE qn='1'";
$r=$conn->query($sql);
$dm_med=array();
if($r->num_rows>0){
  while($row = $r->fetch_assoc()){
      $dm_med [] = $row;
  }}


$sql = "SELECT * FROM dm_med_db";
$r=$conn->query($sql);
$dm_med_db=array();
if($r->num_rows>0){
  while($row = $r->fetch_assoc()){
      $dm_med_db [] = $row;
  }}


  
$sql = "SELECT * from dm_a1c";
$r=$conn->query($sql);
$dm_a1c=array();
if($r->num_rows>0){
  while($row = $r->fetch_assoc()){
      $dm_a1c [] = $row;
  }}
//All data
/*
  print_r($dm_info);echo"<br>";
  print_r($dm_info[0]);echo"<br>";
  echo count($dm_info);echo"<br>";
  print_r($dm_med);echo"<br>";
  print_r($dm_med_db);echo"<br>";
  print_r($dm_a1c);echo"<br>";
  */
  //create medication list
  $current_med="No DM medication on file<BR>";
  if(count($dm_med)==0){
  } elseif(count($dm_med)>0){
      $current_med= "Patient is currently on: <Br>";
    for ($i=0;$i<count($dm_med);$i++){
        $current_med= $current_med."   -".$dm_med[$i]['med'];
        if($dm_med[$i]['frequency']==1){
            $current_med= $current_med." ".$dm_med[$i]['1st_dose']." ".$dm_med[$i]['scale']." daily";
        } elseif($dm_med[$i]['frequency']==2){
            if($dm_med[$i]['1st_dose']==$dm_med[$i]['2nd_dose']){
                $current_med= $current_med." ".$dm_med[$i]['1st_dose']." ".$dm_med[$i]['scale']." bid";
            } else {
                $current_med= $current_med." ".$dm_med[$i]['1st_dose']." ".$dm_med[$i]['scale']." in the morning, ".$dm_med[$i]['2nd_dose']." ".$dm_med[$i]['scale']." in the afternoon";
            }
        }
        $current_med= $current_med."<BR>";
    }
  }
  
//hba1c in target or not
if(count($dm_a1c)==0){
    $a1c=0;
}  else{
    if($dm_a1c[0]['a1c']<=7){
        $a1c=1;
    } else {
        $a1c=2;
    }
}
//metformin maxed?
$metformin_dose=0;
$metformin_max=0;

for ($i=0;$i<count($dm_med);$i++){
    if($dm_med[$i]['med']=="metformin"){
        $metformin_dose=$dm_med[$i]['1st_dose']+$dm_med[$i]['2nd_dose']+$dm_med[$i]['3rd_dose'];
    } 
}
if($dm_info[0]['gfr']>60){
    if($metformin_dose<2000){
        $metformin_max=2;
    } elseif($metformin_dose=2000){
        $metformin_max=1;
    }
} elseif ($dm_info[0]['gfr']<=60 &&$dm_info[0]['gfr']>45 ){
    if($metformin_dose<1500){
        $metformin_max=2;
    } elseif($metformin_dose>=1500){
        $metformin_max=1;
    }
} elseif ($dm_info[0]['gfr']<=45 &&$dm_info[0]['gfr']>30 ){
    if($metformin_dose<1000){
        $metformin_max=2;
    } elseif($metformin_dose>=1000){
        $metformin_max=1;
    }
} 

//last Hba1c checked
preg_match_all('/(\d\d\d\d)-(\d\d)-(\d\d)/', $dm_a1c[0]['date'], $date_array);
$date=$date_array[1][0]."-".$date_array[2][0]."-".$date_array[3][0];
$date1=date_create($date);
$diff=date_diff(date_create($date),date_create(date('Y-m-d')));
$a1c_last= $diff->format('%m month(s) %d day(s)')." ago" ;

//Hypoglycemia causing agent on or not on 
$hypo_agent=0;
$hypoglycemia_causing_agents=array();
$patient_on=array();
for($i=0;$i<count($dm_med_db);$i++){
    if($dm_med_db[$i]['hypoglycemia risk']>0){
        $hypoglycemia_causing_agents[]=$dm_med_db[$i]['dm_med'];
    }
}
for($i=0;$i<count($dm_med);$i++){
    $patient_on[]=$dm_med[$i]['med'];
}
$j=count(array_intersect($hypoglycemia_causing_agents,$patient_on));
if($j>0){
    $hypo_agent=1;
} elseif($j=0){
    $hypo_agent=2;
}



if($a1c=1&&$hypo_agent=1){
    echo $current_med;
    echo "Most recent HGBA1C checked ".$a1c_last." was in therapeutic target (".$dm_a1c[0]['a1c']."%).<BR>";
    echo "Plan: <BR>";
    echo "Encourage exercise & low sugar/carbohydrate/fat diet.<br>Continue current treatment. <br>Reval in the office with in 4 months.<BR>";
    echo "Education regarding risk of hypoglycemia with current regimen was given.<BR>";
    echo "Instructed patient to check fasting finger stick on a regular basis, at least twice a week.<BR> Also instructed patient to notify office in case of any blood glucose level below 80.<BR>";
    echo "Patient verbalized understanding/agreement.<br>";
} elseif($a1c=1&&$hypo_agent=2){
    echo $current_med;
    echo "Most recent HGBA1C checked ".$a1c_last." was in therapeutic target (".$dm_a1c[0]['a1c']."%.<BR>";
    echo "Plan: <BR>";
    echo "Encourage exercise & low sugar/carbohydrate/fat diet.<br>Continue current treatment. <br>Reval in the office with in 4 months.<BR>";
    echo "Patient verbalized understanding/agreement.<br>";
} elseif($a1c=2){
    echo $current_med;
    echo "Most recent HGBA1C checked ".$a1c_last." was out of therapeutic target (".$dm_a1c[0]['a1c']."%).<BR>";
    echo "Plan: <br>";
} elseif($a1c=0){
    echo $current_med;
    echo "No HGBA1C result available in the system.<BR> We will obtain HGBA1C with in a week, establish the plan based on the result.<BR>";
}
?>