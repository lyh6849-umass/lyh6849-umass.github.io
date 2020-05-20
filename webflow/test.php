<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Sun Apr 26 2020 14:51:32 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="5ea48705af4837295335b172" data-wf-site="5ea24fa4777920d17bd4218b">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<?php 
include 'db.php';

$array1 = array();
$sql = "SELECT visit_diagnosis FROM cc_db;";
$r=$conn->query($sql);
if($r->num_rows>0){
  while($row=$r->fetch_assoc()){
    $array1[]=$row['visit_diagnosis'];
  }
}

print_r( $array1 );
echo "<br>";


/*
$result = mysql_query("
SELECT tag_title_fld
FROM tags
JOIN articles_tags USING(tag_ID)
ORDER BY article.article_ID
");
foreach($result as $row) { 
   $array1[] = $row['tag_title_fld'];
   // With count. See below for the query it goes with
   // $array2 = array();
   // $array2['tag'] = $row['tag_title_fld'];
   // $array2['count'] = $row['tag_count'];
   // $array1[] = $array2;
}
*/



      $string = 'metformin dose is URI 500 hundres and insulin is whatever';
      $array = array("x`etformin","insulin");
      //check if med name is included 
      print_r(explode(' ', $string));
      echo "<br>";
      if(0 < count(array_intersect(array_map('strtolower', explode(' ', $string)), array_map('strtolower',$array1))))
      {
        echo $string."<br>";
      }
?>      


</head>
<body>

<div id="test">
    <p>Test P</p>
</div>

<button id="btnn">Click to change</button>
</body>
</html>


