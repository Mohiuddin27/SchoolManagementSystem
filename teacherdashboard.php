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
   <div class="container std">
       <div class="row">
           <div class="col-md-6">
           <h4 class="text-center"><i class="fas fa-info-circle"></i> Teacher Dashboard</h4>
           </div>
           <div class="col-md-6">
               <h5 class="text-right"><span style="color:#150ac3;font-weight:600">Name: </span><?php    $fname=$_SESSION['fname'];
                                $lname=$_SESSION['lname'];
                                echo "{$fname}".' '."{$lname}" ;        ?></h5>

                <h5 class="text-right"><span style="color:#009688;font-weight:600">Email:</span><?php echo $_SESSION['email']; ?>
           
           </div>
       </div>
   </div>
 </sction>


	<!-- JS FILES  -->
  <script src="assets/js/script.js"></script>
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>