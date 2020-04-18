<!doctype html>
<html lang="en">
  <head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/6507119a2f.js" crossorigin="anonymous"></script>
        <link href = "css.css" type = "text/css" rel="stylesheet">

  </head>

  <body>

  <img class="bg" src="../img/umass3.png">
  <p class="c1"> Fitchburg Adult Medicine</p>

  <form class="ma_form" method="POST" action="ma_2.php">
  <div class="q1 c2" style="display:flex;">
        <div class="b1ap"> 
        <h1>APPOINTMENT TIME</h1>
            <div style ="display:inline; text-align:center;">
            <label><input class="q1a1" style="display:none;" type="radio" name="q1" value="8:30"><span class = " q1a1">08:30</span></label>
            <label><input class="q1a2" style="display:none;" type="radio" name="q1" value="8:45"><span class = " q1a2 ">08:45</span></label>
            <label><input class="q1a3" style="display:none;" type="radio" name="q1" value="9:00"><span class = " q1a3 ">09:00</span></label>
            <label><input class="q1a4" style="display:none;" type="radio" name="q1" value="9:15"><span class = " q1a4">09:15</span></label>
            <label><input class="q1a5" style="display:none;" type="radio" name="q1" value="9:30"><span class = " q1a5">09:30</span></label>
            <label><input class="q1a6" style="display:none;" type="radio" name="q1" value="9:45"><span class = " q1a6">09:45</span></label>
            <label><input class="q1a7" style="display:none;" type="radio" name="q1" value="10:00"><span class = " q1a7">10:00</span></label>
            <label><input class="q1a8" style="display:none;" type="radio" name="q1" value="10:15"><span class = " q1a8">10:15</span></label>
            <label><input class="q1a9" style="display:none;" type="radio" name="q1" value="10:30"><span class = " q1a9">10:30</span></label>
            <label><input class="q1a10" style="display:none;" type="radio" name="q1" value="10:45"><span class = " q1a10">10:45</span></label>
            <label><input class="q1a11" style="display:none;" type="radio" name="q1" value="11:00"><span class = " q1a11">11:00</span></label>
            <label><input class="q1a12" style="display:none;" type="radio" name="q1" value="11:15"><span class = " q1a12">11:15</span></label>
            <label><input class="q1a13" style="display:none;" type="radio" name="q1" value="11:30"><span class = " q1a13">11:30</span></label>
            <label><input class="q1a14" style="display:none;" type="radio" name="q1" value="11:45"><span class = " q1a14">11:45</span></label>
            <label><input class="q1a15" style="display:none;" type="radio" name="q1" value="12:00"><span class = " q1a15">12:00</span></label>
            <label><input class="q1a16" style="display:none;" type="radio" name="q1" value="12:15"><span class = " q1a16">12:15</span></label>
            <label><input class="q1a17" style="display:none;" type="radio" name="q1" value="12:30"><span class = " q1a17">12:30</span></label>
            <label><input class="q1a18" style="display:none;" type="radio" name="q1" value="2:00"><span class = " q1a18">02:00</span></label>
            <label><input class="q1a19" style="display:none;" type="radio" name="q1" value="2:15"><span class = " q1a19">02:15</span></label>
            <label><input class="q1a20" style="display:none;" type="radio" name="q1" value="2:30"><span class = " q1a20">02:30</span></label>
            <label><input class="q1a21" style="display:none;" type="radio" name="q1" value="2:45"><span class = " q1a21">02:45</span></label>
            <label><input class="q1a22" style="display:none;" type="radio" name="q1" value="3:00"><span class = " q1a22">03:00</span></label>
            <label><input class="q1a23" style="display:none;" type="radio" name="q1" value="3:15"><span class = " q1a23">03:15</span></label>
            <label><input class="q1a24" style="display:none;" type="radio" name="q1" value="3:30"><span class = " q1a24">03:30</span></label>
            <label><input class="q1a25" style="display:none;" type="radio" name="q1" value="3:45"><span class = " q1a25">03:45</span></label>
            <label><input class="q1a26" style="display:none;" type="radio" name="q1" value="4:00"><span class = " q1a26">04:00</span></label>
            <label><input class="q1a27" style="display:none;" type="radio" name="q1" value="4:15"><span class = " q1a27">04:15</span></label>
            <label><input class="q1a28" style="display:none;" type="radio" name="q1" value=""><span class = " q1a28">-- : --</span></label>
              </div>
        </div></div>


    <div class="q5 c2" style="display:flex;">
      <div class="b1">
        <h1>VISIT DIAGNOSIS</h1>
          <div class="input_list d-flex flex-column align-items-center justify-content-center">
            <input class="textinput" list="list2" type="text" id="transcript" name ="q2_1" style="display:inline-block;" placeholder = "Symptoms & Signs"><br>
          </div>
          <i class="plus fas fa-plus fa-3x"></i><br>
          <label><input type="submit" style="display:none;"><span class="ma_1_submit">SUBMIT</span><label>
  
      </div>
    </div>
      <script>   
        var i = 2;
          $(document).ready(()=>{
          $(".plus").on('click',()=>{
            
            var html1 = '<input class=\"textinput\" list=\"list2\" type=\"text\" id=\"transcript\" name =\"q2_';
            var html2 = '\" style=\"display:inline-block;\" placeholder = \"Symptoms & Signs\"><br>';
            $('.input_list').append(html1+i+html2);
            i++;
          });});
      </script>


          
     
      </form>
     

               



<div class="" style="display:none;">
<?php
  $user = 'b77225dc29feba';
  $password = '52bed046';
  $dbname = 'heroku_bf6133839e3e3aa';
  $host = 'us-cdbr-iron-east-04.cleardb.net';
  $port = 3306;
  $conn = new mysqli($host, $user, $password, $dbname);
  if ($conn ->connect_errno) {
      echo "Failed to connect to MySQL: " . $conn ->connect_error;
      exit();
    } else {echo "";};
  date_default_timezone_set("America/New_York");
  $time= date('m_d_y_h_i_s');

  $sql = "SELECT visit_diagnosis FROM cc_db;";
  $r6=$conn->query($sql);
  if($r6->num_rows>0){
    echo "<datalist id=\"list2\">";
    while ($row6=$r6->fetch_assoc()){
      echo "<option value=\"".$row6['visit_diagnosis']."\" style=\"display:none;\"><option>";
    }
    echo "</datalist>";
  }



  $conn -> close();
?>
</div>

</form>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src='jquery.js'></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<?php
  for ($i=1;$i<=28;$i++){
          echo "<script>$(document).ready(()=>{ 
              $(\".q1a".$i."\").on('click',()=>{
                  $(\"html, body\").animate({scrollTop: $(\".q1\").offset().top + $(\".q1\").height()}, 250);
              });});</script>";
      };
?>

  

       </body>
</html>



