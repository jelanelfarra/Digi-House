
<?php

    // Email configration
    $mail_to = 'lfarra65@gmail.com';
    $subject = 'Services';
    

if(isset($_POST['send'])){
    if(isset($_POST['name']) && $_POST['name'] !="" &&
        isset($_POST['email']) && $_POST['email'] !="" &&
        isset($_POST['company']) && $_POST['company'] !="" &&
        isset($_POST['order']) && $_POST['order'] !="" &&
        isset($_POST['details']) && $_POST['details'] !="" ){


    $name = $_POST['name'];
    $email = $_POST['email'];
    $company = $_POST['company'];
    $order = $_POST['order'];
    $details = $_POST['details'];
    
    $message = "Name : " . $name."\r\n";
    $message .= "Email : " . $email."\r\n";
    $message .= "Company Name : " . $company."\r\n";
    $message .= "Order : " . $order."\r\n";
    $message .= "Details : " . $details."\r\n";
        
        
  if(mail($mail_to,$subject ,$message)){
      $alert="Your Order has been received successfully.";
  }else{
        $alert="Email failed";
    }
   
    }else{
        $alert="All Fields must be filled &#128543; ";
    }
}

?>

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
    <title>DIGI HOUSE| Services</title>
    <link rel="shortcut Icon" href="img/logo.png">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="css/pages.css">
    <link rel="stylesheet" href="css/default-theme.css">
    <link rel="stylesheet" href="css/hover.css">
    <link rel="stylesheet" href="css/animate.css">
    <link href="https://fonts.googleapis.com/css?family=Vollkorn&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@500&family=Sahitya&display=swap"
        rel="stylesheet">

    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>


</head>

<body>
    <!-- Start Our Navbar-->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ournavbar"
                    aria-expanded="false">
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

                <!-- <img class="logo" src="img/logop.png"> -->
                <!-- <a class="navbar-brand" href="#">Digi <span>House</span></a> -->

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index2.php">Home <span class="sr-only">(current)</span></a></li>
                    <li><a href="about.php">About</a></li>
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                            aria-expanded="false">Services <span class="caret"></span></a>

                        <ul class="dropdown-menu">
                            <li><a href="#translation">Translation</a></li>
                            <li><a href="#designing">Designing</a></li>
                            <li><a href="#developing">Developing</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.php">Contact</a></li>
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
                <img src="img/ser.jpg" alt="pic1" class="imges">
                <div class="carousel-caption">
                    <h2 class="h1">OUR SERVICES</h2>
                    <p class="lead"></p>

                </div>
            </div>
        </div>
    </div>
    <!-- End Carousel-->

    <!----------------Our Services----------------->
    <section class="our-services" id="ser">
        <div class="container">
            <h2 class="head-after text-center wow fadeInDown"data-wow-duration="1.5s"><span style="color:#1377bb;">Digi House</span> offers many services related to<br> translation, design and development, namely:</h2>
            
                <?php
         if(isset($alert) && $alert!=""){
            ?>


            <div class="alert alert-primary btn-lg " role="alert">
                    <?php  echo $alert; ?>
            </div>




            <?php
                }
            ?>
            <!----------Card 1--------------->
    <div class="block1 text-center wow fadeInRight" data-wow-duration="1s" id="translation">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4"><img class="img1" src="img/translation.png"></div>
                    <div class="col-lg-8">
                        <h4 class="card-title">Translation Services</h4>
                        <ul class="text-center">
                            <li>+230 language</li>
                            <li>Translation, general, legal, medical, technical, financial</li>
                            <li>Transcription</li>
                            <li>Subtitling</li>
                            <li>Content Writing</li>
                            <li>Editing</li>
                        </ul>
                        <a class="collapsed"data-toggle="collapse" data-parent="#accordion"
                                href="#collapse-one" aria-expanded="true" aria-controls="collapse-one">
                                <button class="btn btn-success wow zoomIn"type="button">Make Order</button>
                            </a>
                                                
    <section id="collapse-one" class="order panel-collapse collapse wow zoomIn" roles="tabpanel"
    aria-labelledby="heading-one">
        <h2>Tell us what is your order!</h2>
        
        <form role="role" name="contactform" method="post">
           <div class="form-group">
               <input class="form-control input-lg" type="text" placeholder="Your Name*" name="name">
           </div>
             <div class="form-group">
               <input class="form-control input-lg" type="text" placeholder="Your Email*"name="email">
           </div>
           <div class="form-group">
               <input class="form-control input-lg" type="text"placeholder="Company Name"name="company">
           </div>
            <div class="form-group">
              <input class="form-control input-lg" type="text" placeholder="Your Order*"name="order">
          </div>
               <div class="form-group">
             <textarea class="form-control input-lg" placeholder="Order Details*"name="details"></textarea>
               </div>
           <button type="submit" class="btn btn-danger"name="send">Send Your Order</button>
       </form> 
</section>                               
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><br><br><br>
            <!----------Card 2--------------->
            <div class="block text-center wow fadeInLeft" data-wow-duration="1.5s" id="designing">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4"><img class="img2" src="img/des.png"></div>
                                <div class="col-lg-8">
                                    <h4 class="card-title">Designing Services</h4>
                                    <ul class="text-center">
                                        <li>Web Designing</li>
                                        <li>Graphic Designing</li>
                                        <li>Animation Designing</li>
                                        <li>Motion Graphics Designing.</li>
                                        <li>2Designing.</li>
                                        <li>3D Designing.</li>
                                        <li>UI/UX Designing.</li>
                                    </ul>
                                    <a class="collapsed"data-toggle="collapse" data-parent="#accordion"
                                            href="#collapse-two" aria-expanded="true" aria-controls="collapse-two">
                                            <button class="btn btn-success wow zoomIn"type="button">Make Order</button>
                                        </a>
                                        <section id="collapse-two" class="order panel-collapse collapse wow zoomIn" roles="tabpanel"
                                        aria-labelledby="heading-two">
        <h2>Tell us what is your order!</h2>
        
        <form role="role" name="contactform" method="post" action="services.php">
           <div class="form-group">
               <input class="form-control input-lg" type="text" placeholder="Your Name*" name="name">
           </div>
             <div class="form-group">
               <input class="form-control input-lg" type="text" placeholder="Your Email*"name="email">
           </div>
           <div class="form-group">
               <input class="form-control input-lg" type="text"placeholder="Company Name"name="company">
           </div>
            <div class="form-group">
              <input class="form-control input-lg" type="text" placeholder="Your Order*"name="order">
          </div>
               <div class="form-group">
             <textarea class="form-control input-lg" placeholder="Order Details*"name="details"></textarea>
               </div>
           <button type="submit" class="btn btn-danger"name="send">Send Your Order</button>
       </form> 
</section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br><br><br>
            <!----------Card 3--------------->
            <div class="block text-center wow fadeInRight" data-wow-duration="2s" id="developing">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                            <div class="col-lg-4"><img class="img3" src="img/web-development.png"></div>
                                <div class="col-lg-8">
                                    <h4 class="card-title">Developing Services</h4>
                                    <ul class="text-center">
                                        <li>Web Developing</li>
                                        <li>IOS Developing</li>
                                        <li>Android Developing</li>
                                        <li>programming</li>
                                        <li>Editing</li>
                                    </ul>
                                    <a class="collapsed"data-toggle="collapse" data-parent="#accordion"
                                            href="#collapse-three" aria-expanded="true" aria-controls="collapse-three">
                                            <button class="btn btn-success wow zoomIn"type="button">Make Order</button>
                                        </a>
                                        <section id="collapse-three" class="order panel-collapse collapse wow zoomIn" roles="tabpanel"
                                        aria-labelledby="heading-three">
        <h2>Tell us what is your order!</h2>
        
        <form role="role" name="contactform" method="post" action="services.php">
           <div class="form-group">
               <input class="form-control input-lg" type="text" placeholder="Your Name*" name="name">
           </div>
             <div class="form-group">
               <input class="form-control input-lg" type="text" placeholder="Your Email*"name="email">
           </div>
           <div class="form-group">
               <input class="form-control input-lg" type="text"placeholder="Company Name"name="company">
           </div>
            <div class="form-group">
              <input class="form-control input-lg" type="text" placeholder="Your Order*"name="order">
          </div>
               <div class="form-group">
             <textarea class="form-control input-lg" placeholder="Order Details*"name="details"></textarea>
               </div>
           <button type="submit" class="btn btn-danger"name="send">Send Your Order</button>
       </form> 
</section>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="progress ser">
        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0"
            aria-valuemax="20" style="width: 70%">
        </div>
    </div>  
     <!---------------------Section contact form-------------------->
   
<?php
include("contact_ltr.php");
?>
    
    
    <!--------------------- End Section contact form-------------------->
     

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