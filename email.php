<?php 

if(isset($_POST['send'])){
    $name=$_POST['name'];
    $subject=$_POST['subject'];
    $emailfrom=$_POST['email'];
    $msg=$_POST['msg'];

    $mailto="sobujmohiuddin1426@gmail.com";
    $headers="From: ".$emailfrom;
    $txt="You have received an E-mail from".$name.".\n\n".$msg;
  
   
}


?>