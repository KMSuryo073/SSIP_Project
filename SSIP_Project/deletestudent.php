<?php

include 'connect.php';
if(isset($_GET['delete_id'])){
    $ids=$_GET['delete_id'];
    $sql_delete="Delete from `student` where id=$ids";
    $result=mysqli_query($con,$sql_delete);
    if($result){
        header('location:displaystudent.php');
    }else{
        die(mysqli_error($con));
    }
}


?>