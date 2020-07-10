<?php
$check=$_POST['record'];
$user = $_POST["name"];
$userid=$_POST['userid'];
$pass = $_POST["password"];
$email= $_POST['email'];
$age = $_POST['age'];
$gender=$_POST['gender'];
$mobile = $_POST['mobileno'];
$add= $_POST['address'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "labour";

// Create connection
$conn =new mysqli($servername, $username, $password, $dbname);
// Check connection
$sql="INSERT INTO main (account,nam,UserId,passw,email,age,gender,mobileno,address) VALUES ('$check','$user','$userid','$pass','$email','$age','$gender','$mobile','$add')";
if(!mysqli_query($conn,$sql)) {
    echo 'Not inserted';
}
else {
    $message="registered";
    echo "<script>alert('$message')</script>";
header('Location:top.html');
}
?>