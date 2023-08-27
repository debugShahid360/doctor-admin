<?php
    include "./include/connection.php";
    $del=$_GET['del'];
    $delsql="DELETE FROM `doctors-name` WHERE `did`='$del'";
    $delrun=mysqli_query($conn,$delsql);
    if($delrun){
        echo "<script>alert('Your Data has been deleted  ')</script>";
        header("Refresh:0,url=./view-doctor.php");
    }else{
        echo "<script>alert('Your Data has not been deleted  ')</script>";
    }
?>