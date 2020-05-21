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

  
      
////find cc_id for dm
$sql = "SELECT q_id FROM cc_db WHERE visit_diagnosis='Diabetes Follow Up';";
$r=$conn->query($sql);
while($row=$r->fetch_assoc()){
  $dmid=$row['q_id'];
}     


  $sql = "SELECT * FROM pt_cc_db WHERE pt_id ='$qn';";
  $r2=$conn->query($sql);
  if ($r2->num_rows>0){
    while($row2=$r2->fetch_assoc()){
      echo "<br>[".$row2['visit_diagnosis']."]<br><div id=\"".$row2['cc_id']."\">";
      if ($row2['cc_id']==$dmid){
        ////1. DM regimen
        // create an array of DM index
        $finger="21fwe";
        $hypog="1";
        $hypogy="A1";
        $hypogn="b1";
        $hypogs="c1";
        $hypogsy="d1";
        $hypogsn="ewf1";
        
        $hypog=$dmid."q1a1q1a1q2";
        $finger=$dmid."q1a1q1";
        $fingery=$finger."a1";
        $fingern=$finger."a2";
        $hypogy=$hypog."a1";
        $hypogn=$hypog."a2";
        $hypogs=$hypog."a1q1";
        $hypogsy=$hypogs."a1";
        $hypogsn=$hypogs."a2";
        if(isset($_POST[$hypog])){$hypog=$_POST[$hypog];}
        if(isset($_POST[$hypogs])){$hypogs=$_POST[$hypogs];}
        if(isset($_POST[$finger])){$finger=$_POST[$finger];}

        
        

        $hb2nd="0";

        $array1 = array();
        $sql = "SELECT dm_med FROM dm_med_db;";
        $r=$conn->query($sql);
        if($r->num_rows>0){
          while($row=$r->fetch_assoc()){
            $array1[]=$row['dm_med'];
          }}
        //select med from the med_db, create an array with 'med'
        $sql = "SELECT med, dose from med_db;";
        $wn=0;
        $on=1;
        $r=$conn->query($sql);
        if($r->num_rows>0){
          while($row=$r->fetch_assoc()){
            if(0 < count(array_intersect(array_map('strtolower', explode(' ', $row['med'])), array_map('strtolower',$array1)))){
              if($wn==0){
                echo "Current diabetes regimen: <br>";
                $wn++;
              };
              $rr=$row['med'];
              if(strpos(strtolower($rr), "syringe") !== false){

              } else {
                echo $on.". ".$row['med']." ".$row['dose']."<br>";
                $on++;  
              }
            }
          }
        } echo "<br>";
        ////HbA1c review
          $sql = "SELECT * FROM dm_a1c WHERE qn = '$qn';";
          $r=$conn->query($sql);
          if($r->num_rows>0){
            while($row=$r->fetch_assoc()){
              if($row['prox']==0){

              } elseif($row['prox']==1) {
                $date1=date_create($row['date']);
                $date2= date('Y-m-d');
                $date2= date_create($date2);
                $diff=date_diff($date1,$date2);
                echo "The lastest HbA1c checked ";   
                if($diff->format('%y')==0){
                  if($diff->format('%m')>1){
                    echo $diff->format('%m months');
                  } else {
                    echo $diff->format('%m month');
                  }
                } else {
                  echo $diff->format('%y year(s)/%m month(s)');
                };
                echo " (".$row['date'].") is ".$row['a1c']."%.<br>";
                $hb1st=$row['a1c'];
              } else {
                echo "-".$row['date'].": ".$row['a1c']."%<br>";
                if($row['prox']==2){
                  $hb2nd =$row['a1c'];
                }
              }
 

        ////3. Hba1c repeat
              if($r->num_rows==1){
                while($row=$r->fetch_assoc()){
                  if($row['prox']==1){
                    if($row['a1c']<7){
                      echo "";
                    } else {
                      echo "Due to unsatisfactory HbA1c, will recheck the HbA1c 3 months after change in the DM management regimen.<br>";
                    }
                  }
                }
              } elseif($r->num_rows>1){
                $hbg=$hb1st - $hb2nd;
              
              }
              
            }
            ////finger stick + hypoglycemia?
            if($hypogs==$hypogsy){
              echo "<span style=\"color:red;\">Pt reports symptomatic hypoglycemia episode(s).<br></span>";
            } elseif($hypogs==$hypogsn){
              echo "Pt reports asymptomatic hypoglycemia episode(s).<br>";
            } elseif($hypog==$hypogn){
              echo "Pt checks finger stick regularly, denies hypoglycemic episode(s).<br>";
            } elseif($finger=$fingern){
              echo "<span style=\"color:red;\">Pt doesn't check finger stick regularly.<br></span>";
            };
            //////Plan starts here
            echo "Plan: <br>";
            ////a1c repeat
            if($hypog==$hypogy){
              echo "";
            } elseif($hb1st<=7 && $hbg >-0.5 && $hbg <0){
              echo "Continue current treatment.<br>Repeat HbA1c in 6 months.<br>";
            } elseif($hb1st<=7){
              if($hbg==0.5 || $hbg<-0.5 ||$hbg>=0){
                echo "Continue current treatment with repeat HbA1c in 4 months.<br>";
              }
            } elseif($hb1st>7){
              echo "<br>Repeat HbA1c in *** months.<br>";
            }
            

            if($finger=$fingern){
              echo "Recommended patient to check fasting finger stick periodically to prevent hypoglycemia.<br>";
            };
            
          }

        

        /*
            if($hban==1){
              $hba1=$hba;
              $date=$hbay."-".$hbam."-".$hbad;
              $date1=date_create($date);
              $date1st = $date1;
              $date2= date('Y-m-d');
              $date2= date_create($date2);
              $diff=date_diff($date1,$date2);
              if($diff->format('%y')==0){
                $hbaint1 = "The lastest HbA1c checked ".$diff->format('%m month(s)/%d day(s)')." ago is ".$hba1."% ";
              } else {
                $hbaint1 =  "The lastest HbA1c checked ".$diff->format('%y year(s)/%m month(s)/%d day(s)')." ago is ".$hba1."% ";
              }
            } elseif($hban==2){
              $hba2=$hba;
              $hbag=$hba2-$hba1;
              $date=$hbay."-".$hbam."-".$hbad;
              $date1=date_create($date);
              $date2nd=$date1;
              $date2= date('Y-m-d');
              $date2= date_create($date2);
              $diff=date_diff($date1st,$date2nd);
              if($hbag>0){
                if($diff->format('%y')==0){
                  $hbaint2 =  "which has improved by ".$hbag."% from HbA1c(".$hba2."%) checked with ".$diff->format('%m month(s)/%d day(s)')." interval<br>";
                } else {
                  $hbaint2 =  "which has improved by ".$hbag."% from HbA1c(".$hba2."%) checked with ".$diff->format('%y year(s)/%m month(s)/%d day(s)')." interval<br>";
                }
              } elseif($hbag==0){
                if($diff->format('%y')==0){
                  $hbaint2 =  "which equals to the HbA1c checked with ".$diff->format('%m month(s)/%d day(s)')." interval<br>";
                } else {
                  $hbaint2 =  "which equals to the HbA1c checked with ".$diff->format('%y year(s)/%m month(s)/%d day(s)')." interval<br>";
                }
              } elseif($hbag<0){
                if($diff->format('%y')==0){
                  $hbaint2 =  "which has progressed by ".$hbag."% from HbA1c(".$hba2."%) checked with ".$diff->format('%m month(s)/%d day(s)')." interval<br>";
                } else {
                  $hbaint2 =  "which has progressed by ".$hbag."% from HbA1c(".$hba2."%) checked with ".$diff->format('%y year(s)/%m month(s)/%d day(s)')." interval<br>";
                }
              }
            } 
        
          }
          
                
        }*/






      } else {
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
      }








    echo "</div><button onclick=\"copyTo('#".$row2['cc_id']."')\">Copy</button><br><br>";

  }

}




?>

<br>
<div onclick="copyTo('#msg')" id="msg" style="cursor: pointer;">Hello, this is Dr. Lee. Our staff will inform you the PIN code on the phone. Please click on the link once you know your PIN number. http://pghd.herokuapp.com/webflow/pt1.php</div>
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