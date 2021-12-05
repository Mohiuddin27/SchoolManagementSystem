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
    <link rel="stylesheet" href="assets/css/viewstudent.css">
	<link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>
    <?php 
        $get=connect()->query("SELECT * FROM teachers");


     ?>
    <div class="container">
    <h2 class="text-center mt-5" style="color:#0089ff;">All Teacher's List</h2>
    <span style="width:250px; border:2px solid white;margin:0 auto;display:block;"></span>
        <div class="card">
            <div class="card-body">
            <table class="table">
  <thead>
      <th>#</th>
      <th>Employee_Id</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Date Of Birth</th>
      <th>Email</th>
      <th>Mobile</th>
      <th>Subject</th>
      <th>Gender</th>
      <th>Address</th>
    </tr>
  </thead>
  <?php 
  $i=1;
  while($get_all=$get->fetch_object()): ?>
    <tr>
      <td><?php echo $i ;$i=$i+1;?></td>
      <td><?php echo $get_all->e_id; ?></td>
      <td><?php echo $get_all->fname; ?></td>
      <td><?php echo $get_all->lname; ?></td>
      <td><?php echo $get_all->dob; ?></td>
      <td><?php echo $get_all->email; ?></td>
       <td><?php echo $get_all->mobile; ?></td>
      <td><?php echo $get_all->subject; ?></td>
      <td><?php echo $get_all->gender; ?></td>
      <td><?php echo $get_all->address; ?></td>
    </tr>
    <?php endwhile; ?>
  </tbody>
</table>
  </div>
        </div>
        <div class="btnn">
        <a href="admindashboard.php" class="btn btn-info" type="button">Back to Admin Dashboard</a>
  </div>
    </div>


	<!-- JS FILES  -->
  <script src="assets/js/script.js"></script>
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>