<?php

  include 'db.php';


  $id = $_POST['delete_id'];
  echo $id;
  $sql = "DELETE FROM med_db WHERE id='$id';";
  if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error."<BR>";}

  

 ?>