<?php 
date_default_timezone_set("America/New_York");
$time= date('m_d_y');
$user = 'b77225dc29feba';
$password = '52bed046';
$dbname = 'heroku_bf6133839e3e3aa';
$host = 'us-cdbr-iron-east-04.cleardb.net';
$port = 3306;
$conn = new mysqli($host, $user, $password, $dbname);
 
$lv="";
$lv2="";
$sql = "SELECT * FROM qa2;";
 
$r1=$conn->query($sql);
if($r1->num_rows>0){
    while($row1=$r1->fetch_assoc()){
                 
            $s=$row1['qa'];//1.2.1.4.2.1. yes
            $s=strstr($s,' ',true); // 1.2.3.1.4.2.1.
            $s="2.".$lv.$lv2.$s;
            $s=strrev($s);
            $s=preg_replace('/\./',"",$s,1);//2.1.2.3.4.1
            $s=strrev($s);
            $s="q".$s;
 
            $q=$row1['qa']; //1.2.1.4.2.1. yes
            
            $q=strstr($q,' ',true); //1.2.1.4.2.1.
            
            $q="2.".$lv.$lv2.$q;
            
            $q=strrev($q);//.1.2.4.1.2.1
            
            $q=preg_replace('/\./',"",$q,1);//1.2.4.1.2.1
            
            $q=strstr($q,".");//1.2.3.4.1
            
            $q=preg_replace('/\./',"",$q,1);//1.2.4.1.2.1
            
            echo $lv."<br>";
            
            
            $q="q".strrev($q);//q1.4.3.2.1
            
            $t=strstr($row1['qa'],' '); //value, q_to_pt, a_to_pt
            if (substr($row1['qa'],-1)=="3"){
                $t=substr($t,0,-1);
            } elseif (substr($row1['qa'],-1)=="4") {
                $t=substr($t,0,-1);
            } elseif (substr($row1['qa'],-1)=="5") {
                $t=substr($t,0,-1);
            } elseif (substr($row1['qa'],-1)=="6") {
                $t=substr($t,0,-1);                
            } elseif (substr($row1['qa'],-1)=="x") {
                $t=substr($t,0,-1);
            } 
            else {};
            if ($t[0]==" "){
                $t=substr($t, 1); 
            } else {};
 
            $c=preg_replace('/\./',"a",$s,1); 
            $c=strstr($c,'.',true); //cc_id
 
            $nd = substr_count("2.".$lv.$lv2.strstr($row1['qa'],' ',true),".");//number of dots
            for ($i=1;$i<10;$i++){
                $s = preg_replace('/\./',"a",$s,1);
                $s = preg_replace('/\./',"q",$s,1);
                $q = preg_replace('/\./',"a",$q,1);
                $q = preg_replace('/\./',"q",$q,1);//q1a4q3a2q1
                }; // id created 
                
            $w=substr_count("2.".$lv.$lv2.strstr($row1['qa'],' ',true),".");
            if($w==2){
                if($s[1] !=="1"){
                    $sql ="INSERT INTO cc_db (q_id, visit_diagnosis) VALUES ('$s','$t') ON DUPLICATE KEY UPDATE q_id = '$s';";    
                }                
                if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error;}}    
            
            $i = substr($row1['qa'],-1);
            if ($i == "3") {
               $lv=strstr($row1['qa'],' ',true);
                } elseif($i=="4") {
                    $lv="";
                } elseif($i=="5") {
                    $lv2=strstr($row1['qa'],' ',true);
                } elseif($i=="6") {
                    $lv2="";
                } else {};
                
            if($nd % 2 ==0){
                echo $s.", ".$q.", ".$t."<br>";
                //if it's an answer
                if(substr($row1['qa'],-1)=="x"){
                   $sql = "INSERT INTO answer_db (answer_id, question_id, answer_value, answer_type) VALUES ('$s','$q','$t','checkbox');";
                    if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error;}; 
                } else {
                    $sql = "INSERT INTO answer_db (answer_id, question_id, answer_value, answer_type) VALUES ('$s','$q','$t','radio');";
                    if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error;}  
                };
            } else {
                //if it's a question   
                echo $s." ".$t."<br>";
                if(substr($row1['qa'],-1)=="x"){
                    $sql = "INSERT INTO question_db (question_id, value, cc_id, question_type) VALUES ('$s', '$t','$c', 'checkbox');";
                    if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error;}
                } else {
                    $sql = "INSERT INTO question_db (question_id, value, cc_id, question_type) VALUES ('$s', '$t','$c', 'radio');";
                    if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error;}
                }
               
            };     
            $sql = "SELECT * FROM answer_db;";
            $r2 = $conn->query($sql);
            echo $r2->num_rows."<br>";   
 
            $sql = "SELECT * FROM question_db;";
            $r3 = $conn->query($sql);
            echo $r3->num_rows."<br><br>";   
        };
    };
 
 
?>
 
 
 
 
 
 
 
 
 
