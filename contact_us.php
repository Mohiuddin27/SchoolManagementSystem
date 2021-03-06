<DOCTYPE html>
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
<body >
	
    <section class="header">
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
                    <a class="nav-link nav2" href="admission.php">Admission</a>
                </li>
                
                 <li class="nav-item">
                    <a class="nav-link nav2" href="about_us.php">About us</a>
                 </li>
                <li class="nav-item">
                    <a class="nav-link nav1" href="contact_us.php">Contact</a>
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

   </section>
   <section>
       <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.832757170117!2d90.4153034149807!3d23.717665684605567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b854b8e29963%3A0x4b7d813cdf6e49d7!2sBritish%20Standard%20School!5e0!3m2!1sen!2sbd!4v1640968253765!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
  </section>
  <section class="get-in-touch ">
    <div class="container">
    <div class="row">
        <div class="col-md-6">
          <h2 class="pt-5" style="font-size:22px;font-weight:600">GET IN TOUCH</h2>
          <p>British Standard School provides international education experience for all<br> students starting from early childhood until high school.</p>
          <i class="far fa-envelope"></i> <span style="color:#151414ab">britishstandardschool@lmischool.net</span><br>
          <i class="fas fa-mobile-alt"></i> <span style="color:#151414ab">02-9532093. 9574330, 01919-946677</span><br>
          <i class="fas fa-map-marked-alt"></i> <span style="color:#151414ab">Campus 1: 16/1-A Rankin Street, Wari. Dhaka-1203. Bangladesh</span><br>
          <i class="fas fa-map-marked-alt"></i> <span style="color:#151414ab">Campus 2: 22/3, Larmini street, wari. Dhaka 1203. Bangladesh</span><br>
        </div>
    
        <div class="col-md-6">
            <div class="card shadow w-75 mt-3 mb-5">
                <div class="card-body">
                    <h4 class="mb-5" style="font-weight:600">
SAY SOMETHING</h4>
                <form action="" id="myform" >
					<div class="form-group">
						
						<input id="name" style="border:2px solid #88C83C" name="name" placeholder="Name"class="form-control" type="text">
					</div>
					<div class="form-group">
						
						<input id="email" style="border:2px solid #88C83C" name="email" placeholder="Email" class="form-control" type="text">
					</div>
					<div class="form-group">
						
                    <textarea id="body" style="border:2px solid #88C83C" name="msg" class="form-control rounded-0" placeholder="Message" rows="5"></textarea>
					</div>
					
					<div class="form-group">
                    <input id="submit" onclick="sendEmail()" type="button" class="btn  btnn" name="submit" value="SEND">
                  
                    </div>
				</form>
                </div>
            </div>
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
  <script>
   function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var body = $("#body");

            if (isNotEmpty(name) && isNotEmpty(email)  && isNotEmpty(body)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       body: body.val()
                   }, success: function (response) {
                        $('#myForm')[0].reset();
                        $('.sent-notification').text("Message Sent Successfully.");
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>
</body>
</html>