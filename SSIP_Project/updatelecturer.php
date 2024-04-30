<?php 
include 'connect.php';
$idl=$_GET['update_id'];
$select_query="Select * from `lecturer` where id='$idl'";
$result_query=mysqli_query($con,$select_query);
$row=mysqli_fetch_assoc($result_query);
$lectname=$row['lectname'];
$facname=$row['facname'];
$univname=$row['univname'];
$univ_id=$row['univ_id'];
$fac_id=$row['fac_id'];

if(isset($_POST['submit'])){
    $lectname=$_POST['lectname'];
    $facname=$_POST['facname'];
    $univname=$_POST['univname'];
    $fac_id=$_POST['fac_id'];
    $univ_id=$_POST['univ_id'];

    $insert_query="update `lecturer` set lectname='$lectname', facname='$facname', univname='$univname', fac_id='$fac_id', univ_id='$univ_id' where id=$idl";
        $result=mysqli_query($con,$insert_query);
        if($result){
            echo "Data inserted successfully";
            echo "<script>window.open('displaylecturer.php','_self')</script>";
        }else{
            die(mysqli_error($con));
        }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <!-- bootstarp css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
   <div class="container my-5">
       <form action="" method="post">
           <!-- Lecturer's name field -->
           <div class="form-group mb-3">
               <label>Lecturer Name</label>
               <input type="text" required="required" autocomplete="off" placeholder="Enter lecturer's name" name="lectname" class="form-control" value=<?php echo $lectname;?>>
           </div>

           <!-- Lecturer's Faculty field -->
           <div class="form-group mb-3">
               <label>Faculty Name</label>
               <input type="text" required="required" autocomplete="off" placeholder="Enter Lecturer's Faculty" name="facname" class="form-control" value=<?php echo $facname;?>>
           </div>

           <!-- Lecturer's University field -->
           <div class="form-group mb-3">
               <label>University Name</label>
               <input type="text" required="required" autocomplete="off" placeholder="Enter Lecturer's University" name="univname" class="form-control" value=<?php echo $univname;?>>
           </div>

           <!-- Faculty field -->
           <div class="form-group mb-3">
               <label>Faculty ID</label>
               <input type="text" required="required" autocomplete="off" placeholder="Enter Faculty ID" name="fac_id" class="form-control" value=<?php echo $fac_id;?>>
           </div>

           <!-- University field -->
           <div class="form-group mb-3">
               <label>University ID</label>
               <input type="text" required="required" autocomplete="off" placeholder="Enter University's ID" name="univ_id" class="form-control" value=<?php echo $univ_id;?>>
           </div>

           <!-- submit button -->

           <button class="btn btn-dark" type="submit" name="submit">Update</button>
       </form>

   </div>
    
</body>
</html>