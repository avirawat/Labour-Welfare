<?php require "../connection.php";?>
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
    <a class="dropdown-item" href="\dev\top.html">Logout</a>
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
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Diwali Offer!</strong> You are logged In—check out your detail!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
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
              <td><?php echo $row["pincode"];?></td> 
            </tr> 
            <tr>
              <th>Pincode:</th> 
              <td><?php echo $row["Age"];?></td> 
            </tr> 
        </table>
    </div>
    <div class="form-group" style="font-size:150%;width:80% ;font-family:courier;background-color:powderblue;" class="progress">
        <p>Professional Details</p>
        <table class="table" style="width:50%">
            <thead class>
            <tr> 
              <th>Painter:</th>
              
              <td><?php 
              $pval=$row["painter"]; 
              if($pval==1){
                echo 'Available'; 
              }
              else {
                   echo 'Not Available';
                 }
              ?></td> 
            </tr>
            <tr> 
              <th>Maid/Servant:</th>
              
              <td><?php 
              $pval=$row["maid"]; 
              if($pval==1){
                echo 'Available'; 
              }
              else {
                   echo 'Not Available';
                 }
              ?></td> 
            </tr>
            <tr> 
              <th>Worker:</th>
              
              <td><?php 
              $pval=$row["labour"]; 
              if($pval==1){
                echo 'Available'; 
              }
              else {
                   echo 'Not Available';
                 }
              ?></td> 
            </tr>
            <tr> 
              <th>Rajgeer:</th>
              
              <td><?php 
              $pval=$row["rajgeer"]; 
              if($pval==1){
                echo 'Available'; 
              }
              else {
                   echo 'Not Available';
                 }
              ?></td> 
            </tr>
            </table>
    </div> 
  </div>
  <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Government Plan #1
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Government Plan #2
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Government Plan #3
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div> 
    </body>
    <?php include "../footer.php";?>
    </html>