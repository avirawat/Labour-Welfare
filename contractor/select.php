<?php include "../connection.php";?>
<!doctype html>
<html lang="en">
    <head>
        <?php include "../header.php";?>

    </head>
    <body>
    <div class="container">
            <div class="form-group" style="font-size:150%;width:100% ;font-family:Times New Roman;background-color:powderblue;">
                <p>Workers Details</p>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Sr.No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Age</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Mobile No</th>
                        <th scope="col">Address</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                <?php 
                $paint=$_POST['painter'];
                $ser=$_POST['maid'];
                $work=$_POST['labour'];
                $raj=$_POST['rajgeer'];
                
                $i=1;
                $sql = "SELECT * FROM main WHERE ACCOUNT = 'employee'and((painter=1 and '$paint'=1)or(maid=1 and '$ser'=1)
                or(labour=1 and '$work'=1)or(rajgeer=1 and '$raj'=1))";
                $result = mysqli_query($conn,$sql);
                $count=mysqli_num_rows($result);
                if($count>=1) {
                while($row=mysqli_fetch_array($result)){
                ?>
                    
                    <tr>
                        <td><?php echo $i;?></td>
                        <td><?php echo $row["Nam"];?></td>
                        <td><?php echo $row["Age"];?></td>
                        <td><?php echo $row["gender"];?></td>
                        <td><?php echo $row['MobileNo'];?></td>
                        <td><?php echo $row['Address'];?></td>
                        <td><a href="">Edit</a>| <a href="">Delete</a></td>
                    </tr>
                <?php $i++;}
                }
                else {
                    echo 'record not found';
                }
                ?>
                    </tbody>
                </table>
            </div>
    </div>
    </body>
    <?php include "../footer.php";?>
</html>