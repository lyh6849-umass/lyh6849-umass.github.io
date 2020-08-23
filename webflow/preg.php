<!DOCTYPE html>
<html data-wf-page="5ea63181c07d78d2e93fdb5d" data-wf-site="5ea24fa4777920d17bd4218b">
<head>
</head>
<body>
<form action="preg.php" method="post">
<textarea src rows="20" cols="200" name="text"></textarea><br>
                <input type="submit"><br>
 
<?php
 
include 'db.php';
$array1 = array();
$sql = "SELECT dm_med FROM dm_med_db;";
$r=$conn->query($sql);
if($r->num_rows>0){
  while($row=$r->fetch_assoc()){
    $array1[]=$row['dm_med'];
  }}
 
 
$text = $_POST['text']; 
$n = substr_count($text,"\n");
$lines=explode("\n", $text);
 
function cleannr($matches)
{
    return str_replace("," , "" , $matches["nrs"]);
}
$array2=array("insulin");
$array3=array("needle");
$array4=array("hgba1c");
$arr=array("");
for ($j=0;$j<=$n;$j++){
  $line=$lines[$j];
  if(0 < count(array_intersect(array_map('strtolower', explode(' ', $line)), array_map('strtolower',$array1)))){
    $line=strtolower($line);
    $jj=preg_replace('/\((.*?)\)/', '', strtolower($line));
    $jj=preg_replace_callback ("/(?P<nrs>[0-9]+,[0-9]+)/" , "cleannr" , $jj);
    preg_match('/needle|insulin syringe/', $jj, $ndct);
    $ndct=count($ndct);
    if($ndct==0){
//echo $ndct;
    $jj = strstr($jj,', disp:',true);
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
    $jj=str_replace("every 12 hours","2 times a day",$jj);
    $jj=str_replace("at bed time","1 time a day",$jj);
    $jj=str_replace("nightly","1 time a day",$jj);
    $jj=str_replace(" ss "," sliding scale ",$jj);
    $jj=str_replace("inejct","inject",$jj);
    $jj=str_replace("in the am","1 time a day",$jj);
    $jj=str_replace("in the pm","1 time a day",$jj);
    $jj=str_replace("/ml","/1ml",$jj);
    $jj=str_replace("in the morning","1 time a day",$jj);
    $jj=str_replace("in the afternoon","1 time a day",$jj);
    $jj=str_replace("","",$jj);
    $jj=str_replace("","",$jj);
    $jj=str_replace("","",$jj);
    $jj=str_replace("","",$jj);
    $jj=str_replace("","",$jj);
    $jj=str_replace("","",$jj);
    $jj=$jj."...";
    echo $jj."<br>";
    $arr2=str_split($jj);

    //print_r($arr2);echo"<BR>";
    preg_match_all('/•\s+(.*)\s+(\d+|\d+\.\d+|\d+|\d+\-\d+|\d+\.\d+\-\d+|\d+\-\d+\.\d+|\d+\.\d+\-\d+\.\d+)\s+(mg|units|unit)((\/(\d+|\d+\.\d+)\s*ml)|).*(injection pen|tablet|insulin pen|solution injection|injection dose|injection|vial|.*)\s*/', $jj, $med_name);
    preg_match_all('/(inject as needed)|(sliding scale)|(,\s*(inject| |inject upto)\s*(\d+|\d+.\d\d+\s*to\s*\d+|\d+\s*-\s*\d+)\s*(unit|units|ml)\s*(\d+)\s*(time|times).*(day|week).*(and|,)\s*(\d+|\d+.\d+|\d+\s*to\s*\d+)\s*(unit|units|ml)\s*(\d*)\s*(time|times).*(day|week))|(,\s*(inject| |inject upto|take|administer)\s*(\d+|\d+.\d+|\d+\sto\s\d+|\d*\.\d*)\s*(tablet|mg|unit|units|ml).*(\d+)\s*(time|times).*(day|week))|(,\s*(inject| |inject upto)\s*(\d+|\d+.\d+)\s*(units|unit|ml))|(\d+\s*(\s*|-\d+\s*):\s*\du.*)|(\.\.\.)/', $jj, $med_dose); 
    for ($i=1;$i<count($med_name);$i++){
      echo $i.". ";
      echo $med_name[$i][0]." <br>";
    }   
    for ($i=1;$i<count($med_dose);$i++){

      echo $i.". ";
      echo $med_dose[$i][0]." <br>";
    }   
    $scale="";
    $freq=1;
    $dose_1st="";
    $dose_2nd="";
    $dose_3rd="";
    $dose_4th="";
    $freq_scale="day";
    $name=$med_name[1][0];
    $dose_1st=$med_dose[18][0];
    if($med_dose[18][0]=="tablet"|$med_dose[18][0]=="ml"){
      if(is_numeric($med_name[2])){
        $dose_1st=($med_dose[18][0]/$med_name[6][0])*$med_name[2][0];
      } else {
        $dose_1st=$med_dose[18][0]*$med_name[2][0];
      }
    } else {
      $dose_1st=$med_dose[18][0];
    } 
    if($med_dose[2][0]=="sliding scale"){
      $dose_1st="sliding scale";
    }
    $scale=$med_name[3][0];

    echo "Name: ".$name."<br>";
    if($med_dose[20][0]=="2"){
      $dose_2nd=$dose_1st;
      $freq=2;
      echo "1st Dose: ".$dose_1st."<br>";
      echo "2nd dose: ".$dose_2nd."<br>";
    }
    if($med_dose[20][0]=="3"){
      $freq=3;
      echo "1st Dose: ".$dose_1st."<br>";
      $dose_2nd=$dose_1st;
      echo "2nd dose: ".$dose_2nd."<br>";
      $dose_3rd=$dose_1st;
      echo "3rd dose: ".$dose_3rd."<br>";
    }
    if($med_dose[11][0]!==""){
      $dose_2nd=$med_dose[11][0];
      $dose_1st=$med_dose[5][0];
      echo "1st Dose: ".$dose_1st."<br>";
      echo "2nd dose: ".$dose_2nd."<br>"; 
      $freq=2;
    }
    if($med_dose[9][0]=="week"|$med_dose[15][0]=="week"|$med_dose[22][0]=="week"){
      $freq_scale="week";
    }
    echo    "Scale: ".$scale."<br>";
    echo    "Freq_Scale: ".$freq_scale."<br>";
  
  $sql = "INSERT INTO med_db (med, frequency, freq_scale, 1st_dose, 2nd_dose, 3rd_dose, 4th_dose, scale) VALUES ('$name','$freq','$freq_scale','$dose_1st','$dose_2nd','$dose_3rd','$dose_4th','$scale');";
  if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error;}    
  /*
 */



    /*for ($i=1;$i<count($ddd);$i++){
      echo $i.". ";
      echo $ddd[$i][0]." <br>";
    }*/

  
}}
echo $line."<br>";
preg_match_all('/HGBA1C/i', $line, $wt);
if(0 < count(array_intersect(array_map('strtolower', $wt[0]), array_map('strtolower',$array4)))){
  echo $line;
  preg_match_all('/HGBA1C\s*(\d*\.\d*)(.{0,6})\s(\d\d\/\d\d\/\d\d\d\d)/i', $line, $a1c_array);
  //print_r($a1c_array);
  $sql = "INSERT INTO med_db (med, frequency, freq_scale, 1st_dose, 2nd_dose, 3rd_dose, 4th_dose, scale) VALUES ('$name','$freq','$freq_scale','$dose_1st','$dose_2nd','$dose_3rd','$dose_4th','$scale');";
  if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error;}    

}
//print_r($wt);




}
echo "<br><br><br><br><br><br><br><br>";
for ($j=0;$j<=$n;$j++){
  $line=$lines[$j];
  $line=strtolower($line);
  $jj=preg_replace('/\((.*?)\)/', '', strtolower($line));
  $jj=preg_replace_callback ("/(?P<nrs>[0-9]+,[0-9]+)/" , "cleannr" , $jj);
  if(0 < count(array_intersect(array_map('strtolower', explode(' ', $line)), array_map('strtolower',$array1)))){
    $jj = strstr($jj,', disp:',true);
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
    $jj=str_replace("","",$jj);
    $jj=str_replace("","",$jj);
    $jj=str_replace("","",$jj);
    $jj=str_replace("","",$jj);
    $jj=str_replace("","",$jj);
    $jj=str_replace("","",$jj);
    $jj=str_replace("","",$jj);
    $jj=str_replace("","",$jj);
    echo $jj."<br>";
    $arr2=str_split($jj);
    //print_r($arr2);echo"<BR>";
    preg_match_all('/•\s\s(.*)(\s|\s\s|\s\s\s)(\d\.\d|\d\.\d\d|\d|\d\d|\d\d\d|\d\d\d\d|\d\d\d\d\d)(\s|\s\s|\s\s\s)(units\/ml|unit\/ml|mg|mg\/(\d\.\d|\d\.\d\d|\d|\d\d|\d\d\d|\d\d\d\d|\d\d\d\d\d) ml)(\s\s|\s)(tablet|insulin pen|solution injection|injection dose|injection|vial),\s(inject|take|administer)(\s|\s\s|\s\s\s)(\d.\d|\d.\d\d|\d.\d\d\d|\d|\d\d|\d\d\d|\d\d\d\d)(\s|\s\s|\s\s\s)(tablet|tablets|mg|ml|unit|units)(\s|\s\s|\s\s\s)(\d)(\s|\s\s|\s\s\s)(time a|times a)(\s|\s\s|\s\s\s)(day|week)/i', $jj, $ddd);
    
    for ($i=1;$i<count($ddd);$i++){
      //echo $i.". ";
      //echo $ddd[$i][0]." <br>";
    }

  
}} 
 
 
 
 
 
 
?>
</form>
 
 
</body>
</html>

