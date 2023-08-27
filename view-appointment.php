<?php
include "./include/connection.php";
session_start();
 $email=$_SESSION['email'];
$password=$_SESSION['password'];

if($email and $password){
    echo "<script>alert('Welcome here  ')</script>";
    session_destroy();
}else{
    session_destroy();
  header("location:auth-login.php");
}
$sql="SELECT * FROM `patient_record` INNER JOIN `doctors-name` ON `cdoctorname`=`did` WHERE `pemail`='$email' ";
$run=mysqli_query($conn,$sql);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">

    </script>
    <script src="https://kit.fontawesome.com/7c2464aa6d.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
    body {
        background-image: url(./include/pic1.jpg);
        background-repeat: no-repeat;
        background-size: cover;

    }

   
    .card {
        background-color: rgba(0, 251, 238, 0.46);
        border: none;
        box-shadow: 0px 0px 20px 2px;
    }

    td,
    th {
        color: black;
        font-weight: bold;

    }
    @media only screen and (max-width: 992px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

	table, td, tr { 
		width:100px; 
        font-size: 12px;
       
	}
}
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5 mb-5">
            <div class="col-12 col-lg-10 col-md-10">

                <div class="card">

                    <div class="card-header">
                        <div class="row ">
                            <div class="col-lg-8 col-md-8 col-6">
                                <div class="leftheader mt-4">
                                    <h1 class="h1 text-white"> Captan Care Hospital</h1>
                                    <p class=" text-white">You will healthy very soon Inshallaha </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-6">
                                <div class="righttheader">
                                    <img src="./include/img/3.png" alt="picture " width="100%">
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover  ">

                            <?php
                        while($pfet=mysqli_fetch_assoc($run)){
                          
                        
                      ?>
                            
                                <tr>
                                    <td>Registration Number</td>
                                    <td></td>
                                    <td><a  href="update-appointment.php?upid=<?php echo $pfet['pid']?>">
                                            <i class="fa-regular fa-pen-to-square  text-white fa-3x"></i></a></td>
                                           
                                    <td><a href="delete-appointment.php?delid=<?php echo $pfet['pid']?>">
                                            <i class="fa-solid fa-trash text-danger fa-3x"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Patient Name</td>
                                    <td class="text-white"><?php echo $pfet['patient_name']?></td>
                                    <td>Patient Father Name</td>
                                    <td class="text-white"><?php echo $pfet['pfather_name']?></td>
                                </tr>

                                <tr>
                                    <td>Patient Email</td>
                                    <td class="text-white"><?php echo $pfet['pemail']?></td>
                                    <td>Mobile Number</td>
                                    <td class="text-white"><?php echo $pfet['pmobile_number']?></td>
                                </tr>

                                <tr>
                                    <td>Appointment Date </td>
                                    <td class="text-white"><?php echo $pfet['pdate']?></td>
                                    <td>Appointment Time</td>
                                    <td class="text-white"><?php echo $pfet['ptime']?></td>
                                </tr>
                                <tr>
                                    <td>Diagnosis </td>
                                    <td></td>
                                    <td>doctor name</td>
                                    <td class="text-white"><?php echo $pfet['dname']?></td>
                                </tr>
                                <tr>
                                    <td>Allergies </td>
                                    <td></td>
                                    <td>Disabaility</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class=""># </th>
                                    <th>Drugs Name </th>
                                    <th>Unit Tablet/Syrup </th>
                                    <th>Dosage per day </th>
                                </tr>
                                <tr>
                                    <td>1 </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td>2 </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td>3 </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td>4 </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td>5 </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td>6 </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td>Signature of Doctor </td>
                                    <td> </td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <?php
                                                }
                                                ?>
                           
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>