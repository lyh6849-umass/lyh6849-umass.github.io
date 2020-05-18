<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<link href = "css.css" type = "text/css" rel="stylesheet">

</head>
<body>
  <div id="test"></div>

<?php include 'db.php';
$qn = $_POST['q1'];
echo "Questionnaire ID: ".$qn."<BR><BR>";?>
<div id="medrec"></div>
<div id="success"></div>
<script>
var qn = '<?php echo $qn;?>';
  $(document).ready(function(){
    $.post("medrec.php",{qn:qn},function(data){
            $("#success").html(data);
            });
    $("#medrec").load("medrec.php");
  });
</script>

<script type="text/javascript">
    function deleteAjax(id){
        $.post('suggestions.php',{delete_id:id},function(data){
            $('#tr'+id).hide('slow');
            $("#test").html(data);
            });
        };
</script>






<?php



  /*$sql= "SELECT * FROM center_db WHERE answer_id = 'q2a1q1a1' AND patient_id = '$pt';";
  $result = $conn->query($sql);
  if ($result ->num_rows>0){
  echo "<b>[Upper respiratory infection]</b><br>";
  };*/
/*
  $sql = "SELECT * FROM med_db WHERE qn = '$qn';";
  $r=$conn->query($sql);
  if ($r->num_rows>0){
    echo "[Medication Reconcile]<br><table><th>Medication</th><th>Direction</th><th>Reconcile</th></tr>";
    while($row=$r->fetch_assoc()){
      $m = $row['med'];
      $d = $row['dose'];
      $id = $row['id'];
      $recon = $row['recon'];
      if ($recon == "Continued"){
        echo "<tr><td>".$m."</td><td>".$d."</td><td><span style=\"color:green;\">".$recon."</span></td></tr>";
      } elseif ($recon == "Discontinued" || $recon =="Patient is taking differently") {
        echo "<tr><td>".$m."</td><td>".$d."</td><td><span style=\"color:red;\">".$recon."</span></td></tr>";
      } elseif ($recon == ""){
        echo "<tr><td>".$m."</td><td>".$d."</td><td><span style=\"color:blue;\">Patient didn't answer</span></td></tr>";
      };
      
    }

    echo "</table>";
    $sql = "SELECT * FROM med_add_db WHERE qn='$qn';";
    $r=$conn->query($sql);
    if($r->num_rows>0){
      while($row=$r->fetch_assoc()){
        if($row['momed']=="Yes"){
          echo "<span style=\"color:red;\">Some mediations are missing in the record!</span>";
        } else{};
      }
    }echo"<br><br><br>";
  }
*/
  
      
      


  $sql = "SELECT * FROM pt_cc_db WHERE pt_id ='$qn';";
  $r2=$conn->query($sql);
  if ($r2->num_rows>0){
    while($row2=$r2->fetch_assoc()){
      echo "<br>[".$row2['visit_diagnosis']."]<br><div id=\"".$row2['cc_id']."\">";
      $i = $row2['cc_id'];
        $sql = "SELECT * FROM center_db WHERE patient_id = '$qn' AND question_cc = '$i';";
          $r3= $conn->query($sql);
          if($r3->num_rows>0){
            while($row3=$r3->fetch_assoc()){
              $q_n = ucwords($row3['q_note']);
              $av = ucwords($row3['answer_value']);
              
              $av = trim($av,-1);
              if($av == 'Start'){} 
              elseif ($av == 'Next'){} 
              else {
                if ($q_n==""){
                  echo $row3['question_value'].": ".$av."<br>";}
                 elseif ($q_n!==""){
                  echo $q_n.": ".$av."<br>";};
                 
              } 
            }
    }

    echo "</div><button onclick=\"copyTo('#".$row2['cc_id']."')\">Copy</button><br><br>";

  }

}

?>

<br>
<div onclick="copyTo('#msg')" id="msg">Hello, this is Dr. Lee. Our staff will inform you the PIN code on the phone. Please click on the link once you know your PIN number. http://pghd.herokuapp.com/webflow/pt1.php</div>
<button onclick="copyTo('#msg')">Copy</button>
<script>
function copyTo(element) {
  var $temp = $("<textarea>");
  var brRegex = /<br\s*[\/]?>/gi;
  $("body").append($temp);
  $temp.val($(element).html().replace(brRegex, "\r\n")).select();
  document.execCommand("copy");
  $temp.remove();
}
</script>
</div>
</body>
</html>