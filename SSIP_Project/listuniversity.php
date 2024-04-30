<?php 
include 'connect.php';
if(isset($_POST['submit'])){
    $univname=$_POST['univname'];

    $insert_query="insert into `university` (univname) values ('$univname') ";
        $result=mysqli_query($con,$insert_query);
        if($result){
            echo "Data inserted successfully";
            echo "<script>window.open('displayuniversity.php','_self')</script>";
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
    <title>Insert University</title>
    <!-- bootstarp css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
   <div class="container my-5">
       <form action="" method="post">
           <!-- University field -->
           <div class="form-group mb-3">
               <label>University name</label>
               <input type="text" required="required" autocomplete="off" placeholder="Enter University's name" name="univname" class="form-control">
           </div>

           <!-- submit button -->

           <button class="btn btn-dark" type="submit" name="submit">Add University</button>
       </form>

   </div>
    
</body>
</html>