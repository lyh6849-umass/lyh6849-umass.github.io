<?php

  include 'db.php';


  $id = $_POST['delete_id'];
  echo $id;
  $sql = "DELETE FROM med_db WHERE id='$id';";
  if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error."<BR>";}

  

 ?>



<script type="text/javascript">
    $(document).ready(function(){
      $("#fuck").click(function(){
        var kk = $("#fuck").val();
          $.post ("medrecdel.php",{
  
            id: "what",
            please: please
            },
            function(data){ 

          });
          
            $("#test").load("medrecdel.php");
          });

  });


      
      
        
  </script>