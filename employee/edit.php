<?php 
$userid = $_COOKIE["currentUserId"];
$email=$_POST['email'];
$name=$_POST['name'];
$address=$_POST['address'];
$city=$_POST['city']; 
$country=$_POST['country'];
$state=$_POST['state'];
$pincode=$_POST['pin'];

$painter=$_POST['painter'];
$servant=$_POST['maid'];
$worker=$_POST['labour'];
$rajgeer=$_POST['rajgeer'];

$available=$_POST['available'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "labour";

$conn = new mysqli($servername, $username, $password, $dbname);
$sql="update main set Email='$email',Nam='$name',Address='$address',city='$city',country='$country',
state='$state',pincode='$pincode',painter='$painter',maid='$servant',labour='$worker',rajgeer='$rajgeer',
available='$available' where UserId = '".$userid."'";


if(!mysqli_query($conn,$sql)) {
    echo 'Not inserted';
}
else {
    $message="registered";
    echo "<script>alert('$message')</script>";
    header('Location:\dev\employee\dashboard.php');
}
?>