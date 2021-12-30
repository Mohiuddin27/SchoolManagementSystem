<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
  <link rel="stylesheet" href="assets/css/all.min.css">
  <link rel="stylesheet" href="assets/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body style="background-color:white;">
	
    <section style="background-color:black"class="header">
       <nav class="navbar  navbar-expand-lg navbar-light bg-black">
         <div class="container">
           <div class="col-md-6 col-12">
            <a class="navbar-brand" href="#"><img style="width:70%"src="media/logo.png"></a>
            </div>
            <div class="col-md-6 col-12">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
           <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto mt-1">
                 <li class="nav-item">
                    <a class="nav-link nav2" href="index.php">Home</a>
                 </li>
                <li class="nav-item">
                    <a class="nav-link nav1" href="admission.php">Admission</a>
                </li>
               
                 <li class="nav-item">
                    <a class="nav-link nav2" href="about_us.php">About us</a>
                 </li>
                <li class="nav-item">
                    <a class="nav-link nav2" href="contact_us.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav2" href="career.php">Career</a>
                 </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav2" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Login
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item log" href="adminlogin.php">Admin Login</a>
                    <a class="dropdown-item log" href="studentlogin.php">Student Login</a>
                    <a class="dropdown-item log" href="teacherlogin.php">Teacher Login</a>
                    </div>
                </li>
              </ul>
           </div>
           </div>
       </div>
    </nav>

  <!-- background image section start -->
  <section class="background">
       <img style="width:100%"src="media/b12.png" alt="background">
  </section>
  <section class="admit-form" style="background-color:white">
      <div class="container">
          <div class="row">
              <div class="col-md-8 offset-2">
              <form action="" style="margin-top:40px;">
					<div class="form-group">
						<label for="">Student's Name<span style="color:red">*</span></label>
						<input  style="border:2px solid #88C83C"class="form-control" type="text" placeholder="Name">
					</div>
					<div class="form-group">
						<label for="">Father’s Name<span style="color:red">*</span></label>
						<input style="border:2px solid #88C83C" class="form-control" type="text" placeholder="Father's name">
					</div>
					<div class="form-group">
						<label for="">Mother's Name<span style="color:red">*</span></label>
						<input style="border:2px solid #88C83C" name="name" class="form-control" type="text" placeholder="Father's name">
					</div>
					<div class="form-group" style="width:45%">
						<label for="">Date of Birth<span style="color:red">*</span></label>
						<input style="border:2px solid #88C83C" name="name" class="form-control" type="date">
					</div>
                    <div class="form-group" style="width:50%;float:right;margin-top:-85px;">
                    <label for="cars">Gender<span style="color:red">*</span></label>

                        <select style="border:2px solid #88C83C" name="cars" class="form-control"id="cars">
                        <option value="volvo">Male</option>
                        <option value="saab">Female</option>
                        <option value="mercedes">Other</option>
                     
                        </select>
					</div>
                    <div class="form-group">
						<label for="">Contact No<span style="color:red">*</span></label>
						<input style="border:2px solid #88C83C"name="name" class="form-control" type="text" placeholder="Contact Number">
					</div>
                    <div class="form-group" style="width:47%">
                    <label for="cars">Applying for which grade? <span style="color:red">*</span></label>

                        <select style="border:2px solid #88C83C"name="cars" class="form-control"id="cars">
                        <option value="volvo">Grade 1</option>
                        <option value="saab">Grade 2</option>
                        <option value="mercedes">Grade 3</option>
                        <option value="mercedes">Grade 4</option>
                        <option value="mercedes">Grade 5</option>
                        <option value="mercedes">Grade 6</option>
                        <option value="mercedes">Grade 7</option>
                        <option value="mercedes">Grade 8</option>
                        <option value="mercedes">Grade 9</option>

                     
                        </select>
					</div>
                    <div class="form-group" style="width:50%;float:right;margin-top:-85px;">
                    <label for="cars">Applying for which year?<span style="color:red">*</span></label>

                        <select name="cars"style="border:2px solid #88C83C" class="form-control"id="cars">
                        <option value="volvo">2022</option>
                        <option value="saab">2023</option>
                        <option value="mercedes">2024</option>
                        <option value="volvo">2025</option>
                        <option value="saab">2026</option>
                        <option value="mercedes">2027</option>
                        <option value="volvo">2028</option>
                        <option value="saab">2029</option>
                        <option value="mercedes">2030</option>
                     
                        </select>
					</div>
                   
					<div class="form-group">
						<label for="">Email<span style="color:red">*</span></label>
						<input style="border:2px solid #88C83C" name="name" class="form-control" placeholder="Email" type="text">
					</div>
                    <div class="form-group">
						<label for="">Message<span style="color:red">*</span></label>
						<textarea style="border:2px solid #88C83C"  class="form-control rounded-0" placeholder="Message" rows="5"></textarea>
					</div>
					
					<div class="form-group">
						<input class="btn-b" type="submit" name="add" value="Sign Up">
					</div>
				</form>

              </div>
          </div>
      </div>
  </section>
  
 <!-- footer-start -->
<section class="mt-3">
<div class="container">
  <div class="row">
    <div class="col-md-7">
    <img src="media/b1.png" alt="b1">
    <img src="media/b2.png" alt="b2">
      
    </div>
    <div class="col-md-5 text-center">
    <i class="fab fa-facebook"></i>
    <i class="fab fa-twitter"></i>
    <i class="fab fa-youtube"></i>
    <i class="fas fa-envelope"></i>
    </div>
  </div>
</div>
</scection>

<!-- footer-end -->
  


	<!-- JS FILES  -->
  <script src="assets/js/script.js"></script>
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>