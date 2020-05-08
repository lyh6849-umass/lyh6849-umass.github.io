<?php 
set_time_limit(0);
date_default_timezone_set("America/New_York");
$time= date('m_d_y');
$user = 'b77225dc29feba';
$password = '52bed046';
$dbname = 'heroku_bf6133839e3e3aa';
$host = 'us-cdbr-iron-east-04.cleardb.net';
$port = 3306;
$conn = new mysqli($host, $user, $password, $dbname);
 
$sql = "DELETE FROM answer_db;";
if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error;}
 
$sql = "DELETE FROM question_db;";
if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error;}
 /*
$sql = "CREATE TABLE `heroku_bf6133839e3e3aa`.`answer_db` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `answer_id` VARCHAR(45) NULL,
    `question_id` VARCHAR(45) NULL,
    `answer_value` VARCHAR(150) NULL,
    `cc_id` VARCHAR(45) NULL,
    `answer_type` VARCHAR(20) NULL,
    PRIMARY KEY (`id`),
    UNIQUE INDEX `answer_id_UNIQUE` (`answer_id` ASC),
    UNIQUE INDEX `id_UNIQUE` (`id` ASC));";
    if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error;}
 
$sql = "CREATE TABLE `heroku_bf6133839e3e3aa`.`question_db` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `question_id` VARCHAR(45) NULL,
    `value` VARCHAR(250) NULL,
    `cc_id` VARCHAR(45) NULL,
    `question_type` VARCHAR(45) NULL,
    PRIMARY KEY (`id`),
    UNIQUE INDEX `question_id` (`question_id` ASC),
    UNIQUE INDEX `id_UNIQUE` (`id` ASC));";
    if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error;}
 */
$lv="";
$lv2="";
$qn = $_POST['qa']; 
$lines=explode("\n", $qn);
$n = substr_count($qn,"\n");
echo $n."<BR>";
for ($u=0;$u<=$n;$u++){ 
    $k = $lines[$u];
    echo $k."<BR>";
            
            $s=$k;//1.2.1.4.2.1. yes
            $s=strstr($s,' ',true); // 1.2.3.1.4.2.1.
            $s="2.".$lv.$lv2.$s;
            $s=strrev($s);
            $s=preg_replace('/\./',"",$s,1);//2.1.2.3.4.1
            $s=strrev($s);
            $s="q".$s;
 
            $q=$k; //1.2.1.4.2.1. yes
            
            $q=strstr($q,' ',true); //1.2.1.4.2.1.
            
            $q="2.".$lv.$lv2.$q;
            
            $q=strrev($q);//.1.2.4.1.2.1
            
            $q=preg_replace('/\./',"",$q,1);//1.2.4.1.2.1
            
            $q=strstr($q,".");//1.2.3.4.1
            
            $q=preg_replace('/\./',"",$q,1);//1.2.4.1.2.1
            
            echo $lv."<br>";
            
            
            $q="q".strrev($q);//q1.4.3.2.1
            
            $t=strstr($k,' '); //value, q_to_pt, a_to_pt
            if (substr($k,-2)==3||substr($k,-2)==4||substr($k,-2)==5||substr($k,-2)==6||substr($k,-2)=="x"){
                $t=substr($t,0,-2);}
            else {};
            if ($t[0]==" "){
                $t=substr($t, 1); 
            } else {};
 
            $c=preg_replace('/\./',"a",$s,1); 
            if(substr_count($c,".")>0){
                $c=strstr($c,'.',true); //cc_id
            };
         
 
            $nd = substr_count("2.".$lv.$lv2.strstr($k,' ',true),".");//number of dots
            for ($i=1;$i<10;$i++){
                $s = preg_replace('/\./',"a",$s,1);
                $s = preg_replace('/\./',"q",$s,1);
                $q = preg_replace('/\./',"a",$q,1);
                $q = preg_replace('/\./',"q",$q,1);//q1a4q3a2q1
                }; // id created 
 
            $w=substr_count("2.".$lv.$lv2.strstr($k,' ',true),".");
            if($w==2){
                echo "w is 2!<br>";
                if($s[1] !=="1"){
                    echo $s."<br>";
                    $t = str_replace("\n","",ucwords($t));
                    echo $t."<br>";
                
                    $sql ="INSERT INTO cc_db (q_id, visit_diagnosis) VALUES ('$s','$t') ON DUPLICATE UPDATE q_id='$s', visit_diagnosis='$t';";  
                }                
                if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error;}}    
            
                $i = substr($k,-2);
                if ($i == 3) {
                   $lv=strstr($k,' ',true);
                   echo "i is 3<br>";
                    } elseif($i==4) {
                        $lv="";
                    } elseif($i==5) {
                        $lv2=strstr($k,' ',true);
                    } elseif($i==6) {
                        $lv2="";
                    } else { echo "else<br>";};
                
            if($nd % 2 ==0){
                echo $s.", ".$q.", ".$t."<br>";
                //if it's an answer
                if(substr($k,-1)=="x"){
                   $sql = "INSERT INTO answer_db (answer_id, question_id, answer_value, answer_type, cc_id) VALUES ('$s','$q','$t','checkbox','$c');";
                    if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error;}; 
                } else {
                    $sql = "INSERT INTO answer_db (answer_id, question_id, answer_value, answer_type, cc_id) VALUES ('$s','$q','$t','radio','$c');";
                    if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error;}  
                };
            } else {
                //if it's a question   
                echo $s." ".$t."<br>";
                if(substr($k,-1)=="x"){
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
    
 
?>
 
 
 
 
 
 
 
 
 
 

