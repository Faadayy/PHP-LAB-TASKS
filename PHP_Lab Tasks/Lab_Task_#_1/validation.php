<?php
  session_start();

  $connecter =  mysqli_connect("localhost","fahad","hahaowky","users");
  $Emaill = $_POST["email"];
  $Pass = $_POST["password"];

  $alpha = "select * from usertable where email='$Emaill' and password='$Pass'";
  $alpha_result= mysqli_query($connecter,$alpha);
  if (mysqli_num_rows($alpha_result)==1) {
    $_SESSION['email'];
    header("location: home.php");
  }else {
    header("location: logout.php");
  }

 ?>
