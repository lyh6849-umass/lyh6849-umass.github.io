<?php
$servername = "localhost";
$username="root";
$password="root";
$dbname="phpdb";
 
$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("connecion failed: ".$conn->connct_error);
}

$sql = "CREATE TABLE MyGuests_Object_oriented22345111 (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
    if ($conn->query($sql) === TRUE) {
        echo "Table MyGuests created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }


$sql = "CREATE TABLE MyGuests_procedure_oriented2345111 (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

if(mysqli_query($conn,$sql)){
    echo "procedure oriented table made";
} else {echo "2nd query failed";};


mysqli_close($conn);
?>

