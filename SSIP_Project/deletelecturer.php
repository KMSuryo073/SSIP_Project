<?php

include 'connect.php';
if(isset($_GET['delete_id'])){
    $idl=$_GET['delete_id'];
    $sql_delete="Delete from `lecturer` where id=$idl";
    $result=mysqli_query($con,$sql_delete);
    if($result){
        header('location:displaylecturer.php');
    }else{
        die(mysqli_error($con));
    }
}


?>