<?php 
$userid = $_COOKIE["currentUserId"];
$email=$_POST['email'];
$name=$_POST['name'];
$address=$_POST['address'];
$city=$_POST['city']; 
$country=$_POST['country'];
$state=$_POST['state'];
$pincode=$_POST['pin'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "labour";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql="update main set Email='$email',Nam='$name',Address='$address',city='$city',country='$country',state='$state',pincode='$pincode' where UserId = '".$userid."'";
if(!mysqli_query($conn,$sql)) {
    echo 'Not inserted';
}
else {
    $message="registered";
    echo "<script>alert('$message')</script>";
    header('Location:\dev\contractor\dashboard.php');
}
?>

