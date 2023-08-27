<?php
  include "./include/connection.php";

  if(isset($_POST['submit'])){
    @$patient_name=mysqli_real_escape_string($conn,$_POST['patient_name']);
    @$pfather_name=mysqli_real_escape_string($conn,$_POST['pfather_name']);
    @$pemail=mysqli_real_escape_string($conn,$_POST['pemail']);
    @$pmobile_number=mysqli_real_escape_string($conn,$_POST['pmobile_number']);
    @$password=mysqli_real_escape_string($conn,$_POST['password']);
    @$cpassword=mysqli_real_escape_string($conn,$_POST['cpassword']);
    @$cdoctorname=mysqli_real_escape_string($conn,$_POST['cdoctorname']);
    @$pdate=mysqli_real_escape_string($conn,$_POST['pdate']);
    date_default_timezone_set("Asia/Karachi");
    @$ptime=mysqli_real_escape_string($conn,$_POST['ptime']);
    
    $updsql="SELECT * FROM `patient_record` WHERE `pmobile_number`='$pmobile_number' || `pemail`='$pemail'";
    $updrun=mysqli_query($conn,$updsql);
    $updfet=mysqli_fetch_assoc($updrun);

    if($updfet){
      echo "<script>alert('Please Entry a unique data ')</script>"; 
    }else{

    $sql="INSERT INTO `patient_record`(`patient_name`,`pfather_name`,`pemail`,`pmobile_number`,`password`,`cpassword`,`cdoctorname`,`pdate`,`ptime`)VALUES('$patient_name','$pfather_name','$pemail','$pmobile_number','$password','$cpassword','$cdoctorname','$pdate','$ptime')";
    $run=mysqli_query($conn,$sql);
    if($run){
      echo "<script>alert('Your data has been received')</script>";   
    }else{
      echo "<script>alert('Your data has not  been received')</script>"; 
    }
  }

};
  ?>



<!DOCTYPE html>
<html lang="en">


<!-- auth-register.html  21 Nov 2019 04:05:01 GMT -->
<?php 
include "./include/header.php";
?>
<style>
body {
    background-image: url(./include/pic1.jpg);
    background-repeat: no-repeat;
    background-size: cover;
}

.card {
    background-color: rgba(28, 40, 145, 0.25);

}

.form-group label {
    color: white;
}

</style>

<body>
    <div class="loader"></div>
    <div id="app">
        <section class="section">
            <div class="container mt-4">
                <div class="row justify-content-center ">

                    <div class="col-12 col-sm-10  col-md-6  col-lg-6  col-xl-6 ">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4 class="text-white">Register your Appointment</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST">
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="frist_name">Patient Name</label>
                                            <input id="frist_name" oninput="changedata()" onblur="removespantext()"  type="text" class="form-control" name="patient_name"
                                                autofocus>
                                        </div>
                                        
                                        <div class="form-group col-6">
                                            <label for="father_name">Patient Father Name</label>
                                            <input  id="father_name" oninput="changedata1()" onblur="removespantext()" disabled  type="text" class="form-control"
                                                name="pfather_name">
                                        </div>
                                    </div>
                                    <span id='valid'></span>
                                    
                                        
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" oninput="changedata3()" onblur="removespantext()" disabled type="email" class="form-control" name="pemail">
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>
                                    <span id='valid1'></span>
                                  
                                    <div class="form-group">
                                        <label for="mobile_number">Mobile number </label>
                                        <input id="mobile_number" oninput="changedata4()" onblur="removespantext()" disabled type="tel" class="form-control" name="pmobile_number">

                                    </div>
                                    <span id='valid2'></span>
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="password"  class="d-block">Password</label>
                                            <input id="password" oninput="changedata5()" onblur="removespantext()" disabled type="password" class="form-control pwstrength"
                                                data-indicator="pwindicator" name="password">
                                            <div id="pwindicator" class="pwindicator">
                                                <div class="bar"></div>
                                                <div class="label"></div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group col-6">
                                            <label for="cpassword" class="d-block">Password Confirmation</label>
                                            <input id="cpassword" oninput="changedata6()" onblur="removespantext()" disabled name="cpassword" type="password" class="form-control"
                                                name="password-confirm">
                                        </div>
                                       
                                    </div>
                                    <span id='valid3'></span>
                                    <div class="form-group">
                                        <label for="doctor">Choose a Doctor </label>

                                        <select name="cdoctorname" disabled id="cdoctorname" class="form-control">
                                            <option selected>Choose a doctor</option>
                                            <?php
                      $sql="SELECT * FROM `doctors-name`";
                      $run=mysqli_query($conn,$sql);
                      while($fet=mysqli_fetch_assoc($run)){
                        ?>
                                            <option value="<?php echo $fet['did']?>"><?php echo $fet['dname']?></option>
                                            <?php
                      }
                    ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="date">Appointment date </label>
                                        <input id="date"  type="date" class="form-control" name="pdate">

                                    </div>
                                    <div class="form-group">
                                        <label for="time">Appointment time </label>
                                        <input id="time"  type="time" class="form-control" name="ptime">

                                    </div>

                                    <div class="form-group">
                                        <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">
                                            Register your Appointment
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="mb-4 text-center text-white">
                                Already Registered? <a href="auth-login.php" class="text-white">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php
                   include "./include/footer.php";
                   ?>
                   <script src="./javascript.js"></script>
</body>


<!-- auth-register.html  21 Nov 2019 04:05:02 GMT -->

</html>