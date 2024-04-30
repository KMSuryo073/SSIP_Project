<?php 
include 'connect.php';
if(isset($_POST['submit'])){
    $lectname=$_POST['lectname'];
    $facname=$_POST['facname'];
    $univname=$_POST['univname'];
    $fac_id=$_POST['fac_id'];
    $univ_id=$_POST['univ_id'];

    $insert_query="insert into `lecturer` (lectname,facname,univname,fac_id,univ_id) values ('$lectname','$facname','$univname','$fac_id','$univ_id') ";
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
    <title>Insert Lecturers</title>
    <!-- bootstarp css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
   <div class="container my-5">
       <form action="" method="post">
           <!-- Lecturer's name field -->
           <div class="form-group mb-3">
               <label>Lecturer Name</label>
               <input type="text" required="required" autocomplete="off" placeholder="Enter Lecturer's name" name="lectname" class="form-control">
           </div>

           <!-- Lecturer's Faculty field -->
           <div class="form-group mb-3">
               <label>Faculty Name</label>
               <input type="text" required="required" autocomplete="off" placeholder="Enter Lecturer's Faculty" name="facname" class="form-control">
           </div>

           <!-- Lecturer's University field -->
           <div class="form-group mb-3">
               <label>University Name</label>
               <input type="text" required="required" autocomplete="off" placeholder="Enter Lecturer's University" name="univname" class="form-control">
           </div>

           <!-- Faculty field -->
           <div class="form-group mb-3">
               <label>Faculty ID</label>
               <input type="text" required="required" autocomplete="off" placeholder="Enter Faculty ID" name="fac_id" class="form-control">
           </div>

           <!-- University field -->
           <div class="form-group mb-3">
               <label>University ID</label>
               <input type="text" required="required" autocomplete="off" placeholder="Enter University's ID" name="univ_id" class="form-control">
           </div>

           <!-- submit button -->

           <button class="btn btn-dark" type="submit" name="submit">Add Lecturer</button>
       </form>

   </div>
    
</body>
</html>