<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<link href = "css.css" type = "text/css" rel="stylesheet">

</head>
<body>
  <div id="test">test here</div>
  <button id="fuck" value="fuckx2">button</button>
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
        // create an array of DM index
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
              echo $on.". ".$row['med']." ".$row['dose']."<br>";
              $on++;
            }

          }
        }
        $i= $_POST['medication'];
        $n = substr_count($i,"\n");
        $lines=explode("\n", $i);
        $hban=0;
        for ($j=0;$j<=$n;$j++){
          $jj=$lines[$j];
            //strings with medication name
          if(0 < count(array_intersect(array_map('strtolower', explode(' ', $jj)), array_map('strtolower',$array1))))
          {
            if(strpos($jj, "Rfl:") !== false){
              if(strpos($jj, "syringe") == false){
                echo substr(strstr($jj,', Disp:',true),3)."yeah<br>";
          }}}
          //strings with HBA1C
          if(strpos($jj, "HGBA1C") !== false){
            $arr1 = str_split($jj);
            //print_r ($arr1);
            //echo "<br>";
            $nn = strlen($jj);
            $ni=1;
            for($i=0;$i<$nn;$i++){
              if (is_numeric($arr1[$i]) && $ni==1){
                  $ni++;
              } elseif(is_numeric($arr1[$i])&&$ni==2){
                $hba=$arr1[$i];
                $ni=$ni+1;
              } elseif(is_numeric($arr1[$i])&&$ni==3){
                $hba=$hba*10+$arr1[$i];
                //echo "hba1c is: ".$hba."<br>";
              } elseif($arr1[$i]=="."&&$ni==3){
                $ni=$ni+1;
              } elseif(is_numeric($arr1[$i])&&$ni==4){
                $hba=$hba+0.1*$arr1[$i];
                $ni++;
                $hban++;
                //echo "hba1c is: ".$hba."<br>";
              } elseif($arr1[$i]==" "&&$ni=5){
                $ni++;
              } elseif(is_numeric($arr1[$i])&&$ni==6){
                $hbam = $arr1[$i];
                $ni++;
              } elseif(is_numeric($arr1[$i])&&$ni==7){
                $hbam = $hbam*10 + $arr1[$i];
                $ni++;
                if($hbam<10){
                  $hbam="0".$hbam;
                } else {};
                //echo "Month is: ".$hbam."<br>";
              } elseif(is_numeric($arr1[$i])&&$ni==8){
                $hbad = $arr1[$i];
                $ni++;
              } elseif(is_numeric($arr1[$i])&&$ni==9){
                $hbad = $hbad*10 + $arr1[$i];
                $ni++;
                if($hbad<10){
                  $hbad="0".$hbad;
                } else {};
                //echo "Date is: ".$hbad."<br>";
              } elseif(is_numeric($arr1[$i])&&$ni==10){
                $hbay = $arr1[$i];
                $ni++;
              } elseif(is_numeric($arr1[$i])&&$ni==11){
                $hbay = $hbay*10 + $arr1[$i];
                $ni++;
              } elseif(is_numeric($arr1[$i])&&$ni==12){
                $hbay = $hbay*10 + $arr1[$i];
                $ni++;
              } elseif(is_numeric($arr1[$i])&&$ni==13){
                $hbay = $hbay*10 + $arr1[$i];
                $ni++;
                //echo "Year is: ".$hbay."<br>";
              }
                
                //echo $arr1[$i]."=".$ni."<br>";
            }
            $date = $hbay."-".$hbam."-".$hbad;
            if ($hban==0){
              $sql = "INSERT INTO dm_a1c (qn,prox) VALUES('$qn','$hban');";
              if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error;}   
            } else {
              $sql = "INSERT INTO dm_a1c (qn,prox,a1c,date) VALUES('$qn','$hban','$hba','$date');";
              if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error;}    
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
            } */
        
          }
          /*
                */
        }






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