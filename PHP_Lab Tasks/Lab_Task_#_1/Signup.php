<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Signup.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500&display=swap" rel="stylesheet">

    <title>SL Website Design</title>

  </head>
  <body class="text-center">

<section class="alpha_top">
<nav>
  <img src="pictures/logo.png">
  <div id="navBar" class="alpha_nav">
    <i class="fa fa-bars" onclick="hide()"></i>
    <ul>
      <li><a href="Signup.php">Sign Up</a></li>
      <li><a href="SignIn.php">Sign in</a></li>
    </ul>
  </div>
  <i class="fa fa-bars" onclick="show()"></i>
</nav>

<div class="alpha_text">
<h1>Sign Up</h1>
<form class="form-signin" action="registration.php" method="post">
  <label for="name" class="sr-only">Full Name:</label>
  <input type="name" name="Fullname" id="name" class="form-control" placeholder="Enter full name" required autofocus autocomplete="off">

  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autocomplete="off">

  <label for="inputEmail" class="sr-only">Confirm Email address</label>
  <input type="email" id="inputEmail" name="Cemail" class="form-control" placeholder="Re-Enter Email address" required autocomplete="off">

  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required autocomplete="off"><br>



  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
</form>
</section>

</div>
</section>

<section>


<div id="blos" class="footer">
  <p>We firmly believe that by helping people travel more, explore the world and experience diversity, we create a meaningful socio-economic impact.</p>
  <img src="https://i.ibb.co/312nBXG/a.png" width="2%" ></img>
  <img src="https://i.ibb.co/xLMj0Qf/b.png" width="2%" ></img>
  <img src="https://i.ibb.co/JrP3FTZ/d.png" width="2%" ></img>
  <img src="https://i.ibb.co/pXftFZ4/f.png" width="2.02%" ></img><br>
  <a href="mailto:alphabeta@example.com" line-height="3px";>GoCargoShip Logistics</a><br>

</div>


<script>

  var navBar =document.getElementById("navBar");

  function show(){
    navBar.style.right="0";
  }
  function hide(){
    navBar.style.right="-200px";
  }
</script>
  </body>
</html>
