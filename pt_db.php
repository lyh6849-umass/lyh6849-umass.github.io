<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link href = "pt_db.css" type = "text/css" rel="stylesheet">
</head>
<body>
<div>
<h1> Your answers are currently being reviewd by Dr. Lee. <br> He will be with you shortly.</h2>
<?php
date_default_timezone_set("America/New_York");
$time= date('m_d_y_h_i_s');


 


$user = 'root';
$password = 'root';
$dbname = 'mydb';
$host = 'localhost';
$port = 3306;
$conn = new mysqli($host, $user, $password, $dbname);
if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    exit();
  }



$sql= "SELECT id FROM question;";
$result = $conn->query($sql);
if($result->num_rows>0){
  while($row = $result->fetch_assoc()){
    $id = $row["id"];
    if(isset($_POST[$id])){
    $ans = $_POST[$id];
    $sql .="INSERT INTO patient_questions_answers (patient_id,question_id,answer_id) VALUES ('$time','$id','$ans');";
    } else {};
    };
    $sql .="INSERT INTO patient ( id ) VALUES ('$time');";
  if ($conn->multi_query($sql) === TRUE) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
  /*
  if ($conn -> multi_query($sql)) {
    do {
      // Store first result set
      /*https://www.w3schools.com/php/func_mysqli_multi_query.asp
      
      if ($result = $conn -> store_result()) {
        while ($row = $result -> fetch_row()) {
          printf("%s\n", $row[0]);
        }
      $result -> free_result();
      }
      // if there are more result-sets, the print a divider
      if ($conn -> more_results()) {
        printf("-------------\n");
      }
      //Prepare next result set
    } while ($conn -> next_result());
  } 
    $conn -> close();
    */
};
 /*
      $i=0;
      $sql= "INSERT INTO patient_questions_answers (patient_id,question_id,answer_id) VALUES ('$time','-','-');";
    while ($i<count($question_id)){
      if($i==0)
      {
        if(isset($_POST[$question_id[$i]]))
        {
          $ans = $_POST[$question_id[$i]];
          $que = $question_id[$i];
          $sql.= "INSERT INTO patient_questions_answers (patient_id,question_id,answer_id) VALUES ('$time','$que','$ans');";
        } 
        else { }; 
      }
      else
      {
        if(isset($_POST[$question_id[$i]]))
        {
          $ans = $_POST[$question_id[$i]];
          $que = $question_id[$i];
          $sql.= "INSERT INTO patient_questions_answers (patient_id,question_id,answer_id) VALUES ('$time','$que','$ans');";
        } 
        else { }; 
      };
              
        $i++;
      }
 
      if (!$conn->multi_query($sql)) {
        echo "Multi query failed: (" . $conn->errno . ") " . $conn->error;
    }
 
    do {
        if ($res = $conn->store_result()) {
            var_dump($res->fetch_all(MYSQLI_ASSOC));
            $res->free();
        }
    } while ($conn->more_results() && $conn->next_result());
    

 /*
 ( WHERE T='$d' AND q1='$q1'(
  T,
  q1, 
  q2,   
  q3a1q1,
  q3a1q2,
  q3a1q3,
  q3a1q4,
  q3a1q5,
  q3a1q6,
  q3a1q7,
  q3a1q8,
  q3a1q9,
  q3a1q10,
  q3a1q11,
  q3a1q12,
  q3a1q13,
  q3a1q14,
  q2a1q1a1q1,
  q2a1q1a1q2,
  q2a1q1a1q3,
  q2a1q1a1q4,
  q2a1q1a1q5,
  q2a1q1a1q6,
  q2a1q1a1q7,
  q2a1q1a1q8,
  q2a1q1a1q9,
  q2a1q1a1q10,
  q2a1q1a1q11,
  q2a1q1a1q12,
  q2a1q1a1q13,
  q2a1q1a1q14,
  q2a1q1a1q15,
  q2a1q1a1q16,
  q2a1q1a1q17,
  q2a1q1a1q18,
  q2a1q1a1q19,
  q2a1q1a1q20,
  q2a1q1a1q21,
  q2a1q1a1q22,
  q2a1q1a1q1a1q1,
  q2a1q1a1q1a1q2,
  q2a1q1a1q1a1q3,
  q2a1q1a1q2a1q1,
  q2a1q1a1q2a1q2,
  q2a1q1a1q2a1q3,
  q2a1q1a1q3a1q1,
  q2a1q1a1q3a1q2,
  q2a1q1a1q3a1q3,
  q2a1q1a1q4a1q1,
  q2a1q1a1q4a1q2,
  q2a1q1a1q4a1q3,
  q2a1q1a1q5a1q1,
  q2a1q1a1q5a1q2,
  q2a1q1a1q5a1q3,
  q2a1q1a1q6a1q1,
  q2a1q1a1q6a1q2,
  q2a1q1a1q6a1q3,
  q2a1q1a1q7a1q1,
  q2a1q1a1q7a1q2,
  q2a1q1a1q7a1q3,
  q2a1q1a1q8a1q1,
  q2a1q1a1q8a1q2,
  q2a1q1a1q8a1q3,
  q2a1q1a1q9a1q1,
  q2a1q1a1q9a1q2,
  q2a1q1a1q9a1q3,
  q2a1q1a1q10a1q1,
  q2a1q1a1q10a1q2,
  q2a1q1a1q10a1q3,
  q2a1q1a1q11a1q1,
  q2a1q1a1q11a1q2,
  q2a1q1a1q11a1q3,
  q2a1q1a1q12a1q1,
  q2a1q1a1q12a1q2,
  q2a1q1a1q12a1q3,
  q2a1q1a1q13a1q1,
  q2a1q1a1q13a1q2,
  q2a1q1a1q13a1q3,
  q2a1q1a1q14a1q1,
  q2a1q1a1q14a1q2,
  q2a1q1a1q14a1q3,
  q2a1q1a1q15a1q1,
  q2a1q1a1q15a1q2,
  q2a1q1a1q15a1q3,
  q2a1q1a1q16a1q1,
  q2a1q1a1q16a1q2,
  q2a1q1a1q16a1q3,
  q2a1q1a1q17a1q1,
  q2a1q1a1q17a1q2,
  q2a1q1a1q17a1q3,
  q2a1q1a1q18a1q1,
  q2a1q1a1q18a1q2,
  q2a1q1a1q18a1q3,
  q2a1q1a1q19a1q1,
  q2a1q1a1q19a1q2,
  q2a1q1a1q19a1q3,
  q2a1q1a1q20a1q1,
  q2a1q1a1q20a1q2,
  q2a1q1a1q20a1q3,
  q2a1q1a1q21a1q1,
  q2a1q1a1q21a1q2,
  q2a1q1a1q21a1q3,
  q2a1q1a1q22a1q1,
  q2a1q1a1q22a1q2,
  q2a1q1a1q22a1q3
 
  ) VALUES (
    '$time',
    '$q1',
    '$q2', 
    '$q3a1q1',
    '$q3a1q2',
    '$q3a1q3',
    '$q3a1q4',
    '$q3a1q5',
    '$q3a1q6',
    '$q3a1q7',
    '$q3a1q8',
    '$q3a1q9',
    '$q3a1q10',
    '$q3a1q11',
    '$q3a1q12',
    '$q3a1q13',
    '$q3a1q14', 
    '$q2a1q1a1q1',
    '$q2a1q1a1q2',
    '$q2a1q1a1q3',
    '$q2a1q1a1q4',
    '$q2a1q1a1q5',
    '$q2a1q1a1q6',
    '$q2a1q1a1q7',
    '$q2a1q1a1q8',
    '$q2a1q1a1q9',
    '$q2a1q1a1q10',
    '$q2a1q1a1q11',
    '$q2a1q1a1q12',
    '$q2a1q1a1q13',
    '$q2a1q1a1q14',
    '$q2a1q1a1q15',
    '$q2a1q1a1q16',
    '$q2a1q1a1q17',
    '$q2a1q1a1q18',
    '$q2a1q1a1q19',
    '$q2a1q1a1q20',
    '$q2a1q1a1q21',
    '$q2a1q1a1q22',
    '$q2a1q1a1q1a1q1',
    '$q2a1q1a1q1a1q2',
    '$q2a1q1a1q1a1q3',
    '$q2a1q1a1q2a1q1',
    '$q2a1q1a1q2a1q2',
    '$q2a1q1a1q2a1q3',
    '$q2a1q1a1q3a1q1',
    '$q2a1q1a1q3a1q2',
    '$q2a1q1a1q3a1q3',
    '$q2a1q1a1q4a1q1',
    '$q2a1q1a1q4a1q2',
    '$q2a1q1a1q4a1q3',
    '$q2a1q1a1q5a1q1',
    '$q2a1q1a1q5a1q2',
    '$q2a1q1a1q5a1q3',
    '$q2a1q1a1q6a1q1',
    '$q2a1q1a1q6a1q2',
    '$q2a1q1a1q6a1q3',
    '$q2a1q1a1q7a1q1',
    '$q2a1q1a1q7a1q2',
    '$q2a1q1a1q7a1q3',
    '$q2a1q1a1q8a1q1',
    '$q2a1q1a1q8a1q2',
    '$q2a1q1a1q8a1q3',
    '$q2a1q1a1q9a1q1',
    '$q2a1q1a1q9a1q2',
    '$q2a1q1a1q9a1q3',
    '$q2a1q1a1q10a1q1',
    '$q2a1q1a1q10a1q2',
    '$q2a1q1a1q10a1q3',
    '$q2a1q1a1q11a1q1',
    '$q2a1q1a1q11a1q2',
    '$q2a1q1a1q11a1q3',
    '$q2a1q1a1q12a1q1',
    '$q2a1q1a1q12a1q2',
    '$q2a1q1a1q12a1q3',
    '$q2a1q1a1q13a1q1',
    '$q2a1q1a1q13a1q2',
    '$q2a1q1a1q13a1q3',
    '$q2a1q1a1q14a1q1',
    '$q2a1q1a1q14a1q2',
    '$q2a1q1a1q14a1q3',
    '$q2a1q1a1q15a1q1',
    '$q2a1q1a1q15a1q2',
    '$q2a1q1a1q15a1q3',
    '$q2a1q1a1q16a1q1',
    '$q2a1q1a1q16a1q2',
    '$q2a1q1a1q16a1q3',
    '$q2a1q1a1q17a1q1',
    '$q2a1q1a1q17a1q2',
    '$q2a1q1a1q17a1q3',
    '$q2a1q1a1q18a1q1',
    '$q2a1q1a1q18a1q2',
    '$q2a1q1a1q18a1q3',
    '$q2a1q1a1q19a1q1',
    '$q2a1q1a1q19a1q2',
    '$q2a1q1a1q19a1q3',
    '$q2a1q1a1q20a1q1',
    '$q2a1q1a1q20a1q2',
    '$q2a1q1a1q20a1q3',
    '$q2a1q1a1q21a1q1',
    '$q2a1q1a1q21a1q2',
    '$q2a1q1a1q21a1q3',
    '$q2a1q1a1q22a1q1',
    '$q2a1q1a1q22a1q2',
    '$q2a1q1a1q22a1q3'
    )";
 
if ($link->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $link->error;
}
 
echo $input;
 
*/
?>
</div>
 
</body>
</html>
 
 

