<?php   
$string = "I want to eat apple";
$array = explode(' ',$string);
$last = $array[count($array)-1];

echo $last;

?>

<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link href = "css.css" type = "text/css" rel="stylesheet">
</head>
<body>
    <form action="add_q.php" method="post">
        <input type="checkbox" value="value1" name="checkbox[]">
        <input type="checkbox" value="value1" name="checkbox[]">
        <input type="checkbox" value="value1" name="checkbox[]">
        <input type="checkbox" value="value1" name="checkbox[]">
        <input type="checkbox" value="value1" name="checkbox[]">
        <input type="checkbox" value="value1" name="checkbox[]">
        <input type="checkbox" value="value1" name="checkbox[]">
        <input type="submit">
</form>

<?php
$answer = "test";
if(!empty($_POST['checkbox'])) {
    foreach ($_POST['checkbox'] as $language){
        $answer=$language."; ".$answer;
        echo $answer."<BR>";
    }
}
echo$answer;

?>
</body>
</html>