<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500&display=swap" rel="stylesheet">

    <title>SL Website Design</title>

  </head>
  <body>

<section class="alpha_top">
<nav>
  <img src="pictures/logo.png">
  <div id="navBar" class="alpha_nav">
    <i class="fa fa-bars" onclick="hide()"></i>
    <ul>
      <li><a href="logout.php">Log out</a></li>

    </ul>
  </div>
  <i class="fa fa-bars" onclick="show()"></i>
</nav>

<div class="alpha_text">
<h1>Moving your products across all borders</h1>
<p>Specialized in transporting mobile units, like prefabricated buildings, park homes, offices, containers <br> and other mobile units that are both old and new.</p>
<a href="#whyus" class="alpha_button"> Learn more</a>

</div>
</section>

<section class="alpha__beta" id="whyus">
  <h1>Why GoCargoShip Logistics?</h1>
  <h2>Mission</h2>
  <p>We are on a mission to become the world’s preferred supply chain logistics company  by applying insight, service quality and innovation to create sustainable growth for business and society.</p>
  <hr>
  <h2>Vision</h2>
  <p>Connecting people, businesses & communities to a better future through logistics</p>
  <hr>
  <h2>Values</h2>
  <p>Connected -- ( We invest in insight to get to the heart of our customers’ challenges. )</p>
  <p>Creative -- (  If we find a better way, we act upon it and share it. )</p>
  <p>Committed -- ( Our dedication to quality is the cornerstone of our success. )</p>

</section>


<section class="team" >
  <h1>Our team</h1>

  <div class="row">
    <div class="team-col">
      <img src="pictures/fahad.jpg">
      <h3>Fahad Shahzeb</h3>
      <h3>SP19-BSE-004</h3>
      <h3>BS (SE)</h3>
      <h3>Managing Director</h3>
    </div>

    <div class="team-col">
      <img src="pictures/abdullah.jpg">
      <h3>Abdullah Rauf</h3>
      <h3>SP19-BSE-007</h3>
      <h3>BS (SE)</h3>
      <h3>General Manager</h3>
    </div>

    <div class="team-col">
      <img src="pictures/shabi.jpg">
      <h3>Shabi Kazmi</h3>
      <h3>SP19-BSE-036</h3>
      <h3>BS (SE)</h3>
      <h3>Operations Manager</h3>
    </div>

    <div class="team-col">
      <img src="pictures/taha.jpg">
      <h3>Muhammad Taha</h3>
      <h3>SP19-BSE-042</h3>
      <h3>BS (SE)</h3>
      <h3>Human Resource</h3>
    </div>


  </div>

</section >

<section class="services">
  <h1>Our Services</h1>
  <p>We provide our customers with the most executive services.</p><br><br>
  <div class="row">
    <div class="services_col">
      <img src="pictures/courier.jpeg" >
      <h3>Within City Cargo</h3>
      <p>We are on a mission to become the world’s preferred supply chain logistics company  by applying insight, service quality and innovation to create sustainable growth for business.</p>
    </div>
    <div class="services_col">
      <img src="pictures/cargo.jpg" >
      <h3>International Cargo</h3>
      <p>We are on a mission to become the world’s preferred supply chain logistics company  by applying insight, service quality and innovation to create sustainable growth for business.</p>
    </div>
    <div class="services_col">
      <img src="pictures/aircargo.jpg" >
      <h3>Domestic Cargo</h3>
      <p>We are on a mission to become the world’s preferred supply chain logistics company  by applying insight, service quality and innovation to create sustainable growth for business.</p>
    </div>
    <div class="services_col">
      <img src="pictures/carTransport.jpg" >
      <h3>Car Cargo</h3>
      <p>We are on a mission to become the world’s preferred supply chain logistics company  by applying insight, service quality and innovation to create sustainable growth for business.</p>
    </div>
  </div>

</section>


<div id="blos" class="">
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
