<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
      <!--    INTERNET META-->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!--FIRST MOBILE META    -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>DIGI HOUSE| Contact Us</title>
    <link rel="shortcut Icon" href="img/logo.png">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="css/pages.css">
    <link rel="stylesheet" href="css/default-theme.css">
    <link rel="stylesheet" href="css/hover.css">
    <link rel="stylesheet" href="css/animate.css">
    <link href="https://fonts.googleapis.com/css?family=Vollkorn&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@500&family=Sahitya&display=swap" rel="stylesheet">

    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>

    
</head>
<body>
<!-- Start Our Navbar-->
   <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ournavbar" aria-expanded="false">
        <span class="sr-only toggle">Toggle navigation</span>
        <span class="icon-bar toggle"></span>
        <span class="icon-bar toggle"></span>
        <span class="icon-bar toggle"></span>
      </button>
      <a class="navbar-brand" href="#">
        <span style="color: #1377bb;">Digi</span>
        <span>House</span>
    </a>
    </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="ournavbar">
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index2.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="services.php">Our Services</a></li>
        <li class="active"><a href="contact.php">Contact Us</a></li>
        <li><a href="join.php">Join Us</a></li>
        <li>
        <a href="index-rtl.php" class="languages"><i class="fas fa-globe-europe"></i> 
          <span>Arabic</span>
          </a>
          </li>
      </ul>
    </div>
  </div> <!-- End Of Container-->
</nav>
   <!-- End Our Navbar-->
   
<!-- Start Carousel-->
  <div id="myslide" class="carousel slide caro-header" data-ride="carousel">

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/con4.jpg" alt="pic1" class="imges">
      <div class="carousel-caption">
        <h2 class="h1">CONTACT WITH US</h2>
         <p class="lead"></p>

      </div>
    </div>
</div>
</div>
   <!-- End Carousel-->

 <!---------------------Section contact form-------------------->
   
<?php
include("contact_ltr.php");
?>
    
    
    <!--------------------- End Section contact form-------------------->
     
  <div class="progress ser">
    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0"
        aria-valuemax="20" style="width: 70%">
    </div>
</div>
 <!---------------------Start Footer-------------------->
 
<footer>
    <div class="container ">
        <div class="row text-left">
            <div class="col-sm-3 footer-ser">
                <h4>Our Services</h4>
                <p>Translation</p>
               <p>Designing</p>
               <p>Developing</p>
            </div>
            <div class="col-sm-3">
            <h4>Quick Links</h4>
            <ul>
            <li><a href="about.php">About company</a></li>
            <li><a href="services.php">Our Services</a></li>
            <li><a href="join.php">join Us</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            </ul>
            </div>
            <div class="col-sm-4 footer-cont">
          <h4>Contact Us Via:</h4>
         
        <span style="color:#1377bb;font-size:18px;">Have a problem ?</span> <span><i class="far fa-envelope"></i>
          support@digihouse.com
        </span>
        <span style="color:#1377bb;font-size:18px;">Have a question ?</span> <span><i class="far fa-envelope"></i>
        info@digihouse.com
        </span> <br> 
         <span><i class="fab fa-whatsapp"></i> +972592840569</span><br>
         <a href="index-rtl.php" class="global">
              <i class="fas fa-globe-europe"></i>  
              <span>العربية</span>
              </a>
            </div>
            <div class="col-sm-2 social">
            <h4>Social Media</h4>
            <a href="https://www.facebook.com/Transweb.Soultions/?modal=admin_todo_tour"
                            target="_blank">
                <i class="fab fa-facebook-square face"></i>
            </a>
            <a href="https://twitter.com/TransWeb4" target="_blank">
            <i class="fab fa-twitter-square tw"></i>
            </a>
            <a href="https://www.linkedin.com/company/transwebsolutions" target="_blank">
            <i class="fab fa-linkedin linked"></i>
            </a>
            <a href="https://www.instagram.com/trans.web/" target="_blank">
            <i class="fab fa-instagram insta"></i>
            </a>
            </div>
        </div>
    </div>
    <div class="copy-right">
            <p class="text-center"><i class="far fa-copyright"></i> 
            2020 <span style="color:#5fb637;">Digi House</span> All Rights Reserved.
        </p>
        </div>
</footer>
<!-------------------Start Scroll To Top------------------------->
 <div id="scroll-top">
 <i class="fa fa-chevron-up fa-3x"></i>	
 </div>
   <!-- End Carousel-->
    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
     <script src="js/wow.min.js"></script>
    <script>new WOW().init();</script>
    <script src="js/script.js"></script>

    

</body>
</html>