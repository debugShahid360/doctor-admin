<?php
    include "./include/connection.php";
    $del=$_GET['delid'];
    $delsql="DELETE FROM `patient_record` WHERE `pid`='$del'";
    $delrun=mysqli_query($conn,$delsql);
    if($delrun){
        echo "<script>alert('Your data has been deleted')</script>";
        header("Refresh:0,url=./auth-login.php");

    }else{
        echo "<script>alert('Your data has not been deleted')</script>";
    }
?>