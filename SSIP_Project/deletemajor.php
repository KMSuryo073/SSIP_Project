<?php

include 'connect.php';
if(isset($_GET['delete_id'])){
    $idm=$_GET['delete_id'];
    $sql_delete="Delete from `major` where id=$idm";
    $result=mysqli_query($con,$sql_delete);
    if($result){
        header('location:displaymajor.php');
    }else{
        die(mysqli_error($con));
    }
}


?>