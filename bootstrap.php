<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Sun Apr 26 2020 14:51:32 GMT+0000 (Coordinated Universal Time)  -->
<?php
date_default_timezone_set("America/New_York");
$time= date('m_d_y');
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
 ?>
<html data-wf-page="5ea48705af4837295335b172" data-wf-site="5ea24fa4777920d17bd4218b">
<head>
  <meta charset="utf-8">
  <title>MA1</title>
  <meta content="MA1" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="normalize.css" rel="stylesheet" type="text/css">
  <link href="webflow.css" rel="stylesheet" type="text/css">
  <link href="css/yonghyun-lees-five-star-project.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>  <script type="text/javascript">WebFont.load({  google: {    families: ["Droid Sans:400,700"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
  <script>
    $(document).ready(function() {
     /* $("#btnn").click(function() {
        $.get("load-comment.php", function(data,status){
          $("#test").html(data);
          alert(status);});
          
        
      });*/
      $("input").keyup(function(){
        var name= $("input").val();
        $.post("suggestions.php",{
          suggestion: name 
        }, function (data, status){
          $("#test").html(data);  
        });
      })
    });
  </script>
</head>
<body>
<?php
$sql = "SELECT q_id from cc_db;";
$r= $conn->query($sql);
if($r->num_rows>0){
  while($row=$r->fetch_assoc()){
  }
} else {};
?>
<div id="test">
    <p>Test P</p>
</div>
<input type="text" nema="name">
<button id="btnn">Click to change</button>
</div>
<form name="diff" method="POST" action="bootstrap.php">
<textarea name="medication" rows = "10" cols="100"></textarea>
<textarea style="width:80vw; height:40vh;" name="labs"></textarea>
<input type="submit">
</form>
 <?php
/*
$k = $_POST['labs'];
echo $k."<br>";
$n = substr_count($k,"\n");
$lines=explode("\n", $k);
  for ($j=0;$j<=$n;$j++){
    $jj=$lines[$j];
    
    if(strpos($jj, "HGBA1C") !== false){
      echo $jj."<br>";
    }
  }
*/
/*
//array 
  $sql = "SELECT visit_diagnosis FROM cc_db;";
  $r=$conn->query($sql);
  $n = $r->num_rows;
  if($r->num_rows>0){

    while($row = $r->fetch_assoc()){
      $array1[] = $row['visit_diagnosis'];

    }
  }

for($i=0;$i<$n;$i++){
  if(strpos($jj, $array[$i]) !== false){
    echo $array1[$i]."<br>";
  }
}
*/

?>


  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js?site=5ea24fa4777920d17bd4218b" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>


