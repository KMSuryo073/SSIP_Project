<?php

include 'connect.php';
if(isset($_GET['delete_id'])){
    $id=$_GET['delete_id'];
    $sql_delete="Delete from `university` where id=$id";
    $result=mysqli_query($con,$sql_delete);
    if($result){
        header('location:displayuniversity.php');
    }else{
        die(mysqli_error($con));
    }
}


?>