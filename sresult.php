<?php
   require_once "autoload.php";
   
   $login_data=loginuserdata('students',$_SESSION['roll']);
   
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
	<link rel="stylesheet" href="assets/css/sresult.css">
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
    <a class="nav-link active" href="studentdashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
  </li>
  <li class="nav-item ml-5">
    <a class="nav-link" href="view.php"><i class="fas fa-eye"></i> View Details</a>
  </li>
  <li class="nav-item ml-5">
    <a class="nav-link" href="sedit.php"><i class="fas fa-user-edit"></i> Edit Details</a>
  </li>
  <li class="nav-item ml-5">
    <a class="nav-link" href="sresult.php"><i class="fas fa-search"></i> Show Result</a>
  </li>
</ul>
</div>
  </section>
 <section>
     <div class="container">
         
                        <h3 class="text-center" style="margin-top:30px;color:#2196f3;font-weight:600">Show Results</h3><br>
                        <?php 

  $data=connect()->query("SELECT * from results where roll_no='{$_SESSION['roll']}'");
  while($login_data=$data->fetch_object())
  
{
?>
                <table class="table mt-5">
  <thead>
    <tr>
      <th >Subject</th>
      <th >Test1 Marks</th>
      <th >Test2 Marks</th>
      <th>Test3 Marks</th>
      <th >Total Marks</th>
    </tr>
  </thead>
  <tbody>

    <tr>
      <td style="font-weight:600">Bangla</td>
      <td><?php echo $login_data->bangla1;?></td>
      <td><?php echo $login_data->bangla2;?></td>
      <td><?php echo $login_data->bangla3;?></td>
      <td><?php $num1=$login_data->bangla1;
      $num2=$login_data->bangla2;
      $num3=$login_data->bangla2;
      echo $num1+$num2+$num3;
      
      
      
      ?></td>
    </tr>
    <tr>
      <td style="font-weight:600">English</td>
      <td><?php echo $login_data->english1;?></td>
      <td><?php echo $login_data->english2;?></td>
      <td><?php echo $login_data->english3;?></td>
      <td><?php $num1=$login_data->english1;
      $num2=$login_data->english2;
      $num3=$login_data->english3;
      echo $num1+$num2+$num3;
      
      
      
      ?></td>
    </tr>
    <tr>
      <td style="font-weight:600">Math</td>
      <td><?php echo $login_data->math1;?></td>
      <td><?php echo $login_data->math2;?></td>
      <td><?php echo $login_data->math3;?></td>
      <td><?php $num1=$login_data->math1;
      $num2=$login_data->math2;
      $num3=$login_data->math3;
      echo $num1+$num2+$num3;
      
      
      
      ?></td>
    </tr>
    <tr>
      <td style="font-weight:600">Science</td>
      <td><?php echo $login_data->science1;?></td>
      <td><?php echo $login_data->science2;?></td>
      <td><?php echo $login_data->science3;?></td>
      <td><?php $num1=$login_data->science1;
      $num2=$login_data->science2;
      $num3=$login_data->science3;
      echo $num1+$num2+$num3;
      
      
      
      ?></td>
    </tr>
  </tbody>
     
    </table>
   
    <?php
   
}
?>
               
                     

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