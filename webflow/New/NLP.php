<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Sat Aug 22 2020 18:40:54 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="5ea8d9557a0b6934a6d45220" data-wf-site="5ea8d9557a0b694827d4521f">
<head>
  <meta charset="utf-8">
  <title>Yonghyun Lee&#x27;s Beautiful Project</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/yonghyun-lees-beautiful-project.webflow.css" rel="stylesheet" type="text/css">
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
  <style> 
  .c2 {display:none;}
  div.c2 label input:checked ~ span {
  	background-color: #425064;
  	font-weight:bold;
  	color:white;
  	cursor: pointer;}
      
</style>
</head>
<body>

  <div class="w-row">
    <div class="column w-col w-col-6">
      <div class="form-block w-form">
        <form id="email-form" name="email-form" data-name="Email Form" class="form" action="NLP.php" method="post"><textarea placeholder="Enter data" maxlength="500000" id="field" name="text" class="textarea w-input"></textarea><input type="submit" value="Submit" data-wait="Please wait..." class="submit-button w-button"></form>
        <div class="w-form-done">
          <div>Thank you! Your submission has been received!</div>
        </div>
        <div class="w-form-fail">
          <div>Oops! Something went wrong while submitting the form.</div>
        </div>
      </div>
    </div>
    <div class="column-2 w-col w-col-6">
        <?php

        include 'db.php';
        $text = $_POST['text']; 
        $n = substr_count($text,"\n");
        $lines=explode("\n", $text);
        $total="";
        $page=1;
        $page_countdown=0;
        $sentence=1;
        for ($i=0;$i<$n;$i++){
            $total=$total.$lines[$i];
            preg_match_all('/\w+/', $lines[$i], $output_array);
           if(count($output_array[0])==0){
               $page_countdown++;
           } else {$page_countdown=0;}
           //echo $lines[$i]."<BR>".$page."".$page_countdown."".$line."<BR>";
           if($page_countdown==3){
               echo "Page ".$page."<BR>";
               echo $total."<BR>";
               $total=preg_replace('/\.\s/', 'mmm', $total);
               $explode1=explode('mmm',$total);
               for($q=0;$q<count($explode1);$q++){
                $explode2=explode(': ',$explode1[$q]);
                echo $sentence.": ".$explode1[$q]."<BR>";
                   
                        $sql = "INSERT INTO note_db (note, page) VALUES('$explode1[$q]','$page');";
                        if ($conn->query($sql) === TRUE) {echo "";} else {echo "Error: " . $sql . "<br>" . $conn->error;}    
                        $sentence++;
                    
                    
                    
                for($v=0;$v<count($explode2);$v++){
                    
                }
               }
               echo "<BR><BR>";

               $page++;
               $total="";
               $sentence=1;
           }
        }
echo preg_replace('/\:\s/','<br><BR>',preg_replace('/\.\s/', '<br><br>', $text));
        echo "</div>";
        echo "<button onclick=\"copyTo('#total')\">Copy</button><br><BR>";








        {
          "payload": {
            "textSnippet": {
              "content": "YOUR_SOURCE_CONTENT",
              "mime_type": "text/plain"
            }
          }
        }

        
        ?>



    </div>
</div>
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
<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=5ea8d9557a0b694827d4521f" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>

</body>

