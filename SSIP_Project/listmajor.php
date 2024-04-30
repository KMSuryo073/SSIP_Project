<?php 
include 'connect.php';
if(isset($_POST['submit'])){
    $majorname=$_POST['majorname'];
    $facname=$_POST['facname'];
    $fac_id=$_POST['fac_id'];

    $insert_query="insert into `major` (majorname,facname,fac_id) values ('$majorname','$facname','$fac_id') ";
        $result=mysqli_query($con,$insert_query);
        if($result){
            echo "Data inserted successfully";
            echo "<script>window.open('displaymajor.php','_self')</script>";
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
    <title>Insert Major</title>
    <!-- bootstarp css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
   <div class="container my-5">
       <form action="" method="post">
           <!-- Student's name field -->
           <div class="form-group mb-3">
               <label>Major Name</label>
               <input type="text" required="required" autocomplete="off" placeholder="Enter major name" name="majorname" class="form-control">
           </div>

           <!-- Major field -->
           <div class="form-group mb-3">
               <label>Faculty Name</label>
               <input type="text" required="required" autocomplete="off" placeholder="Enter Major's Faculty" name="facname" class="form-control">
           </div>

           <!-- Faculty ID field -->
           <div class="form-group mb-3">
               <label>Faculty ID</label>
               <input type="text" required="required" autocomplete="off" placeholder="Enter Major's Faculty's ID" name="fac_id" class="form-control">
           </div>

           <!-- submit button -->

           <button class="btn btn-dark" type="submit" name="submit">Add Major</button>
       </form>

   </div>
    
</body>
</html>