<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
  <form action="coding.php" method="post">
Charting level: 
  <input type="radio" name="Clvl" value="ma_pre_charting" checked>ma_pre_charting <br>
  <input type="radio" name="Clvl" value="pt_pre_charting">pt_pre_charting <br>
  <input type="radio" name="Clvl" value="ma_pre_charting2nd">ma_pre_charting2nd <br>
  <input type="radio" name="Clvl" value="md_charting">md_charting <br>
Question Class: <input type="text" name="QC"><br>
Question Title: <input type="text" name="QT"><br>
Number of Answers: <input type="text" name="NA" value="3"><br> 
Number of following questions per answer: <input type="text" name="NfQ" value="3"><br> 
Select one / all <input type = "radio" name="QType" value = "radio" checked>radio <input type="radio" name="QType" value="checkbox">checkbox<br>
Answer name = <input type="text" name="Ans_name"><br>
<input type="submit" value="Creat code">
</form>
</body>


<?php

for ($i=1;$i<=30;$i++){
  echo "('q1a".$i."','  '),";
  
}
/*
$Clvl= $_POST['Clvl'];
$QC = $_POST['QC'];
$NA = $_POST['NA'];
$NfQ = $_POST['NfQ'];
$QT = $_POST['QT'];
$QType = $_POST['QType'];
$Ans_name = $_POST['Ans_name'];

$q=array(    'q1',
'q3a1q3a2q1a1q1',
'q3a1q3a2q1a1q1a2q1',
'q3a1q13a2q1a1q1a1q1',
'q3a1q13a2q1a1q1a2q1',
'q3a1q13a2q1a1q1a2q1a3q1',
'q3a1q13a2q1a1q1a2q1a3q1a2q1',
'q3a1q13a2q1a1q1a1q1a1q1',
'q3a1q13a2q1a1q1a1q1a2q1',
'q3a1q13a2q1a1q1a1q1a2q1a1q1',
'q3a1q13a2q1a1q1a1q1a2q1a1q1a1q1',
'q3a1q13a2q1a1q1a1q1a2q1a2q1'

);
while ($i<=30){
$a= "q1a".$i;
echo "\$(document).ready(()=&gt;{\$(\".".$a."\").on('click',()=&gt;{\$(\".q1\").slideUp();\$(\".".$a."q1\").css(\"display\",\"flex\");});});<br>";
$i++;
};

*/



/*
foreach ($q as $value){
  $i=1;
  echo "&lt;div class=\" y ".$value."\"&gt;<br>&lt;h2&gt;   &lt;/h2&gt;<br>";
  $i=1;
    while ($i<=5){
      if ($i==1){$j = "Yes";}
      elseif ($i==2){$j = "No";}
      else {$j=="  ";}
      echo"&lt;label&gt;&lt;input class=\"".$value."a".$i."\" type=\"radio\" name=\"".$value."\" value=\"".$value."a".$i."\"&gt;&lt;span class=\"".$value."a".$i."\"&gt;$j&lt;/span&gt;&lt;/label&gt;<br>";
    $i++;
    };
      
      echo "&lt;/div&gt;<br><br>";
    }


      /*

        <div class="y q3a1q3a2q1a1q1">
        <h2>Patient's BMI > 30?</h2> 
        <label><input class="q3a1q3a2q1a1q1a1" type="radio" name="q3a1q3a2q1a1q1" value="q3a1q3a2q1a1q1a1"><span class="q3a1q3a2q1a1q1a1">Yes</span></label>
        <label><input class="q3a1q3a2q1a1q1a2" type="radio" name="q3a1q3a2q1a1q1" value="q3a1q3a2q1a1q1a1"><span class="q3a1q3a2q1a1q1a2">No</span></label>
    </div>
/*
foreach ($q as $value){
$i=1;
  while ($i<=5){
    $j=1;
    while($j<=2){
      $a1=$value."a".$i;
      $q1=$a1."q".$j;
      echo "\$(document).ready(()=&gt;{\$(\".".$a1."\").on('click',()=&gt;{\$(\".".$value."\").slideUp(200);\$(\".".$q1."\").css(\"display\",\"flex\");});});<br>";
      $h=1;  
      while ($h<=5){
        $k=1;
        while($k<=2){
          $a2=$q1."a".$h;
          $q2=$a2."q".$k;
          echo "\$(document).ready(()=&gt;{\$(\".".$a2."\").on('click',()=&gt;{\$(\".".$q1."\").slideUp(200);\$(\".".$q2."\").css(\"display\",\"flex\");});});<br>";
         
$k++;
      }
      $h++;
    }

      $j++;
};
$i++;
};
};




/*



$q = array (
'q3a1q3a2q1a1q1',
'q3a1q3a2q1a1q1a2q1',
'q3a1q13a2q1a1q1a1q1',
'q3a1q13a2q1a1q1a2q1',
'q3a1q13a2q1a1q1a2q1a3q1',
'q3a1q13a2q1a1q1a2q1a3q1a2q1',
'q3a1q13a2q1a1q1a1q1a1q1',
'q3a1q13a2q1a1q1a1q1a2q1',
'q3a1q13a2q1a1q1a1q1a2q1a1q1',
'q3a1q13a2q1a1q1a1q1a2q1a1q1a1q1',
'q3a1q13a2q1a1q1a1q1a2q1a2q1'
);
foreach ($q as $value){
  echo "\$".$value."=\$_POST['".$value."'];<br>";
}




/*
foreach ($q as $value){
  echo "ALTER TABLE `ma_2nd_pre_charting` ADD `".$value."` VARCHAR(100) NULL DEFAULT NULL;<br>";
}
/*
$q = array(
'T',
'q1',
'q3a1q2a2q1',
'q3a1q3a2q1',
'q3a1q4a2q1',
'q3a1q5a2q1',
'q3a1q6a2q1',
'q3a1q7a2q1',
'q3a1q8a2q1',
'q3a1q9a2q1',
'q3a1q10a2q1',
'q3a1q11a2q1',
'q3a1q12a2q1',
'q3a1q13a2q1',
'q3a1q10a2q1a1q1',
'q3a1q10a2q1a1q1a4q1',
'q3a1q10a2q1a2q1',
'q3a1q10a2q1a2q1a2q1',
'q3a1q10a2q1a2q1a3q1',
'q3a1q11a2q1a2q1',
'q3a1q12a2q1a2q1',
'q3a1q12a2q1a1q1',
'q3a1q12a2q1a1q1a2q1',
'q3a1q1a2q1',
'q2a1q1',
'q2a1q2',
'q2a1q3',
'q2a1q4',
'q2a1q5',
'q2a1q6',
'q2a1q7',
'q2a1q8',
'q2a1q9',
'q2a1q10',
'q2a1q11',
'q2a1q12',
'q2a1q13',
'q2a1q14',
'q2a1q15',
'q2a1q16',
'q2a1q17',
'q2a1q18',
'q2a1q19',
'q2a1q20',
'q2a1q21',
'q2a1q22',
'q2a1q23',
'q2a1q24',
'q2a1q25',
'q2a1q26',
'q2a1q27',
'q2a1q28',
'q2a1q29',
'q2a1q30',
'q2a1q31',
'q2a1q32',
'q2a1q33',
'q2a1q34');

 foreach ($q as $value){
  echo "ALTER TABLE `pt_pre_charting` ADD `".$value."` VARCHAR(100) NULL DEFAULT NULL;<br>";
 }

/*
for ($i=1;$i<=34;$i++){
  $qc = "q2a1q".$i."";
  echo "'".$qc."', <br>";
  }

for ($i=1;$i<=$NA;$i++){
    echo "&lt;label&gt;&lt;input class=\"".$QC."a".$i."\" type=\"radio\" name=\"".$QC."\" value=\"".$QC."a".$i."\"&gt;&lt;span class=\"".$QC."a".$i."\"&gt;Yes&lt;/span&gt;&lt;/label&gt;<br>";
};

$i=1;
while ($i<=34){
  $qc="q2a1q".$i;
  $ac=$qc."a".$j;
  echo "&lt;div class=\" y ".$qc."\"&gt;<br>
  &lt;h2&gt;   &lt;/h2&gt;<br>"; 
  $j=1;
  while ($j<=2){
    if($j==1){  
  echo "&lt;label&gt;&lt;input class=\"".$qc."a".$j."\" type=\"radio\" name=\"".$qc."\" value=\"".$qc."a".$j."\"&gt;&lt;span class=\"".$qc."a".$j."\"&gt;Yes&lt;/span&gt;&lt;/label&gt;<br>";
    } elseif($j==2) {
      echo "&lt;label&gt;&lt;input class=\"".$qc."a".$j."\" type=\"radio\" name=\"".$qc."\" value=\"".$qc."a".$j."\"&gt;&lt;span class=\"".$qc."a".$j."\"&gt;No&lt;/span&gt;&lt;/label&gt;<br>";
    } elseif($j==3) {
      echo "&lt;label&gt;&lt;input class=\"".$qc."a".$j."\" type=\"radio\" name=\"".$qc."\" value=\"".$qc."a".$j."\"&gt;&lt;span class=\"".$qc."a".$j."\"&gt;More than half the days    &lt;/span&gt;&lt;/label&gt;<br>";
    } elseif($j==4){
      echo "&lt;label&gt;&lt;input class=\"".$qc."a".$j."\" type=\"radio\" name=\"".$qc."\" value=\"".$qc."a".$j."\"&gt;&lt;span class=\"".$qc."a".$j."\"&gt;Nearly every day&lt;/span&gt;&lt;/label&gt;<br>";

    };
    $j++;
  };
  echo "&lt;/div&gt;<br><br>";
  $i++;
};


$q = 
array('q1',
'q2', 
'q3a1q1',
'q3a1q2',
'q3a1q3',
'q3a1q4',
'q3a1q5',
'q3a1q6',
'q3a1q7',
'q3a1q8',
'q3a1q9',
'q3a1q10',
'q3a1q11',
'q3a1q12',
'q3a1q13',
'q3a1q14', 
'q2a1q1a1q1',
'q2a1q1a1q2',
'q2a1q1a1q3',
'q2a1q1a1q4',
'q2a1q1a1q5',
'q2a1q1a1q6',
'q2a1q1a1q7',
'q2a1q1a1q8',
'q2a1q1a1q9',
'q2a1q1a1q10',
'q2a1q1a1q11',
'q2a1q1a1q12',
'q2a1q1a1q13',
'q2a1q1a1q14',
'q2a1q1a1q15',
'q2a1q1a1q16',
'q2a1q1a1q17',
'q2a1q1a1q18',
'q2a1q1a1q19',
'q2a1q1a1q20',
'q2a1q1a1q21',
'q2a1q1a1q22',
'q2a1q1a1q1a1q1',
'q2a1q1a1q1a1q2',
'q2a1q1a1q1a1q3',
'q2a1q1a1q2a1q1',
'q2a1q1a1q2a1q2',
'q2a1q1a1q2a1q3',
'q2a1q1a1q3a1q1',
'q2a1q1a1q3a1q2',
'q2a1q1a1q3a1q3',
'q2a1q1a1q4a1q1',
'q2a1q1a1q4a1q2',
'q2a1q1a1q4a1q3',
'q2a1q1a1q5a1q1',
'q2a1q1a1q5a1q2',
'q2a1q1a1q5a1q3',
'q2a1q1a1q6a1q1',
'q2a1q1a1q6a1q2',
'q2a1q1a1q6a1q3',
'q2a1q1a1q7a1q1',
'q2a1q1a1q7a1q2',
'q2a1q1a1q7a1q3',
'q2a1q1a1q8a1q1',
'q2a1q1a1q8a1q2',
'q2a1q1a1q8a1q3',
'q2a1q1a1q9a1q1',
'q2a1q1a1q9a1q2',
'q2a1q1a1q9a1q3',
'q2a1q1a1q10a1q1',
'q2a1q1a1q10a1q2',
'q2a1q1a1q10a1q3',
'q2a1q1a1q11a1q1',
'q2a1q1a1q11a1q2',
'q2a1q1a1q11a1q3',
'q2a1q1a1q12a1q1',
'q2a1q1a1q12a1q2',
'q2a1q1a1q12a1q3',
'q2a1q1a1q13a1q1',
'q2a1q1a1q13a1q2',
'q2a1q1a1q13a1q3',
'q2a1q1a1q14a1q1',
'q2a1q1a1q14a1q2',
'q2a1q1a1q14a1q3',
'q2a1q1a1q15a1q1',
'q2a1q1a1q15a1q2',
'q2a1q1a1q15a1q3',
'q2a1q1a1q16a1q1',
'q2a1q1a1q16a1q2',
'q2a1q1a1q16a1q3',
'q2a1q1a1q17a1q1',
'q2a1q1a1q17a1q2',
'q2a1q1a1q17a1q3',
'q2a1q1a1q18a1q1',
'q2a1q1a1q18a1q2',
'q2a1q1a1q18a1q3',
'q2a1q1a1q19a1q1',
'q2a1q1a1q19a1q2',
'q2a1q1a1q19a1q3',
'q2a1q1a1q20a1q1',
'q2a1q1a1q20a1q2',
'q2a1q1a1q20a1q3',
'q2a1q1a1q21a1q1',
'q2a1q1a1q21a1q2',
'q2a1q1a1q21a1q3',
'q2a1q1a1q22a1q1',
'q2a1q1a1q22a1q2',
'q2a1q1a1q22a1q3'



);

foreach ($q as $value){
  echo "ALTER TABLE `ma_pre_charting` ADD `".$value."` VARCHAR(100) NULL DEFAULT NULL;<br>";
  echo "\$(document).ready(()=> {
    \$(\\\".q2a1q1a1q".$i."a1q".$j."a".$h."\\\").on('click',()=> { 
    \$(\\\".q2a1q1a1q".$i."a1q".$j."\\\").slideUp();
    \$(\\\".q2a1q1a1q".$i."a1q".$j."a".$h."q1\\\").css(\\\"display\\\" ,\\\"flex\\\")
    ;});});<br>";

};

$z="";
for ($i=1;$i<=3;$i++){
  $z= "q".$i;
  echo $z."<br>";
  for ($a1=1;$a1<=5;$a1++){
  for($b1=1;$b1<=3;$b1++){
  $z1=$z."a".$a1."q".$b1;
  echo $z1."<br>";
  for ($a2=1;$a2<=5;$a2++){
  for($b2=1;$b2<=3;$b2++){
  $z2=$z1."a".$a2."q".$b2;
  echo $z2."<br>";
  for ($a3=1;$a3<=5;$a3++){
  for($b3=1;$b3<=3;$b3++){
  $z3=$z2."a".$a3."q".$b3;
  echo $z3."<br>";
  for ($a4=1;$a4<=5;$a4++){
  for($b4=1;$b4<=3;$b4++){
  $z4=$z3."a".$a4."q".$b4;
  echo $z4."<br>";

};};};};};};};};};

for ($i=1;$i<=7;$i++){
$a="a".$i;
$b="b".$i;
$ii=$i-1;
echo "for (\$".$a."=1;\$".$a."&lt;=5;\$".$a."++){"."<br>"."for(\$".$b."=1;\$".$b."&lt;=3;\$".$b."++){<br>"."\$z".$i."=\$z".$ii.".\"a\".\$".$a.".\"q\".\$".$b.";<br>echo \$z".$i.".\"&lt;br&gt;\";<br>";
};


for ($i=1;$i<=22;$i++){
  for($j=1;$j<=3;$j++){
    echo "&lt;div class=\"y q2a1q1a1q".$i."a1q".$j."\"&gt;&lt;h2&gt; ?&lt;/h2&gt;<br>";
  for ($h=1;$h<=7;$h++){
    if (($j==2)&&($h==1)){
    echo "&lt;label&gt;&lt;input class=\"q2a1q1a1q" . $i . "a1q" . $j . "a" . $h . "\" type=\"radio\" name=\"q2a1q1a1q" . $i . "a1q" . $j . "\" value=\"q2a1q1a1q".$i."a1q".$j."a".$h."\"&gt;&lt;span class=\"q2a1q1a1q".$i."a1q".$j."a".$h."\"&gt;Less than 1 month ago&lt;/span&gt;&lt;/label&gt;&lt;br&gt;<br>";
    }
    elseif (($j==2)&&($h==2)){
      echo "&lt;label&gt;&lt;input class=\"q2a1q1a1q" . $i . "a1q" . $j . "a" . $h . "\" type=\"radio\" name=\"q2a1q1a1q" . $i . "a1q" . $j . "\" value=\"q2a1q1a1q".$i."a1q".$j."a".$h."\"&gt;&lt;span class=\"q2a1q1a1q".$i."a1q".$j."a".$h."\"&gt;1-3 moths ago&lt;/span&gt;&lt;/label&gt;&lt;br&gt;<br>";
    }
    elseif (($j==2)&&($h==3)){
      echo "&lt;label&gt;&lt;input class=\"q2a1q1a1q" . $i . "a1q" . $j . "a" . $h . "\" type=\"radio\" name=\"q2a1q1a1q" . $i . "a1q" . $j . "\" value=\"q2a1q1a1q".$i."a1q".$j."a".$h."\"&gt;&lt;span class=\"q2a1q1a1q".$i."a1q".$j."a".$h."\"&gt;4 months ~ 1 year ago&lt;/span&gt;&lt;/label&gt;&lt;br&gt;<br>";
    }
    elseif (($j==2)&&($h==4)){
      echo "&lt;label&gt;&lt;input class=\"q2a1q1a1q" . $i . "a1q" . $j . "a" . $h . "\" type=\"radio\" name=\"q2a1q1a1q" . $i . "a1q" . $j . "\" value=\"q2a1q1a1q".$i."a1q".$j."a".$h."\"&gt;&lt;span class=\"q2a1q1a1q".$i."a1q".$j."a".$h."\"&gt;1-2 years ago&lt;/span&gt;&lt;/label&gt;&lt;br&gt;<br>";
    }
    elseif (($j==2)&&($h==5)){
      echo "&lt;label&gt;&lt;input class=\"q2a1q1a1q" . $i . "a1q" . $j . "a" . $h . "\" type=\"radio\" name=\"q2a1q1a1q" . $i . "a1q" . $j . "\" value=\"q2a1q1a1q".$i."a1q".$j."a".$h."\"&gt;&lt;span class=\"q2a1q1a1q".$i."a1q".$j."a".$h."\"&gt;Over 2 years ago&lt;/span&gt;&lt;/label&gt;&lt;br&gt;<br>";
    }
    elseif (($j==2)&&($h==6)){
      echo "&lt;label&gt;&lt;input class=\"q2a1q1a1q" . $i . "a1q" . $j . "a" . $h . "\" type=\"radio\" name=\"q2a1q1a1q" . $i . "a1q" . $j . "\" value=\"q2a1q1a1q".$i."a1q".$j."a".$h."\"&gt;&lt;span class=\"q2a1q1a1q".$i."a1q".$j."a".$h."\"&gt;No record&lt;/span&gt;&lt;/label&gt;&lt;br&gt;<br>";
    }
    elseif (($j==3)&&($h==1)){
      echo "&lt;label&gt;&lt;input class=\"q2a1q1a1q" . $i . "a1q" . $j . "a" . $h . "\" type=\"radio\" name=\"q2a1q1a1q" . $i . "a1q" . $j . "\" value=\"q2a1q1a1q".$i."a1q".$j."a".$h."\"&gt;&lt;span class=\"q2a1q1a1q".$i."a1q".$j."a".$h."\"&gt;3 months follow up planned&lt;/span&gt;&lt;/label&gt;&lt;br&gt;<br>";
    }
    elseif (($j==3)&&($h==2)){
      echo "&lt;label&gt;&lt;input class=\"q2a1q1a1q" . $i . "a1q" . $j . "a" . $h . "\" type=\"radio\" name=\"q2a1q1a1q" . $i . "a1q" . $j . "\" value=\"q2a1q1a1q".$i."a1q".$j."a".$h."\"&gt;&lt;span class=\"q2a1q1a1q".$i."a1q".$j."a".$h."\"&gt;6 months follow up planned&lt;/span&gt;&lt;/label&gt;&lt;br&gt;<br>";
    }
    elseif (($j==3)&&($h==3)){
      echo "&lt;label&gt;&lt;input class=\"q2a1q1a1q" . $i . "a1q" . $j . "a" . $h . "\" type=\"radio\" name=\"q2a1q1a1q" . $i . "a1q" . $j . "\" value=\"q2a1q1a1q".$i."a1q".$j."a".$h."\"&gt;&lt;span class=\"q2a1q1a1q".$i."a1q".$j."a".$h."\"&gt;12 months follow up planned&lt;/span&gt;&lt;/label&gt;&lt;br&gt;<br>";
    }
    elseif (($j==3)&&($h==4)){
      echo "&lt;label&gt;&lt;input class=\"q2a1q1a1q" . $i . "a1q" . $j . "a" . $h . "\" type=\"radio\" name=\"q2a1q1a1q" . $i . "a1q" . $j . "\" value=\"q2a1q1a1q".$i."a1q".$j."a".$h."\"&gt;&lt;span class=\"q2a1q1a1q".$i."a1q".$j."a".$h."\"&gt;Follow up not planned&lt;/span&gt;&lt;/label&gt;&lt;br&gt;<br>";
    }
    elseif (($j==2)&&($h==7)){}
    elseif (($j==3)&&($h==5)){}
    elseif (($j==3)&&($h==6)){}
    elseif (($j==3)&&($h==7)){}
    else {
      echo "&lt;label&gt;&lt;input class=\"q2a1q1a1q" . $i . "a1q" . $j . "a" . $h . "\" type=\"radio\" name=\"q2a1q1a1q" . $i . "a1q" . $j . "\" value=\"q2a1q1a1q".$i."a1q".$j."a".$h."\"&gt;&lt;span class=\"q2a1q1a1q".$i."a1q".$j."a".$h."\"&gt;&lt;/span&gt;&lt;/label&gt;&lt;br&gt;<br>";
    };
    
  };
  echo "&lt;/div&gt;<br>";
  };
  };

for ($index=1;$index<=22;$index++){
  for ($j=1;$j<=3;$j++){
echo "\$q2a1q1a1q".$index."a1q".$j." = \$_POST['q02a01q01a01q".$index."'];<br>";
  };
};


for ($index=1;$index<=22;$index++){
  echo "q2a1q1a1q".$index.",<br>";
};
  



for ($index=1;$index<=22;$index++){
  echo "'\$q2a1q1a1q".$index."',<br>";
  };





for ($i = 1; $i <=22; $i++){
  for ($j = 1; $j<=3; $j++){
    for ($h = 1;$h<=7;$h++){
  echo "\$(document).ready(()=> {
    \$(\\\".q2a1q1a1q".$i."a1q".$j."a".$h."\\\").on('click',()=> { 
    \$(\\\".q2a1q1a1q".$i."a1q".$j."\\\").slideUp();
    \$(\\\".q2a1q1a1q".$i."a1q".$j."a".$h."q1\\\").css(\\\"display\\\" ,\\\"flex\\\")
    ;});});<br>";
};};};


for ($index=1;$index<=22;$index++){
  for ($index2=1;$index2<=3;$index2++){
    echo "&lt;div class=\"y q2a1q1a1q".$index."a1q".$index2."\"&gt;&lt;h2&gt; ?&lt;/h2&gt;<br>";
    for ($index3=1;$index3<=7;$index3++){
      echo  "&lt;label&gt;&lt;input class=\"q2a1q1a1q".$index."a1q".$index2."a".$index3."\" type=\"radio\" name=\"q2a1q1a1q".$index."a1q".$index2."\" value=\"q2a1q1a1q".$index."a1q".$index2."\"&gt;&lt;span class=\"q2a1q1a1q".$index."a1q".$index2."a".$index3."\"&gt;&lt;/span&gt;&lt;/label&gt;<br>";
     }
     echo"&lt;/div&gt;<br>";
   }
}







for ($index=1; $index<=21; $index++){
  if ($index<=9){
    echo "&lt;th&gt; &lt;label&gt;&lt;input class=\"q02a01q01a01q0".$index."a01\" type=\"checkbox\" name=\"q02a01q01a01q0".$index."\" value=\"q02a01q01a01q0".$index."a01\"&gt;&lt;span class = \"q02a01q01a01q0".$index."a01\"&gt;&lt;/span&gt;&lt;/label&gt;&lt;/th&gt;<br>";
  }
  elseif ($index>9){
    echo "&lt;th&gt; &lt;label&gt;&lt;input class=\"q02a01q01a01q".$index."a01\" type=\"checkbox\" name=\"q02a01q01a01q".$index."\" value=\"q02a01q01a01q".$index."a01\"&gt;&lt;span class = \"q02a01q01a01q".$index."a01\"&gt;&lt;/span&gt;&lt;/label&gt;&lt;/th&gt;<br>";
  }

}
  
  
  


  for ($QQ=1; $QQ<=15; $QQ++){
      if ($QQ<=9){
        echo "ALTER TABLE `" . $Clvl . "` ADD `q03a01q0".$QQ. "` VARCHAR(100) NULL DEFAULT NULL;"."<br>";
      }
      elseif ($QQ > 9){
        echo "ALTER TABLE `" . $Clvl . "` ADD `q03a01q".$QQ. "` VARCHAR(100) NULL DEFAULT NULL;"."<br>";
      }
  }
  $KK="q03a01q";
  for ($QQ=1; $QQ<=15; $QQ++){
    if ($QQ<=9){
      echo "\$q03a01q0".$QQ." = \$_POST['q03a01q0".$QQ."'];<br>";
    }
    elseif ($QQ > 9){
      echo "\$q03a01q".$QQ." = \$_POST['q03a01q".$QQ."'];<br>";
    }
}

for ($QQ=1; $QQ<=15; $QQ++){
  if ($QQ<=9){
    echo "'\$q03a01q0".$QQ."', <br>";
  }
  elseif ($QQ > 9){
    echo "'\$q03a01q".$QQ."', <br>";
  }
}



for ($A=1; $A<=3; $A++){
  echo "ALTER TABLE 'pre_ma_charting' ADD 'q0".$A."' VARCHAR(100) NULL DEFAULT NULL;<br>";
}




echo "<h3>sql</h3>";
echo "ALTER TABLE `" . $Clvl . "` ADD `" .$QC."` VARCHAR(100) NULL DEFAULT NULL;"."<br>";
echo "\$$QC = \$_POST['".$QC."'];";
echo "<h3>Jquery</h3>";

for ($AN = 1; $AN <= $NA; $AN++) 
{
    for ($QN = 1; $QN <= $NfQ; $QN++)
    {
      if($AN <= 9)
      {
        if($QN <= 9)
        {
          echo "\$(document).ready(()=> {
            \$(\\\"." . $QC . "a0" . $AN . "\\\").on('click',()=> { $(\\\"." . $QC . "\\\").slideUp();
            \$(\\\"." . $QC . "a0". $AN. "q0" .$QN . "\\\").css(\\\"display\\\" ,\\\"flex\\\")
            ;});});<br>";
        }
        elseif($QN > 9)
        {
          echo "\$(document).ready(()=> {
            \$(\\\"." . $QC . "a0" . $AN . "\\\").on('click',()=> { $(\\\"." . $QC . "\\\").slideUp();
            \$(\\\"." . $QC . "a0". $AN. "q" .$QN . "\\\").css(\\\"display\\\" ,\\\"flex\\\")
            ;});});<br>";
        }
        
      }
      elseif($AN >9)
      {
        if($QN <= 9)
        {
          echo "\$(document).ready(()=> {
            \$(\\\"." . $QC . "a" . $AN . "\\\").on('click',()=> { $(\\\"." . $QC . "\\\").slideUp();
            \$(\\\"." . $QC . "a". $AN. "q0" .$QN . "\\\").css(\\\"display\\\" ,\\\"flex\\\")
            ;});});<br>";
        }
        elseif($QN > 9)
        {
          echo "\$(document).ready(()=> {
            \$(\\\"." . $QC . "a" . $AN . "\\\").on('click',()=> { $(\\\"." . $QC . "\\\").slideUp();
            \$(\\\"." . $QC . "a". $AN. "q" .$QN . "\\\").css(\\\"display\\\" ,\\\"flex\\\")
            ;});});<br>";
        }
      }
      
    }
};


echo "<h3>HTML</h3>";
echo "&lt;div class=\""."y " .$QC. "\"&gt;&lt;h1&gt;" . $QT .   "&lt;/h1&gt;<br>";
for ($AN = 1; $AN <= $NA; $AN++) 
{
  if($AN <= 9)
      {
        echo "&lt;label&gt&lt;input class=\"".$QC."a0" . $AN. "\" type=\"". $QType . "\" name=\"".$Ans_name."\" value=\"" .$QC."a0" . $AN. "\"&gt;&lt;span class = \"" .$QC."a0" . $AN.  "\"&gt;&lt;/span&gt;&lt;/label&gt".   "<br>";
      }
      elseif($AN >9)
      { 
        echo "&lt;label&gt&lt;input class=\"".$QC."a" . $AN. "\" type=\"". $QType . "\" name=\"".$Ans_name."\" value=\"" .$QC."a" . $AN. "\"&gt;&lt;span class = \"" .$QC."a" . $AN.  "\"&gt;&lt;/span&gt;&lt;/label&gt".   "<br>";
      }
}
echo "&lt;/div&gt;<br>";
*/
?>