<?php

    // Email configration
    $mail_to = 'lfarra65@gmail.com';
    $subject = 'Contact Information';
    

if(isset($_POST['sendmsg'])){
    if(isset($_POST['first']) && $_POST['first'] !="" &&
        isset($_POST['email']) && $_POST['email'] !="" &&
        isset($_POST['number']) && $_POST['number'] !="" &&
        isset($_POST['last']) && $_POST['last'] !="" &&
        isset($_POST['company']) && $_POST['company'] !="" &&
        isset($_POST['msg']) && $_POST['msg'] !=""  ){


    $first = $_POST['first'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $last = $_POST['last'];
    $company = $_POST['company'];
    $msg = $_POST['msg'];
        
    $message = "Name : " . $first." ". $last."\r\n";
    $message .= "Email : " . $email."\r\n";
    $message .= "Contact Number : " . $number."\r\n";
    $message .= "Company Name : " . $company."\r\n";
    $message .= "Message : " . $msg."\r\n";
        
        
  if(mail($mail_to,$subject ,$message)){
      $alert="Thanks, we'll be in touch";
  }else{
        $alert="Email failed";
    }
   
    }else{
        $alert="All Fields must be filled &#128543; ";
    }
}

?>






 <section class="contact text-center get-touch">
  <div class="container wow fadeInUp"data-wow-duration="1s" data-wow-offset="270">
      
    
      <h2 class="h1">Get In Touch</h2>
          <?php
         if(isset($alert) && $alert!=""){
            ?>


            <div class="alert alert-primary btn-lg " role="alert">
                    <?php  echo $alert; ?>
            </div>




            <?php
                }
            ?>
      <div class="row">  
      
      <form name="form" method="POST">
        <div class="col-lg-6 wow bounceInLeft"data-wow-duration="1s" data-wow-offset="270">
         <div class="form-group">
             <input class="form-control input-lg" type="text" placeholder="First Name*" name="first" required>
         </div>
           <div class="form-group">
             <input <?= $invalid_class_name ?? "" ?> class="form-control input-lg"placeholder="Email*" type="text" name="email" required>
         </div>
         <div class="form-group">
             <input class="form-control input-lg" type="text"placeholder="Contact Number"name="number">
         </div>
         <button type="submit" class="btn btn-danger"name="sendmsg">Send Message</button>
         </div>
         <div class="col-lg-6 wow bounceInRight cont"data-wow-duration="1s" data-wow-offset="270">
          <div class="form-group">
            <input class="form-control input-lg" type="text" placeholder="Last Name"name="last">
        </div>
        <div class="form-group">
            <input class="form-control input-lg" type="text" placeholder="Company Name"name="company">
        </div>
             <div class="form-group">
           <textarea class="form-control input-lg" placeholder="Your Message*"name="msg" required></textarea>
             </div>

         </div>

     </form>
</div>
   
  </div>
  
</section>