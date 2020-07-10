<?php

$userid = $_POST["userid"];
setcookie("currentUserId", $userid);
$pas = $_POST["password"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "labour";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT account,nam,userid,passw,email,age,gender,mobileno,Address FROM main WHERE userid =  '".$userid."' AND passw = '".$pas."'";
$result = mysqli_query($conn,$sql);

$count=mysqli_num_rows($result);

$row=mysqli_fetch_array($result);
if ($count >= 1) {
    $role=$row['account'];
    if($role=='contractor'){
        header('Location:.\contractor\dashboard.php');
    }
    elseif($role=='employee'){
        header('Location:.\employee\dashboard.php');
    }
    else {
        header('Location:top.html');
    }
}
else{
    echo "<script type='text/javascript'>alert('username or password is wrong ');</script>";
    header("refresh:0.1; url = top.html"); 
}
$conn->close();
?>