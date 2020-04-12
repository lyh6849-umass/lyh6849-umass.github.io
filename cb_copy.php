<meta http-equiv="refresh" content="10" > 
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
  $sql = "SELECT patient_id FROM center_db WHERE question_id = 'q1';";
  $j="";
  $r1=$conn->query($sql);
  if($r1->num_rows>0){
    while($row1=$r1->fetch_assoc()){
      $sql = "SELECT * FROM answer_db WHERE question_id = 'q1';";
      $r2=$conn->query($sql);
      if($r2->num_rows>0){
        while($row2=$r2->fetch_assoc()){
          date_default_timezone_set("America/New_York");
          $time= date('m_d_y');
          $pt = $time."_".$row2['answer_value'];
          if($row1['patient_id']==$pt){
              if($pt!==$j){
                echo $pt." patient's note is ready for review.<br>";
                $j=$pt;
    
              }

          }
        }
      }
    }
  }

  

  ?>