<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Fri May 01 2020 02:11:45 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="5ea48f4b088154bfedb25cb9" data-wf-site="5ea24fa4777920d17bd4218b">
<head>
  <meta charset="utf-8">
  <title>ma1</title>
  <meta content="ma1" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/yonghyun-lees-five-star-project.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Droid Sans:400,700"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
</head>
<body>
    <form action="ma3.php" method="post">

<?php 
set_time_limit(0);
date_default_timezone_set("America/New_York");
$time= date('m_d_y');
$user = 'b77225dc29feba';
$password = '52bed046';
$dbname = 'heroku_bf6133839e3e3aa';
$host = 'us-cdbr-iron-east-04.cleardb.net';
$port = 3306;
$conn = new mysqli($host, $user, $password, $dbname);
$n=1;
$sql = "SELECT * FROM cc_db;";
$r=$conn->query($sql);
    if($r->num_rows>0){
        echo "[cc_db]<br><table><th>visit_diagnosis</th><th>q_id</th></tr>";
        while($row=$r->fetch_assoc()){
            if($row['q_id']==""){
                $v = $row['visit_diagnosis'];
                echo"<tr><td><input type=\"text\" value=\"".$v."\" name=\"visit_dx".$n."\"></td><td><input type=\"text\" list=\"list2\" name=\"svd".$n."\"></td><td>";
                $n=$n+1;
            }
        }
        echo "</table><br><br><br>";
    }

$sql = "SELECT visit_diagnosis FROM cc_db;";
$r6=$conn->query($sql);
if($r6->num_rows>0){
    echo "<datalist id=\"list2\">";
    while ($row6=$r6->fetch_assoc()){
    echo "<option value=\"".$row6['visit_diagnosis']."\" style=\"display:none;\"><option>";
    }
    echo "</datalist>";
};
?>


<input type="submit">
  </form>


