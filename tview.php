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
                                    <a class="nav-link nav1" href="#"><i class="fas fa-chalkboard-teacher"></i> Teacher Panel</a>
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
 <?php 

if(isset($_GET['id'])){
  $edit_id=$_GET['id'];
  $data=connect()->query("SELECT * from teachers where e_id='$edit_id'");
  $login_data=$data->fetch_object();
}
?>
     <div class="container">
         <div class="card mt-5">
                        <div class="card-body">
                            <h3 class="text-center" style="	color:#2196f3;font-weight:600">View Details</h3><hr><br>
                <form action="" method="POST" entype="multipart/form-data">
					<div class="form-group">
						<label for="">Empolyee Id</label>
						<input name="roll_no" class="form-control" value="<?php echo $login_data->e_id; ?>" type="text" disabled>
					</div>
					<div class="form-group">
						<label for="">First Name</label>
						<input name="fname"class="form-control" value="<?php echo $login_data->fname;  ?>" type="text" disabled>
					</div>
					<div class="form-group">
						<label for="">Last Name</label>
						<input name="lname" class="form-control" value="<?php echo $login_data->lname; ?>" type="text" disabled>
					</div>
                    <div class="form-group">
						<label for="">Date Of Birth</label>
						<input name="dob" class="form-control" value="<?php echo $login_data->dob; ?>"  type="date" disabled>
					</div>
                    <div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" value="<?php echo $login_data->email; ?>"  type="text" disabled>
					</div>
                    <div class="form-group">
						<label for="">Password</label>
						<input name="pass" class="form-control" value="<?php echo $login_data->password; ?>"  type="text" disabled>
					</div>
                    <div class="form-group">
						<label for="">Mobile</label>
						<input name="mobile" class="form-control" value="<?php echo $login_data->mobile; ?>" type="text" disabled>
					</div>
                    <div class="form-group">
						<label for="">Subject</label>
						<input name="subject" class="form-control" value="<?php echo $login_data->subject;?>" type="text" disabled>
					</div>
                     <div class="form-group">
						<label for="">Address</label>
						<input name="address" class="form-control" value="<?php echo $login_data->address; ?>" type="text" disabled>
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