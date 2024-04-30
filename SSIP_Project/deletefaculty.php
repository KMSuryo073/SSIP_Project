<?php

include 'connect.php';
if(isset($_GET['delete_id'])){
    $idf=$_GET['delete_id'];
    $sql_delete="Delete from `faculty` where id=$idf";
    $result=mysqli_query($con,$sql_delete);
    if($result){
        header('location:displayfaculty.php');
    }else{
        die(mysqli_error($con));
    }
}


?>