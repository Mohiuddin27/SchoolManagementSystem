<?php
   require_once "autoload.php";

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
	<link rel="stylesheet" href="assets/css/addstudent.css">
	<link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>
    <?php
      if(isset($_POST['add'])){
          $e_id=$_POST['e_id'];
          $fname=$_POST['fname'];
          $lname=$_POST['lname'];
          $dob=$_POST['dob'];
          $email=$_POST['email'];
          $pass=$_POST['pass'];
          $mobile=$_POST['mobile'];
          $sub=$_POST['sub'];
          $address=$_POST['address'];
          $gender=NULL;
          if(isset($_POST['gender'])){
              $gender=$_POST['gender'];
          }
          if(empty($_POST['e_id']) || empty($_POST['fname'])|| empty($_POST['lname'])||empty($_POST['dob']) || empty($_POST['email'])||empty($_POST['mobile'])|| empty($_POST['sub'])||empty($_POST['address'])||empty($_POST['gender'])){
              $msg=validate('All fields are requird','danger');
          }else if (checkemail($email) == false) {
			$msg = validate('Invalid email address ','danger');
		} else if (ceilcheck($mobile) == false) {
			$msg = validate('Invalid Cell number','danger');
		}else{
            connect()->query("INSERT INTO teachers(e_id,fname,lname,dob,email,password,mobile,subject,address,gender) VALUES('$e_id','$fname','$lname','$dob','$email','$pass','$mobile','$sub','$address','$gender')");
            $msg=validate('Add Student Successful','success');
        }
      }






    ?>
	<section>
        <div class="row" style="background-color:#183555;">
            <div class="col-md-6 mt-2">
                <h3 style="font-size:25px;color:white">British Standard School</h3>
            </div>
            <div class="col-md-6">
                    <nav class="navbar  navbar-expand-lg navbar-light">
         
                        <div class="collapse navbar-collapse heade" id="navbarNavDropdown">
                           <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                       <a class="nav-link nav1" href="#"><i class="fas fa-user-shield"></i> Admin Panel</a>
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
       <div class="row">
           <div class="col-md-2 text-start ml-2 left">
           <h2><a href="admindashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard </a></h2><hr>
                <a href="addstudent.php"><i class="fas fa-user-plus"></i> Add Student</a><hr><br>
               <a href="editstudent.php"><i class="fas fa-user-edit"></i> Edit Student</a><hr><br>
               <a href="searchstudent.php"><i class="fas fa-search"></i> Search Student</a><hr><br>
               <a href="deletestudent.php"><i class="fas fa-user-minus"></i> Delete Student</a><hr><br>
               <a href="addteacher.php"><i class="fas fa-user-plus"></i> Add Teacher</a><hr><br>
               <a href="editteacher.php"><i class="fas fa-user-edit"></i> Edit Teacher</a><hr><br>
               <a href="searchteacher.php"><i class="fas fa-search"></i> Search Teacher</a><hr><br>
               <a href="deleteteacher.php"><i class="fas fa-user-minus"></i> Delete Teacher</a><hr><br>
               <a href="addresult.php"><i class="fas fa-plus-circle"></i> Add Result</a><hr><br>
               <a href="searchresult.php"><i class="fas fa-search"></i> Search Result</a><hr><br>
               <a href="deleteresult.php"><i class="fas fa-user-minus"></i> Delete Result</a><hr><br>
               <a href="payfee.php"><i class="fas fa-money-bill-wave"></i> Pay fee</a><hr><br>
               <a href="paidstudent.php"><i class="fas fa-money-check"></i> who has paid?</a><hr><br>
               <a href="nonpaidstudent.php"><i class="fas fa-user-minus"></i> Who hasn't paid?</a>
           </div>
           
           <div class="col-md-7 offset-md-3 ml-5 addstudent">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center" style="	color:#2196f3;font-weight:600">Add Teacher</h3><hr><br>
                            <?php 
                                  if(isset($msg)){
                                      echo $msg;
                                  }
                            ?>
                <form action="" method="POST" entype="multipart/form-data">
					<div class="form-group">
						<label for="">Employee No</label>
						<input name="e_id" class="form-control"  type="text">
					</div>
					<div class="form-group">
						<label for="">First Name</label>
						<input name="fname"class="form-control"  type="text">
					</div>
					<div class="form-group">
						<label for="">Last Name</label>
						<input name="lname" class="form-control" type="text">
					</div>
                    <div class="form-group">
						<label for="">Date Of Birth</label>
						<input name="dob" class="form-control"  type="date">
					</div>
                    <div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control"  type="text">
					</div>
                    <div class="form-group">
						<label for="">Password</label>
						<input name="pass" class="form-control"  type="password">
					</div>
                    <div class="form-group">
						<label for="">Mobile</label>
						<input name="mobile" class="form-control" type="text">
					</div>
                    <div class="form-group">
						<label for="">Subject</label>
						<input name="sub" class="form-control" type="text">
					</div>
                    <div class="form-group">
						<label for="">Address</label>
						<input name="address" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Gender</label><br>
						<input name="gender"id="Male" value="Male" type="radio"><label for="Male">Male</label>
						<input name="gender"id="Female" value="Female"type="radio"><label for="Female">Female</label>
					</div>
					<div class="form-group">
						<input class="btn btn-primary" type="submit"name="add" value="Add Teacher">
					</div><hr>
					<a class="d-block text-center" href="admindashboard.php">Back to Admin Dashboard</a>
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