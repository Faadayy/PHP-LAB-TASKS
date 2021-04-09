<?php
  session_start();
  header("location: SignIn.php");


  $connecter =  mysqli_connect("localhost","fahad","hahaowky","users");
  $name = $_POST['Fullname'];
  $Emaill = $_POST["email"];
  $Re_email = $_POST["Cemail"];
  $Pass = $_POST["password"];

  $alpha = "select * from usertable where email='$Emaill'";
  $alpha_result= mysqli_query($connecter,$alpha);
  if (mysqli_num_rows($alpha_result)==1) {
    echo "User Already Registered";
  }else {
    $beta = "insert into usertable(name,email,emailconf,password) values ('$name','$Emaill','$Re_email','$Pass')";
    mysqli_query($connecter,$beta);
    echo "User Successfully Registered";
  }

 ?>
