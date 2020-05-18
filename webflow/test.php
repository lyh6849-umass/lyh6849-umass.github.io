<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Sun Apr 26 2020 14:51:32 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="5ea48705af4837295335b172" data-wf-site="5ea24fa4777920d17bd4218b">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<div id="success">success</div>

<script>
$(document).ready(function(){
    $("#success").load("load-comment.php");
})
</script>
<?php
include 'db.php';

  $sql = "SELECT * FROM med_db WHERE recon='Discontinued' LIMIT 5;";
  $r=$conn->query($sql);
  
  if ($r->num_rows>0){
    echo "[Medication Reconcile]<br><table><th>Medication</th><th>Direction</th><th>Reconcile</th><th>Edit</th></tr>";
    while($row=$r->fetch_assoc()){
      $m = $row['med'];
      $d = $row['dose'];
      $id = $row['id'];
      $recon = $row['recon'];
      if ($recon == "Continued"){
        echo "<tr><td>".$m."</td><td>".$d."</td><td><span style=\"color:green;\">".$recon."</span></td><td></td></tr>";
      } elseif ($recon == "Discontinued" || $recon =="Patient is taking differently") {
        echo "<tr id=\"tr".$id."\"><td>".$m."</td><td>".$d."</td><td><span style=\"color:red;\">".$recon."</span></td><td><button id=\"del".$id."\" value=\"nowwhat".$id."\" onclick=\"deleteAjax(".$id.")\")>Del</button></td></tr>";
      } elseif ($recon == ""){
        echo "<tr><td>".$m."</td><td>".$d."</td><td><span style=\"color:blue;\">Patient didn't answer</span></td></tr>";
      };
      
    }

    echo "</table>";
    $sql = "SELECT * FROM med_add_db;";
    $r=$conn->query($sql);
    if($r->num_rows>0){
      while($row=$r->fetch_assoc()){
        if($row['momed']=="Yes"){
          echo "<span style=\"color:red;\">Some mediations are missing in the record!</span>";
        } else{};
      }
    }echo"<br><br><br>";
  }
?>


<script type="text/javascript">
    function deleteAjax(id){
        $.post('suggestions.php',{delete_id:id},function(data){
            $('#tr'+id).hide('slow');
            $("#test").html(data);
            });
        };
</script>


<!--
  <script type='text/javascript'>
    $(docment).ready(function(){
        $("#del").click(function(){
            var ka = 'tsettest';
                $.post("suggestions.php", {
                    suggestion: ka

                }, function(data, status){
                    $("#test").html(data);
                });

        });


    });

  </script>-->
</head>
<body>

<div id="test">
    <p>Test P</p>
</div>

<button id="btnn">Click to change</button>
</body>
</html>


