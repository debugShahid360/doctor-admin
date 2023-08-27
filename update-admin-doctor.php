<!DOCTYPE html>
<html lang="en">

<?php 
include "./include/connection.php";
include "./include/header.php";
$up=$_GET['up'];
$upsql= "SELECT * FROM `doctors-name` WHERE `did`='$up'";
$uprun=mysqli_query($conn,$upsql);
$upfet=mysqli_fetch_assoc($uprun);

if(isset($_POST['submit'])){
$dname=mysqli_real_escape_string($conn,$_POST['dname']);
$dfathername=mysqli_real_escape_string($conn,$_POST['dfathername']);
$dmobilenumber=mysqli_real_escape_string($conn,$_POST['dmobilenumber']);
$daddress=mysqli_real_escape_string($conn,$_POST['daddress']);
$dspecilization=mysqli_real_escape_string($conn,$_POST['dspecilization']);
$demail=mysqli_real_escape_string($conn,$_POST['demail']);
$dpassword=mysqli_real_escape_string($conn,$_POST['dpassword']);

$sql="UPDATE `doctors-name` SET `dname`='$dname',`dfathername`='$dfathername',`dmobilenumber`='$dmobilenumber',`daddress`='$daddress',`dspecilization`='$dspecilization',`demail`='$demail',`dpassword`='$dpassword' WHERE `did`='$up'";
$run=mysqli_query($conn,$sql);
if($run){
    echo "<script>alert('Your data has been updated')</script>";
    header("Refresh:0,url=./view-doctor.php");
}else{
    echo "<script>alert('Your data has not been updated')</script>";

}
}
?>


<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <?php 
include "./include/navbar.php";
?>
            <?php 
include "./include/asidebar.php";
?>

            <!-- Main Content -->
            <div class="main-content">

                <section class="section ">
                    <div class="section-body">
                        <div class="row  justify-content-center">
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="card">
                                    <form method="POST">
                                        <div class="card-header">
                                            <h4>Add A Doctor Detail</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Doctor  Name</label>
                                                <input type="text" name="dname" value="<?php echo $upfet['dname']?>" class="form-control" required="">
                                            </div>
                                            <div class="form-group">
                                                <label>Doctor Father  Name</label>
                                                <input type="text" value="<?php echo $upfet['dfathername']?>" name="dfathername" class="form-control" required="">
                                            </div>
                                            <div class="form-group">
                                                <label>Doctor Mobile number </label>
                                                <input type="text" value="<?php echo $upfet['dmobilenumber']?>" name="dmobilenumber" class="form-control" required="">
                                            </div>
                                            <div class="form-group">
                                                <label>Doctor Email</label>
                                                <input type="eamil" name="demail" value="<?php echo $upfet['demail']?>" class="form-control" required="">
                                            </div>
                                            <div class="form-group">
                                                <label>Doctor Password</label>
                                                <input type="password" value="<?php echo $upfet['dpassword']?>" name="dpassword" class="form-control" required="">
                                            </div>
                                            <div class="form-group">
                                                <label>Doctor Address  </label>
                                                <input type="text" name="daddress" value="<?php echo $upfet['daddress']?>" class="form-control" required="">
                                            </div>
                                            <div class="form-group">
                                                <label>Doctor Specialization  </label>
                                                <input type="text" value="<?php echo $upfet['dspecilization']?>" name="dspecilization" class="form-control" required="">
                                            </div>


                                           
                                        </div>
                                        <div class="card-footer text-right">
                                            <button name="submit" class="btn btn-primary">Update Doctor</button>
                                        </div>
                                    </form>
                                </div>


                                <div class="settingSidebar">
                                    <a href="javascript:void(0)" class="settingPanelToggle"> <i
                                            class="fa fa-spin fa-cog"></i>
                                    </a>
                                    <div class="settingSidebar-body ps-container ps-theme-default">
                                        <div class=" fade show active">
                                            <div class="setting-panel-header">Setting Panel
                                            </div>
                                            <div class="p-15 border-bottom">
                                                <h6 class="font-medium m-b-10">Select Layout</h6>
                                                <div class="selectgroup layout-color w-50">
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="value" value="1"
                                                            class="selectgroup-input-radio select-layout" checked>
                                                        <span class="selectgroup-button">Light</span>
                                                    </label>
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="value" value="2"
                                                            class="selectgroup-input-radio select-layout">
                                                        <span class="selectgroup-button">Dark</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="p-15 border-bottom">
                                                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                                                <div class="selectgroup selectgroup-pills sidebar-color">
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="icon-input" value="1"
                                                            class="selectgroup-input select-sidebar">
                                                        <span class="selectgroup-button selectgroup-button-icon"
                                                            data-toggle="tooltip" data-original-title="Light Sidebar"><i
                                                                class="fas fa-sun"></i></span>
                                                    </label>
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="icon-input" value="2"
                                                            class="selectgroup-input select-sidebar" checked>
                                                        <span class="selectgroup-button selectgroup-button-icon"
                                                            data-toggle="tooltip" data-original-title="Dark Sidebar"><i
                                                                class="fas fa-moon"></i></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="p-15 border-bottom">
                                                <h6 class="font-medium m-b-10">Color Theme</h6>
                                                <div class="theme-setting-options">
                                                    <ul class="choose-theme list-unstyled mb-0">
                                                        <li title="white" class="active">
                                                            <div class="white"></div>
                                                        </li>
                                                        <li title="cyan">
                                                            <div class="cyan"></div>
                                                        </li>
                                                        <li title="black">
                                                            <div class="black"></div>
                                                        </li>
                                                        <li title="purple">
                                                            <div class="purple"></div>
                                                        </li>
                                                        <li title="orange">
                                                            <div class="orange"></div>
                                                        </li>
                                                        <li title="green">
                                                            <div class="green"></div>
                                                        </li>
                                                        <li title="red">
                                                            <div class="red"></div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="p-15 border-bottom">
                                                <div class="theme-setting-options">
                                                    <label class="m-b-0">
                                                        <input type="checkbox" name="custom-switch-checkbox"
                                                            class="custom-switch-input" id="mini_sidebar_setting">
                                                        <span class="custom-switch-indicator"></span>
                                                        <span class="control-label p-l-10">Mini Sidebar</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="p-15 border-bottom">
                                                <div class="theme-setting-options">
                                                    <label class="m-b-0">
                                                        <input type="checkbox" name="custom-switch-checkbox"
                                                            class="custom-switch-input" id="sticky_header_setting">
                                                        <span class="custom-switch-indicator"></span>
                                                        <span class="control-label p-l-10">Sticky Header</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                                                <a href="#"
                                                    class="btn btn-icon icon-left btn-primary btn-restore-theme">
                                                    <i class="fas fa-undo"></i> Restore Default
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    <?php
  include "./include/footer.php";
  ?>
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->

</html>