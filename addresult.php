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
    <link rel="stylesheet" href="assets/css/addresult.css">
	<link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>
    <?php

     if(isset($_POST['submit'])){
         $ban1=$_POST['ban1'];
         $ban2=$_POST['ban2'];
         $ban3=$_POST['ban3'];
         $eng1=$_POST['eng1'];
         $eng2=$_POST['eng2'];
         $eng3=$_POST['eng3'];
         $math1=$_POST['math1'];
         $math2=$_POST['math2'];
         $math3=$_POST['math3'];
         $sci1=$_POST['sci1'];
         $sci2=$_POST['sci2'];
         $sci3=$_POST['sci3'];
         $roll=$_POST['roll'];

         connect()->query("INSERT INTO results (roll_no,bangla1,bangla2,bangla3,english1,english2,english3,math1,math2,math3,science1,science2,science3) VALUES('$roll','$ban1','$ban2','$ban3','$eng1','$eng2','$eng3','$math1','$math2','$math3','$sci1','$sci2','$sci3')");
     }




    ?>
    
	<div class="container">
        <div class="heading">
            <h2 style="margin-top:60px;color:#29ffeba6;"class="text-center">Enter Marks of the Student</h2>
            <span style="width:390px; border:2px solid white;margin:0 auto;display:block;"></span>
        </div>
        <div class="table1">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Subject</th>
      <th scope="col">Test1</th>
      <th scope="col">Test2</th>
      <th scope="col">Test3</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <form action="" method="POST">
      <td style="font-weight:600">Bangla</td>
      <td><input type="text" name="ban1"></td>
      <td><input type="text" name="ban2"></td>
      <td><input type="text" name="ban3"></td>
    </tr>
    <tr>
      <td style="font-weight:600">English</td>
      <td><input type="text" name="eng1"></td>
      <td><input type="text" name="eng2"></td>
      <td><input type="text" name="eng3"></td>
    </tr>
    <tr>
      <td style="font-weight:600">Math</td>
      <td><input type="text" name="math1"></td>
      <td><input type="text" name="math2"></td>
      <td><input type="text" name="math3"></td>
    </tr>
    <tr>
      <td style="font-weight:600">Science</td>
      <td><input type="text" name="sci1"></td>
      <td><input type="text" name="sci2"></td>
      <td><input type="text" name="sci3"></td>
    </tr>
  </tbody>
</table>
<div class="rollno">
    <span style="font-weight:700;color:white">Roll No: </span><input class="w-25" type="text" placeholder="Enter roll no.." name="roll"><br>
    <input type="submit" name="submit" class="w-25 mt-3 btn btn-info" style="margin-left:60px; font-weight:600" value="Add Result">
</div>
</form>
        </div>
    </div>
    <a href="admindashboard.php" class="d-block text-center text-primary ml-5 mt-3" style="font-size:20px;font-weight:600;">Back to Admin Dashboard</a>
    

	<!-- JS FILES  -->
  <script src="assets/js/script.js"></script>
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>