<?php 
include 'connect.php';
if(isset($_POST['submit'])){
    $stdname=$_POST['studentname'];
    $majorname=$_POST['majorname'];
    $univname=$_POST['univname'];
    $major_id=$_POST['major_id'];
    $univ_id=$_POST['univ_id'];

    $insert_query="insert into `student` (studentname,majorname,univname,major_id,univ_id) values ('$stdname','$majorname','$univname','$major_id','$univ_id') ";
        $result=mysqli_query($con,$insert_query);
        if($result){
            echo "Data inserted successfully";
            echo "<script>window.open('displaystudent.php','_self')</script>";
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
    <title>SSIP Project</title>
    <!-- bootstarp css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
   <div class="container my-5">
       <form action="" method="post">
           <!-- Student's name field -->
           <div class="form-group mb-3">
               <label>Student Name</label>
               <input type="text" required="required" autocomplete="off" placeholder="Enter Student's name" name="studentname" class="form-control">
           </div>
           
           <!-- Student's Major field -->
           <div class="form-group mb-3">
               <label>Major Name</label>
               <input type="text" required="required" autocomplete="off" placeholder="Enter Student's Major" name="majorname" class="form-control">
           </div>

           <!-- Student's University field -->
           <div class="form-group mb-3">
               <label>University Name</label>
               <input type="text" required="required" autocomplete="off" placeholder="Enter Student's University" name="univname" class="form-control">
           </div>

           <!-- Major field -->
           <div class="form-group mb-3">
               <label>Major ID</label>
               <input type="text" required="required" autocomplete="off" placeholder="Enter Student's Major ID" name="major_id" class="form-control">
           </div>

           <!-- University field -->
           <div class="form-group mb-3">
               <label>University ID</label>
               <input type="text" required="required" autocomplete="off" placeholder="Enter Student's University ID" name="univ_id" class="form-control">
           </div>

           <!-- submit button -->

           <button class="btn btn-dark" type="submit" name="submit">Add Student</button>
       </form>

   </div>
    
</body>
</html>