<?php
   require_once "autoload.php";
   
   $login_data=tloginuserdata('teachers',$_SESSION['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
   <link rel="stylesheet" href="assets/css/all.min.css">
   <link rel="stylesheet" href="assets/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/studentdash.css">
	<link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>
   
	<section>
        
        <div class="row" style="background-color:#183555;">
            <div class="col-md-6 mt-2">
                <h3 style="font-size:25px;color:white">British Standard School</h3>
            </div>
            <div class="col-md-6">
                    <nav class="navbar  navbar-expand-lg  navbar-light">
         
                        <div class="collapse navbar-collapse heade" id="navbarNavDropdown">
                           <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                       <a class="nav-link nav1" href="#"><i class="fas fa-user-graduate"></i> Student Panel</a>
                                   </li>
               
                                   <li class="nav-item dropdown">
                                      <a class="nav-link dropdown-toggle nav2" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Account
                                   </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item log" href="logout.php">Logout</a>
                
                        </div>
                       </li>
                    </ul>
                </div>
      
               </nav>
            </div>
        </div>
       
   </section>
   <section>
    <div class="navv">
   <ul class="nav justify-content-center">
  <li class="nav-item ml-5">
    <a class="nav-link active" href="teacherdashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
  </li>
  <li class="nav-item ml-5">
    <a class="nav-link" href="tview.php"><i class="fas fa-eye"></i> View Details</a>
  </li>
  <li class="nav-item ml-5">
    <a class="nav-link" href="tedit.php"><i class="fas fa-user-edit"></i> Edit Details</a>
  </li>

</ul>
</div>
  </section>
 <section>
     <div class="container">
         <div class="card mt-5 mb-5">
                        <div class="card-body">
                        <h3 class="text-center" style="	color:#2196f3;font-weight:600">Edit Details</h3><hr><br>
                        <?php 

if(isset($_GET['id'])){
  $edit_id=$_GET['id'];
  $data=connect()->query("SELECT * from teachers where e_id='$edit_id'");
  $login_data=$data->fetch_object();
}
?><?php

if(isset($_POST['edit'])){
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $dob=$_POST['dob'];
  $email=$_POST['email'];
  $pass=$_POST['pass'];
  $mobile=$_POST['mobile'];
  $subject=$_POST['subject'];
  $address=$_POST['address'];
  connect()->query("UPDATE teachers SET fname='$fname',lname='$lname',dob='$dob',email='$email',password='$pass',mobile='$mobile',subject='$subject',address='$address' where e_id='{$_SESSION['id']}'");

}

?>
                <form action="" method="POST" entype="multipart/form-data">
					<div class="form-group">
						<label for="">Roll No</label>
						<input name="roll_no" class="form-control" value="<?php echo $login_data->e_id; ?>" type="text" disabled>
					</div>
					<div class="form-group">
						<label for="">First Name</label>
						<input name="fname"class="form-control" value="<?php echo $login_data->fname; ?>" type="text">
					</div>
					<div class="form-group">
						<label for="">Last Name</label>
						<input name="lname" class="form-control" value="<?php echo $login_data->lname; ?>" type="text">
					</div>
                    <div class="form-group">
						<label for="">Date Of Birth</label>
						<input name="dob" class="form-control" value="<?php echo $login_data->dob; ?>"  type="date" >
					</div>
                    <div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" value="<?php echo $login_data->email; ?>"  type="text" >
					</div>
                    <div class="form-group">
						<label for="">Password</label>
						<input name="pass" class="form-control" value="<?php echo $login_data->password;?>"  type="text">
					</div>
                    <div class="form-group">
						<label for="">Mobile</label>
						<input name="mobile" class="form-control" value="<?php echo $login_data->mobile; ?>" type="text">
					</div>
                    <div class="form-group">
						<label for="">Subject</label>
						<input name="subject" class="form-control" value="<?php echo $login_data->subject; ?>" type="text">
					</div>
                    <div class="form-group">
						<label for="">Address</label>
						<input name="address" class="form-control" value="<?php echo $login_data->address; ?>" type="text">
					</div>
					<div class="form-group">
						<input class="btn btn-primary" type="submit" name="edit" value="Edit Details">
					</div>
				</form>
               
                        </div>
                    </div>

     </div>
</section>


	<!-- JS FILES  -->
  <script src="assets/js/script.js"></script>
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>