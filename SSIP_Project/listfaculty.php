<?php 
include 'connect.php';
if(isset($_POST['submit'])){
    $facname=$_POST['facname'];
    $univname=$_POST['univname'];
    $univid=$_POST['univid'];

    $insert_query="insert into `faculty` (facname,univname,univ_id) values ('$facname','$univname','$univid') ";
        $result=mysqli_query($con,$insert_query);
        if($result){
            echo "Data inserted successfully";
            echo "<script>window.open('displayfaculty.php','_self')</script>";
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
    <title>Insert Faculty</title>
    <!-- bootstarp css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
   <div class="container my-5">
       <form action="" method="post">
           <!-- Faculty's name field -->
           <div class="form-group mb-3">
               <label>Faculty Name</label>
               <input type="text" required="required" autocomplete="off" placeholder="Enter faculty's name" name="facname" class="form-control">
           </div>

           <!-- University's Name field -->
           <div class="form-group mb-3">
               <label>University Name</label>
               <input type="text" required="required" autocomplete="off" placeholder="Enter Faculty's University" name="univname" class="form-control">
           </div>

           <!-- University ID field -->
           <div class="form-group mb-3">
               <label>University ID</label>
               <input type="text" required="required" autocomplete="off" placeholder="Enter Faculty's University's ID" name="univid" class="form-control">
           </div>

           <!-- submit button -->

           <button class="btn btn-dark" type="submit" name="submit">Add Faculty</button>
       </form>

   </div>
    
</body>
</html>