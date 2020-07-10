<?php include "../connection.php";?>
<!doctype html>
<html lang="en">
    <head>
        <?php include "../header.php";?>

    </head>
    <body>
        <h3> Welcome
            <?php 
            $userid = $_COOKIE["currentUserId"];
            $sql = "SELECT * FROM main WHERE UserId = '".$userid."'";
            $result = mysqli_query($conn,$sql);

            $row=mysqli_fetch_array($result);
            echo $row['Nam'];  
            ?>
        </h3>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Edit Profile!</strong> You are logged In,Edit your detail!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <div class="container">
        <form action="edit.php" method="POST">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" value="<?php 
                        $userid = $_COOKIE["currentUserId"];
                        $sql = "SELECT * FROM main WHERE UserId = '".$userid."'";
                        $result = mysqli_query($conn,$sql);

                        $row=mysqli_fetch_array($result);
                        echo $row['Email'];  
                    ?>"/>
                </div>
                <div class="form-group col-md-6">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control "style="text-align:left" name="name" value="<?php $userid = $_COOKIE["currentUserId"];$sql = "SELECT * FROM main WHERE UserId = '".$userid."'";
                        $result = mysqli_query($conn,$sql);$row=mysqli_fetch_array($result);echo trim($row['Nam']);?>"/>
                </div>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" name="address" value="<?php 
                        $userid = $_COOKIE["currentUserId"];
                        $sql = "SELECT * FROM main WHERE UserId = '".$userid."'";
                        $result = mysqli_query($conn,$sql);

                        $row=mysqli_fetch_array($result);
                        echo $row['Address'];  
                    ?>"/>
            </div>
            <div class="form-row">
                <div class="form-group col-md-8">
                <label for="city">Town/city</label>
                <input type="text" class="form-control" name="city" value="<?php 
                        $userid = $_COOKIE["currentUserId"];
                        $sql = "SELECT * FROM main WHERE UserId = '".$userid."'";
                        $result = mysqli_query($conn,$sql);

                        $row=mysqli_fetch_array($result);
                        echo $row['city'];  
                    ?>"/>
                </div>
                <div class="form-group col-md-4">
                        <label for="mobileno">Mobile No</label>
                        <input type="text" class="form-control" name="mobileno" value="<?php 
                        $userid = $_COOKIE["currentUserId"];
                        $sql = "SELECT * FROM main WHERE UserId = '".$userid."'";
                        $result = mysqli_query($conn,$sql);

                        $row=mysqli_fetch_array($result);
                        echo $row['MobileNo'];  
                    ?>"/>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="country">Country</label>
                    <select id="country" name="country" class="form-control">
                        <option selected>Choose...</option>
                        <option value=""></option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="state">State</label>
                    <select id="state" name="state" class="form-control">
                        <option selected>Choose...</option>
                        <option value=""></option>
                    </select>
                </div>
               
                <div class="form-group col-md-2">
                    <label for="pin">PinCode</label>
                    <input type="text" name="pin" class="form-control" id="pin" value="<?php 
                        $userid = $_COOKIE["currentUserId"];
                        $sql = "SELECT * FROM main WHERE UserId = '".$userid."'";
                        $result = mysqli_query($conn,$sql);

                        $row=mysqli_fetch_array($result);
                        echo $row['pincode'];  
                    ?>"/> 
                </div>
            </div>
            <div class="form-group">
                <p>Professional Details</p>
                <input type="checkbox" name="painter" value="1">Painter<br>
                <input type="checkbox" name="maid" value="1">Maid/servant<br>
                <input type="checkbox" name="labour" value="1">Labour<br>
                <input type="checkbox" name="rajgeer" value="1">Rajgeer<br>
            </div>
            
            <div>
                <p>Select your availablity</p>
                <input type="radio" name="available" value="yes">
                <label for="available">Available</label><br>
                <input type="radio" name="available" value="no">
                <label for="available">Not Available</label><br>
            </div>
            <p>Feedback or Suggestions:</p>
            <textarea rows="4" cols="50" name="comment" form="usrform" placeholder="Enter your comments here...">
            </textarea><br>
            <button type="reset" class="btn btn-danger">Reset</button>
           <button type="submit" class="btn btn-primary">Update</button>
          
        </form>
    </div>
        <script src="jquery-2.2.4.min.js"></script>
        <script src="custom.js"></script>
    </body>
        <?php include "../footer.php";?>
    </html>