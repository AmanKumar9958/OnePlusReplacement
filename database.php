<?php

$userName = $_POST['userName'];
$billName = $_POST['billName'];
$billNo = $_POST['billNo'];
$mobileNo = $_POST['mobNo'];
$date = $_POST['date'];
$address = $_POST['address'];
$color = $_POST['color'];

// database connection
$connection = new mysqli('localhost','root','','replacement');
// localhost, root, password(blank), database name..
if ($connection->connect_error){
    die('Connection'. $connection->connect_error);
}
else{
    $statement = $connection->prepare("INSERT INTO replacemententry (userName, billName, billNo, mobileNo, date, address, color) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $statement->bind_param('sssisss', $userName, $billName, $billNo, $mobileNo, $date, $address, $color);     //we have only i, d, s, b
    $statement->execute();  //query execution start
    echo "Form Submitted";
    $statement-> close();   //query statement end
    $connection->close();   //connection statement end
}
?>