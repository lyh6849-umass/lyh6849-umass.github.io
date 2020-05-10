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
        <form action="cb.php" method="post">
                <textarea src rows="20" cols="200" name="qa"></textarea><br>
                <input type="submit">
        </form>
        <form action="cb_add.php" method="post">
                <textarea src rows="20" cols="200" name="qa"></textarea><br>
                <input type="submit">
        </form>
<?php
$qn = $_POST['qa'];
$lines=explode("\n", $qn);
$n = substr_count($qn,"\n");
echo $n."<BR>";
for ($i=0;$i<=$n;$i++){
    $k = $lines[$i];
    echo $k."<br>";
}
?>
    </body>
</html>