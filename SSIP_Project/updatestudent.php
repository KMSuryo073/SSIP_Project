<?php 
include 'connect.php';
$ids=$_GET['update_id'];
$select_query="Select * from `student` where id='$ids'";
$result_query=mysqli_query($con,$select_query);
$row=mysqli_fetch_assoc($result_query);
$stdname=$row['studentname'];
$majorname=$row['majorname'];
$univname=$row['univname'];
$major_id=$row['major_id'];
$univ_id=$row['univ_id'];

if(isset($_POST['submit'])){
    $stdname=$_POST['studentname'];
    $majorname=$_POST['majorname'];
    $univname=$_POST['univname'];
    $major_id=$_POST['major_id'];
    $univ_id=$_POST['univ_id'];

    $insert_query="update `student` set studentname='$stdname', majorname='$majorname', univname='$univname', major_id='$major_id', univ_id='$univ_id' where id=$ids";
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
    <title>Update</title>
    <!-- bootstarp css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
   <div class="container my-5">
       <form action="" method="post">
           <!-- Student's name field -->
           <div class="form-group mb-3">
               <label>Student Name</label>
               <input type="text" required="required" autocomplete="off" placeholder="Enter student's name" name="studentname" class="form-control" value=<?php echo $stdname;?>>
           </div>

           <!-- Student's Major field -->
           <div class="form-group mb-3">
               <label>Major Name</label>
               <input type="text" required="required" autocomplete="off" placeholder="Enter Student's Major" name="majorname" class="form-control" value=<?php echo $majorname;?>>
           </div>

           <!-- Student's University field -->
           <div class="form-group mb-3">
               <label>University Name</label>
               <input type="text" required="required" autocomplete="off" placeholder="Enter Student's University" name="univname" class="form-control" value=<?php echo $univname;?>>
           </div>

           <!-- Major field -->
           <div class="form-group mb-3">
               <label>Major ID</label>
               <input type="text" required="required" autocomplete="off" placeholder="Enter your major ID" name="major_id" class="form-control" value=<?php echo $major_id;?>>
           </div>

           <!-- University field -->
           <div class="form-group mb-3">
               <label>University ID</label>
               <input type="text" required="required" autocomplete="off" placeholder="Enter your University's ID" name="univ_id" class="form-control" value=<?php echo $univ_id;?>>
           </div>

           <!-- submit button -->

           <button class="btn btn-dark" type="submit" name="submit">Update</button>
       </form>

   </div>
    
</body>
</html>