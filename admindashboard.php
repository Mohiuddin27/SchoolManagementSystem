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
	<link rel="stylesheet" href="assets/css/admindash.css">
	<link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>
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
           <?php
              $query=connect()->query("SELECT a_id FROM admin order by a_id");
              $row= mysqli_num_rows($query);
              $query=connect()->query("SELECT id FROM students order by id");
              $row2= mysqli_num_rows($query);
              $query=connect()->query("SELECT e_id FROM teachers order by e_id");
              $row3= mysqli_num_rows($query);

           ?>
           <div class="col-md-7 offset-md-3"style="margin-top:-1100px">
                    <div class="row">
                        <div class="col-md-6">
                        <h4><i class="fas fa-info-circle"></i> Admin Dashboard</h4>
                        <div class="card" style="margin-top:70px;margin-left:200px; width:300px">
                            <div class="card-body">
                                <h4><i class="fas fa-user-shield"></i> Total Admin <?php echo $row; ?></h4>
                            </div>
                        </div>
                        <div class="card" style="margin-top:70px; width:300px">
                            <div class="card-body">
                                <h4><i class="fas fa-user-graduate"></i> Total students <?php echo $row2; ?></h4>
                            </div>
                            
                        </div>
                        <a href="viewstudent.php" class="btn btn-primary mt-3">View Students</a>
                        </div>
                        <div class="col-md-6 text-right">
                        <h5 style="font-size:15px;"><span style="color:green">Name:</span> <?php echo $_SESSION['name'] ?></h5>
                        <h5  style="font-size:15px;"><span style="color:navy">Email:</span> <?php echo $_SESSION['email'] ?></h5>
                        <div class="card" style="margin-top:200px;width:300px;">
                            <div class="card-body text-left">
                                <h4><i class="fas fa-chalkboard-teacher"></i> Total Teacher's <?php echo $row3; ?></h4>
                            </div>
                        </div>
                        </div>
                        <!-- <a href="viewteacher.php" class="btn btn-primary" style="margin-left:400px;margin-top:-40px;">View Teacher's</a> -->
                        <a href="viewteacher.php" class="btn btn-primary" style="margin-left:400px;margin-top:-20px">View Teacher's</a>
                        
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