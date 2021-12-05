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
	<link rel="stylesheet" href="assets/css/editstudentcss.css">
	<link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body class="showstudent">
    
    <div class="container">
	<h3 style="text-align:center;margin-top:70px;">British Standard School<h3><hr style="width:70%;display:blok;margin:0 auto;">
    </div>
    <div class="container">
        <div class="row">
        <?php

            if(isset($_POST['add'])){
                $roll=$_POST['roll'];

                $edit=connect()->query("SELECT students.roll_no,father_name,fname,lname,dob,bangla1,bangla2,bangla3,math1,math2,math3,english1,english2,english3,science1,science2,science3 FROM students INNER JOIN results where students.roll_no='$roll' AND results.roll_no='$roll'");
                while($edit_id=$edit->fetch_object())
            {
        ?>
            <div class="col-md-6"style="padding-left:200px;">
                <h6>First Name:<?php echo $edit_id->fname;?></h6>
                <h6>Last Name:<?php echo $edit_id->lname;?></h6>
                <h6>Father's Name:<?php echo $edit_id->father_name ?> </h6>

            </div>
            <div class="col-md-6"style="padding-left:170px;">
                <h6>Roll No: <?php echo $edit_id->roll_no ?></h6>
                <h6>Date of Birth: <?php echo $edit_id->dob ?></h6>

            </div><hr style="width:70%;display:blok;margin:0 auto;">
            <?php
            }
        }
        ?>
        </div>
    </div>
   <div class="container">
   <?php

if(isset($_POST['add'])){
    $roll=$_POST['roll'];

    $edit=connect()->query("SELECT students.roll_no,father_name,fname,lname,dob,bangla1,bangla2,bangla3,math1,math2,math3,english1,english2,english3,science1,science2,science3 FROM students INNER JOIN results where students.roll_no='$roll' AND results.roll_no='$roll'");
    while($edit_id=$edit->fetch_object())
{
?>
           <table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">Subject</th>
      <th scope="col">Test1 Marks</th>
      <th scope="col">Test2 Marks</th>
      <th scope="col">Test3 Marks</th>
      <th scope="col">Total Marks</th>
    </tr>
  </thead>
  <tbody>

    <tr>
      <td style="font-weight:600">Bangla</td>
      <td><?php echo $edit_id->bangla1;?></td>
      <td><?php echo $edit_id->bangla2;?></td>
      <td><?php echo $edit_id->bangla3;?></td>
      <td><?php $num1=$edit_id->bangla1;
      $num2=$edit_id->bangla2;
      $num3=$edit_id->bangla2;
      echo $num1+$num2+$num3;
      
      
      
      ?></td>
    </tr>
    <tr>
      <td style="font-weight:600">English</td>
      <td><?php echo $edit_id->english1;?></td>
      <td><?php echo $edit_id->english2;?></td>
      <td><?php echo $edit_id->english3;?></td>
      <td><?php $num1=$edit_id->english1;
      $num2=$edit_id->english2;
      $num3=$edit_id->english3;
      echo $num1+$num2+$num3;
      
      
      
      ?></td>
    </tr>
    <tr>
      <td style="font-weight:600">Math</td>
      <td><?php echo $edit_id->math1;?></td>
      <td><?php echo $edit_id->math2;?></td>
      <td><?php echo $edit_id->math3;?></td>
      <td><?php $num1=$edit_id->math1;
      $num2=$edit_id->math2;
      $num3=$edit_id->math3;
      echo $num1+$num2+$num3;
      
      
      
      ?></td>
    </tr>
    <tr>
      <td style="font-weight:600">Science</td>
      <td><?php echo $edit_id->science1;?></td>
      <td><?php echo $edit_id->science2;?></td>
      <td><?php echo $edit_id->science3;?></td>
      <td><?php $num1=$edit_id->science1;
      $num2=$edit_id->science2;
      $num3=$edit_id->science3;
      echo $num1+$num2+$num3;
      
      
      
      ?></td>
    </tr>
  </tbody>
     
    </table>
    
    <?php
            }
        }
        ?>
    
   </div>
	<!-- JS FILES  -->
  <script src="assets/js/script.js"></script>
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>