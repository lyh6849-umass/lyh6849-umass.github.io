
<?php 
  $user = 'b77225dc29feba';
  $password = '52bed046';
  $dbname = 'heroku_bf6133839e3e3aa';
  $host = 'us-cdbr-iron-east-04.cleardb.net';
  $port = 3306;
  date_default_timezone_set("America/New_York");
  $conn = new mysqli($host, $user, $password, $dbname);
  if ($conn ->connect_errno) {
      echo "Failed to connect to MySQL: " . $conn ->connect_error;
      exit();
    } else {};


    $sql = "SELECT * FROM cc_db WHERE q_id IS NOT NULL;";
    $r=$conn->query($sql);
    $i="q2a".$r->num_rows;

    $sql = "SELECT * FROM cc_db WHERE q_id IS NULL;";
    $r=$conn->query($sql);
    if($r->num_rows>0){
        while($row=$r->fetch_assoc()){
            $j=$row['visit_diagnosis'];
            if($j!==""){
                $sql="INSERT INTO cc_db (q_id) VALUES ('$i') WHERE visit_diagnosis = '$j';";
                if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error;};   
                $i++;
            }
            
        };};
 
        $sql = "SELECT * FROM cc_db WHERE q_id IS NOT NULL;";
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