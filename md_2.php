<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link href = "css.css" type = "text/css" rel="stylesheet">

</head>
<body>
  <div class="c5">
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
  $time= date('m_d_y');
  $pt = $time."_".$_POST['q4'];
  $q4 = $_POST['q4'];

  /*$sql= "SELECT * FROM center_db WHERE answer_id = 'q2a1q1a1' AND patient_id = '$pt';";
  $result = $conn->query($sql);
  if ($result ->num_rows>0){
  echo "<b>[Upper respiratory infection]</b><br>";
  };*/
  $sql = "SELECT value FROM answer_db WHERE answer_id ='$q4';";
  $r2=$conn->query($sql);
  if ($r2->num_rows>0){
    while($row5=$r2->fetch_assoc()){
      echo "Appointment Time: ".$row5['value']."<BR><BR>";
    }
  }
  $sql = "SELECT * FROM cc_db;";
  $r=$conn->query($sql);
  if($r ->num_rows>0){
    while($row4=$r->fetch_assoc()){
      $cc=$row4['cc'];
      $sql= "SELECT * FROM center_db WHERE patient_id = '$pt' AND question_cc='$cc' AND answer_y_n='';";
      $result = $conn->query($sql);
      if ($result ->num_rows>0){
           echo "[".$row4['value']."]<br>";
           while($row = $result->fetch_assoc()){
            echo $row['question_value'].": ".$row['answer_value']."<br>";
          };
        };
      $sql= "SELECT * FROM center_db WHERE patient_id = '$pt' AND question_cc='$cc' AND answer_y_n='yes';";
      $result = $conn->query($sql);
      if ($result ->num_rows>0){
            echo "Patient answered YES to following symptoms: <br>";
            while($row = $result->fetch_assoc()){
            echo $row['answer_value']."; ";
          };
          echo "<br>";
        };
      $sql= "SELECT * FROM center_db WHERE patient_id = '$pt' AND question_cc='$cc' AND answer_y_n='no';";
      $result = $conn->query($sql);
      if ($result ->num_rows>0){
            echo "Patient answered NO to following symptoms: <br>";
            while($row = $result->fetch_assoc()){
            echo $row['answer_value']."; ";
          };
          echo "<br>";
        };
        echo "<br><br>";
    };
    
  };
  

  
      
    


      


      $conn -> close();


      /* $sql ="SELECT * FROM answer_db WHERE answer_id = '$a_id' AND NOT y_n = 'Yes' AND NOT y_n = 'No';";
        $result2=$conn->query($sql);
        if ($result2 ->num_rows>0){
            while($row2 = $result2->fetch_assoc()){
                $sql="SELECT * FROM question_db WHERE question_id='$q_id'";
                  $result3=$conn->query($sql);
                  if($result3->num_rows>0);
                  while($row3 = $result3->fetch_assoc()){
                    if($row3['Category']=="uri"){
                    echo $row3["value"].": ".$row2["value"]."<br>";
                    } else {};
                  };
            };
        };
        
    };
  };
  $sql= "SELECT * FROM center_db WHERE patient_id = '$pt';";
    $result = $conn->query($sql);
    echo "Positive associated sympotms include: ";
    if ($result ->num_rows>0){
      while($row = $result->fetch_assoc()){
        $q_id = $row["question_id"];
        $a_id = $row["answer_id"];
          $sql ="SELECT * FROM answer_db WHERE answer_id = '$a_id' AND y_n = 'Yes';";
          $result2=$conn->query($sql);
          if ($result2 ->num_rows>0){
            while($row2 = $result2->fetch_assoc()){
              $sql="SELECT * FROM question_db WHERE question_id='$q_id'";
                $result3=$conn->query($sql);
                if($result3->num_rows>0);
                while($row3 = $result3->fetch_assoc()){
                  if($row3['Category']=="uri"){
              echo $row2["value"]."; ";
  };};};};};};
  echo "<BR>";
  $sql= "SELECT * FROM center_db WHERE patient_id = '$pt';";
    $result = $conn->query($sql);
    echo "Patient denies: ";
    if ($result ->num_rows>0){
      while($row = $result->fetch_assoc()){
        $q_id = $row["question_id"];
        $a_id = $row["answer_id"];
          $sql ="SELECT * FROM answer_db WHERE answer_id = '$a_id' AND y_n = 'No';";
          $result2=$conn->query($sql);
          if ($result2 ->num_rows>0){
            while($row2 = $result2->fetch_assoc()){
              $sql="SELECT * FROM question_db WHERE question_id='$q_id'";
                $result3=$conn->query($sql);
                if($result3->num_rows>0);
                while($row3 = $result3->fetch_assoc()){
                  if($row3['Category']=="uri"){
              echo $row2["value"]."; ";
  };};};};};};
  echo "<BR><BR>";


  $sql= "SELECT * FROM center_db WHERE answer_id = 'q2a1q3a1' AND patient_id = '$pt';";
  $result = $conn->query($sql);
  if ($result ->num_rows>0){
  echo "<b>[UTI]</b><br>";
  };
  $sql= "SELECT * FROM center_db WHERE patient_id = '$pt';";
  $result = $conn->query($sql);
  if ($result ->num_rows>0){
    while($row = $result->fetch_assoc()){
      $q_id = $row["question_id"];
      $a_id = $row["answer_id"];
        $sql ="SELECT * FROM answer_db WHERE answer_id = '$a_id' AND NOT y_n = 'Yes' AND NOT y_n = 'No';";
        $result2=$conn->query($sql);
        if ($result2 ->num_rows>0){
            while($row2 = $result2->fetch_assoc()){
                $sql="SELECT * FROM question_db WHERE question_id='$q_id'";
                  $result3=$conn->query($sql);
                  if($result3->num_rows>0);
                  while($row3 = $result3->fetch_assoc()){
                    if($row3['Category']=="diz"){
                    echo $row3["value"].": ".$row2["value"]."<br>";
                    } else {};
                  };
            };
        };
        
    };
  };;
  $sql= "SELECT * FROM center_db WHERE patient_id = '$pt';";
    $result = $conn->query($sql);
    echo "Positive associated sympotms include: ";
    if ($result ->num_rows>0){
      while($row = $result->fetch_assoc()){
        $q_id = $row["question_id"];
        $a_id = $row["answer_id"];
          $sql ="SELECT * FROM answer_db WHERE answer_id = '$a_id' AND y_n = 'Yes';";
          $result2=$conn->query($sql);
          if ($result2 ->num_rows>0){
            while($row2 = $result2->fetch_assoc()){
              $sql="SELECT * FROM question_db WHERE question_id='$q_id'";
                $result3=$conn->query($sql);
                if($result3->num_rows>0);
                while($row3 = $result3->fetch_assoc()){
                  if($row3['Category']=="diz"){
              echo $row2["value"]."; ";
  };};};};};};
  echo "<BR>";
  $sql= "SELECT * FROM center_db WHERE patient_id = '$pt';";
    $result = $conn->query($sql);
    echo "Patient denies: ";
    if ($result ->num_rows>0){
      while($row = $result->fetch_assoc()){
        $q_id = $row["question_id"];
        $a_id = $row["answer_id"];
          $sql ="SELECT * FROM answer_db WHERE answer_id = '$a_id' AND y_n = 'No';";
          $result2=$conn->query($sql);
          if ($result2 ->num_rows>0){
            while($row2 = $result2->fetch_assoc()){
              $sql="SELECT * FROM question_db WHERE question_id='$q_id'";
                $result3=$conn->query($sql);
                if($result3->num_rows>0);
                while($row3 = $result3->fetch_assoc()){
                  if($row3['Category']=="diz"){
              echo $row2["value"]."; ";
  };};};};};};
  echo "<BR><BR>";

  
  $sql= "SELECT * FROM center_db WHERE answer_id = 'q2a1q2a1' AND patient_id = '$pt';";
  $result = $conn->query($sql);
  if ($result ->num_rows>0){
  echo "<b>[UTI]</b><br>";
  };
  $sql= "SELECT * FROM center_db WHERE patient_id = '$pt';";
  $result = $conn->query($sql);
  if ($result ->num_rows>0){
    while($row = $result->fetch_assoc()){
      $q_id = $row["question_id"];
      $a_id = $row["answer_id"];
        $sql ="SELECT * FROM answer_db WHERE answer_id = '$a_id' AND NOT y_n = 'Yes' AND NOT y_n = 'No';";
        $result2=$conn->query($sql);
        if ($result2 ->num_rows>0){
            while($row2 = $result2->fetch_assoc()){
                $sql="SELECT * FROM question_db WHERE question_id='$q_id'";
                  $result3=$conn->query($sql);
                  if($result3->num_rows>0);
                  while($row3 = $result3->fetch_assoc()){
                    if($row3['Category']=="uti"){
                    echo $row3["value"].": ".$row2["value"]."<br>";
                    } else {};
                  };
            };
        };
        
    };
  };;
  $sql= "SELECT * FROM center_db WHERE patient_id = '$pt';";
    $result = $conn->query($sql);
    echo "Positive associated sympotms include: ";
    if ($result ->num_rows>0){
      while($row = $result->fetch_assoc()){
        $q_id = $row["question_id"];
        $a_id = $row["answer_id"];
          $sql ="SELECT * FROM answer_db WHERE answer_id = '$a_id' AND y_n = 'Yes';";
          $result2=$conn->query($sql);
          if ($result2 ->num_rows>0){
            while($row2 = $result2->fetch_assoc()){
              $sql="SELECT * FROM question_db WHERE question_id='$q_id'";
                $result3=$conn->query($sql);
                if($result3->num_rows>0);
                while($row3 = $result3->fetch_assoc()){
                  if($row3['Category']=="uti"){
              echo $row2["value"]."; ";
  };};};};};};
  echo "<BR>";
  $sql= "SELECT * FROM center_db WHERE patient_id = '$pt';";
    $result = $conn->query($sql);
    echo "Patient denies: ";
    if ($result ->num_rows>0){
      while($row = $result->fetch_assoc()){
        $q_id = $row["question_id"];
        $a_id = $row["answer_id"];
          $sql ="SELECT * FROM answer_db WHERE answer_id = '$a_id' AND y_n = 'No';";
          $result2=$conn->query($sql);
          if ($result2 ->num_rows>0){
            while($row2 = $result2->fetch_assoc()){
              $sql="SELECT * FROM question_db WHERE question_id='$q_id'";
                $result3=$conn->query($sql);
                if($result3->num_rows>0);
                while($row3 = $result3->fetch_assoc()){
                  if($row3['Category']=="uti"){
              echo $row2["value"]."; ";
  };};};};};};
  
*/
  
  
 
?>
</div>
</body>
</html>