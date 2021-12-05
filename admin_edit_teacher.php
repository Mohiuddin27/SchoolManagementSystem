<?php
require_once "autoload.php";
if(isset($_POST['edit'])){
    $e_id=$_POST['e_id'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $dob=$_POST['dob'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $mobile=$_POST['mobile'];
    $sub=$_POST['sub'];
    $address=$_POST['address'];
    connect()->query("UPDATE teachers SET e_id='$e_id',fname='$fname',lname='$lname',dob='$dob',email='$email',password='$pass',mobile='$mobile',subject='$sub', address='$address' where e_id='$e_id'");
    
}
?>
<script type="text/javascript">
	alert("Details edited successfully.");
	window.location.href = "editstudent.php";
</script>