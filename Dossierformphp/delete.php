<?php
require_once('connect.php');
if(isset($_GET['Id'])){
  
    $id=$_GET['Id'];

    $sql="delete from message where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "Deleted successfull";
        header('location:display.php');
    }

    else{
        die(mysqli_error($conn));
    }
}

?>