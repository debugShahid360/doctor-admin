<?php
    $conn=mysqli_connect("localhost","root","","");
    if($conn){
        // echo "<script>alert('Your connection has been successfully ')</script>";
    }else{
        echo "<script>alert('Your connection has not been successfully ')</script>";
    }
?>