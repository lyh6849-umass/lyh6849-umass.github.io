<?php
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

  for ($i=1;$i<10;$i++){
    $v = "visit_dx".$i;
    $s = "svd".$i;
    $a = $_POST[$v];
    $b = $_POST[$s];
    if($b!==""){
        echo "isset!<BR>";
        $sql = "SELECT q_id FROM cc_db WHERE visit_diagnosis ='$b';";
        $r = $conn->query($sql);
        if($r->num_rows>0){
            while($row=$r->fetch_assoc()){
                $c=$row['q_id'];
                echo $c."<br><br>";
                
            }
        }
        if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error;};

        $sql = "UPDATE cc_db SET q_id = '$c' WHERE visit_diagnosis='$a';";
        if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error;};

        $sql = "UPDATE pt_cc_db SET cc_id = '$c' WHERE visit_diagnosis='$a';";
        if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error;};
    
    }
 
  }