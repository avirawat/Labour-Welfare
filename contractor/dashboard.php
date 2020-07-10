<?php include "../connection.php";?>
<!doctype html>
<html lang="en">

  <head>
  <?php include "../header.php";?>
  <style>
    body {
      background-image: url(lb4.jpg);
    }
    h3{
      font-family:courier;
      font-weight:bold;
      color:red;
    }
    </style>
    </head>
    <body>
    <div class="dropdown">
 <h3> <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Profile
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="dashboard.php">About</a>
    <a class="dropdown-item" href="editprofile.php">Edit profile</a>
    <a class="dropdown-item" href="\dev\top.html" onclick="logOut()">Logout</a>
  </div>
  Welcome
  <?php 
        $userid = $_COOKIE["currentUserId"];
        $sql = "SELECT * FROM main WHERE UserId = '".$userid."'";
        $result = mysqli_query($conn,$sql);

        $row=mysqli_fetch_array($result);
        echo $row['Nam'];  
     ?>
</h3>
</div>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="lb1.jpg" class="d-block w-100" height="300">
    </div>
    <div class="carousel-item item">
      <img src="lb2.jpg" class="d-block w-100" height="300">
    </div>
    <div class="carousel-item item">
      <img src="lb3.jpg" class="d-block w-100" height="300">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  
<div class="container">
  <div class="form-group" style="font-size:150%;width:90% ;font-family:Times New Roman;background-color:LightGray;font-weight:bold;">
        <p>Personal Details</p>
        <table class="table">
            <thead class>
            <tr> 
              <th>Name:</th> 
              <td><?php echo $row["Nam"];?></td> 
            </tr>
            <tr>
              <th>Age:</th> 
              <td><?php echo $row["Age"];?></td> 
            </tr> 
            <tr>
              <th>Gender:</th> 
              <td><?php echo $row["gender"];?></td> 
            </tr> 
            <tr>
              <th>Mobile No:</th> 
              <td><?php echo $row["MobileNo"];?></td> 
            </tr>
            <tr>
              <th>Address:</th> 
              <td><?php echo $row["Address"];?></td> 
            </tr> 
            <tr>
              <th>City:</th> 
              <td><?php echo $row["city"];?></td> 
            </tr> 
        </table>
    </div>
</div> 
<div class="container">
  
      <p><strong>Availability</strong></p>
        <label>Painter : </label>
          <?php
                        $sql="SELECT SUM(painter) AS value_sum FROM main";
                        $result = mysqli_query($conn,$sql); 
                        $row = mysqli_fetch_assoc($result); 
                        $sum = $row['value_sum'];
                        echo $sum;  
                    ?> <br>
        <label>Maid/Servant : </label>
          <?php
                        $sql="SELECT SUM(maid) AS value_sum FROM main";
                        $result = mysqli_query($conn,$sql); 
                        $row = mysqli_fetch_assoc($result); 
                        $sum = $row['value_sum'];
                        echo $sum;  
                    ?><br>
        <label>Labour : </label>
          <?php
                        $sql="SELECT SUM(labour) AS value_sum FROM main";
                        $result = mysqli_query($conn,$sql); 
                        $row = mysqli_fetch_assoc($result); 
                        $sum = $row['value_sum'];
                        echo $sum;  
                    ?> <br>
        <label>Rajgeer : </label>
          <?php
                        $sql="SELECT SUM(rajgeer) AS value_sum FROM main";
                        $result = mysqli_query($conn,$sql); 
                        $row = mysqli_fetch_assoc($result); 
                        $sum = $row['value_sum'];
                        echo $sum;  
                    ?>
        
    </div>
<div class="container">
        <form action="select.php" method="POST"> 
          <div class="form-group">
                <p><strong>Hire</strong></p>
                <input type="checkbox" name="painter" value="1">Painter<br>
                <input type="checkbox" name="maid" value="1">Maid/servant<br>
                <input type="checkbox" name="labour" value="1">Labour<br>
                <input type="checkbox" name="rajgeer" value="1">Rajgeer<br>
            </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          
        </form>   

</div>
    </body>
    
    <?php include "../footer.php";?>
    </html>