<?php
$connection = mysqli_connect('localhost', 'root');

if ($connection) {
    echo "Connection is Establish!";
}
else {
    echo "ERROR Connection Failed!";
}

mysqli_select_db($connection, 'project');

$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$email = $_POST['email'];
$pass = $_POST['password'];
$ticket = $_POST['ticket'];
$usertype=$_POST['usertype'];

$data = "INSERT INTO credentials (FNAME, LNAME, EMAIL, PASSWD,TICKET,USERTYPE) VALUES ('$firstname', '$lastname', '$email', '$pass','$ticket','$usertype')";

mysqli_query ($connection, $data);
header('location:login.php');

?>