<?php 
date_default_timezone_set("America/New_York");
$time= date('m_d_y');
$user = 'b77225dc29feba';
$password = '52bed046';
$dbname = 'heroku_bf6133839e3e3aa';
$host = 'us-cdbr-iron-east-04.cleardb.net';
$port = 3306;
$conn = new mysqli($host, $user, $password, $dbname);

$sql = "DROP TABLE answer_db;";
if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error;}

$sql = "DROP TABLE question_db;";
if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error;}

$sql = "CREATE TABLE `heroku_bf6133839e3e3aa`.`answer_db` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `answer_id` VARCHAR(45) NULL,
    `question_id` VARCHAR(45) NULL,
    `answer_value` VARCHAR(100) NULL,
    PRIMARY KEY (`id`),
    UNIQUE INDEX `id_UNIQUE` (`id` ASC));";
    if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error;}

$sql = "CREATE TABLE `heroku_bf6133839e3e3aa`.`question_db` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `question_id` VARCHAR(45) NULL,
    `value` VARCHAR(100) NULL,
    `cc_id` VARCHAR(45) NULL,
    PRIMARY KEY (`id`),
    UNIQUE INDEX `id_UNIQUE` (`id` ASC));";
    if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error;}

$lv="";
$sql = "SELECT * FROM qa;";
$r1=$conn->query($sql);
if($r1->num_rows>0){
    while($row1=$r1->fetch_assoc()){
                 
            $s=$row1['q_a'];//1.2.1.4.2.1. yes
            $s=strstr($s,' ',true); // 1.2.3.1.4.2.1.
            $k=$lv.$s;
            $s=strrev($s);
            $s=preg_replace('/\./',"",$s,1);//2.1.2.3.4.1
            $s=strrev($s);
            $s=$lv.$s;
            $s="q".$s;

            $q=$row1['q_a']; //1.2.1.4.2.1. yes
            $q=strstr($q,' ',true); //1.2.1.4.2.1.
            $q=strrev($q);//.1.2.4.1.2.1
            $q=preg_replace('/\./',"",$q,1);//1.2.4.1.2.1
            $q=strstr($q,".");//1.2.3.4.1
            $q=preg_replace('/\./',"",$q,1);//1.2.4.1.2.1
            $q=$lv.$q;
            $q="q".strrev($q);//q1.4.3.2.1
 
            $t=strstr($row1['q_a'],' '); //value, q_to_pt, a_to_pt
            
            if (substr($row1['q_a'],-1)=="4"){
                $t=substr($t,0,-1);
            } elseif (substr($row1['q_a'],-1)=="3") {
                $t=substr($t,0,-1);
            } else {};
            if ($t[0]==" "){
                $t=substr($t, 1); 
            } else {};
 
            $c=preg_replace('/\./',"a",$s,1); 
            $c=strstr($c,'.',true); //cc_id
 
            $nd = substr_count($k,".");//number of dots
            for ($i=1;$i<10;$i++){
                $s = preg_replace('/\./',"a",$s,1);
                $s = preg_replace('/\./',"q",$s,1);
                $q = preg_replace('/\./',"a",$q,1);
                $q = preg_replace('/\./',"q",$q,1);//q1a4q3a2q1
                }; // id created 
            $w=substr_count($lv.strstr($row1['q_a'],' ',true),".");
            if($w==2){
                if($s[1] !=="1"){
                    $sql ="INSERT INTO cc_db (q_id, visit_diagnosis) VALUES ('$s','$t') ON DUPLICATE KEY UPDATE q_id = '$s';";    
                }                
                if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error;}}    
            
            $i = substr($row1['q_a'],-1);
            if ($i == "4") {
               $lv=strstr($row1['q_a'],' ',true);
                } elseif($i=="3") {
                    $lv="";
                } else {};
            if($nd % 2 ==0){
                //if it's an answer
                echo "<BR> repeat5?<BR>";    
               $sql = "INSERT INTO answer_db (answer_id, question_id, answer_value) VALUES ('$s','$q','$t');";
               if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error;}       
            } else {
                //if it's a question
                echo "<BR> repeat6?<BR>";    
               $sql = "INSERT INTO question_db (question_id, value, cc_id) VALUES ('$s', '$t','$c');";
               if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error;}};     
            $sql = "SELECT * FROM answer_db;";
            $r2 = $conn->query($sql);
            echo $r2->num_rows."<br>";   

            $sql = "SELECT * FROM question_db;";
            $r3 = $conn->query($sql);
            echo $r3->num_rows."<br>";   
        };
    };

    $sql = "SELECT * FROM cc_db WHERE q_id IS NOT NULL;";
    $r=$conn->query($sql);
    if($r->num_rows()>0){
        echo $r->num_rows();
    };
    
    $sql = "SELECT * FROM cc_db WHERE q_id IS NULL;";
    $r=$conn->query($sql);
    if($r->num_rows()>0){
        while($row=$r->assoc_fetch()){
            $j=$row['visit_diagnosis'];
            $sql="INSERT INTO cc_db (q_id) VALUES ('$i') WHERE visit_diagnosis = '$j';";
            if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error;};   
            $i++;
        };};

        $sql = "SELECT * FROM cc_db;";
        $result=$conn->query($sql);
        $i = $result->num_rows;
    
        $sql = "SELECT * FROM cc_db WHERE q_id IS NULL;";
        $r=$conn->query($sql);
        if($r->num_rows>0){
            while($row=$r->fetch_assoc()){                 
                $j=$row['visit_diagnosis'];
                if($j!==""){
                $k="q2a".$i;
                $sql="UPDATE cc_db SET q_id = '$k' WHERE (`visit_diagnosis` = '$j');";
    
                
    
    
                if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error;};   
                $i++;
        };};};
?>
 
 
 
 
 
 
