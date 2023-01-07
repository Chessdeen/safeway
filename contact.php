<!-- Configuration-->

<?php require_once("resources/config.php"); ?>

<?php

// if($_POST["submit"]) {
//     $recipient="safeygwt@safewayskin.com";
//     $subject="Hello";
//     $sender=$_POST["sender"];
//     $senderEmail=$_POST["senderEmail"];
//     $message=$_POST["message"];

//     $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

//     mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

// echo $thankYou="<p>Thank you! Your message has been sent.</p>";
      
// }

?>

<?php add_contact(); ?>

<!-- Header-->
<?php include(TEMPLATE_FRONT .  "/front_header.php");?>


<div class="p-5 mb-4 bg-light rounded-3" style="background-image: linear-gradient(to top, #5ee7df 0%, #b490ca 100%);">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold text-center">Contact Us</h1>
        
      </div>
    </div>
  
  <hr>
  
  <div class="container marketing px-4 py-5">
<div class="row align-items-center g-lg-5 py-5">
  <div class="col-md-10 mx-auto col-lg-5">
<h1 class="display-4 fw-bold lh-1 mb-3 text-center">The Skin care centre</h1>
    <p class="col-lg-10 fs-4 text-center">Don't wait any longer, get in touch with us today</p>
  </div>
  <div class="col-lg-7 text-center text-lg-start card shadow-lg">
      <h3 class="align-items-center text-center" style="background-color:#839ffa;"><?php display_message(); ?></h3>
        <form action="" name="sentMessage" id="contactForm" method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                        <input type="text" name="subject" class="form-control" placeholder="Subject" id="subject" required data-validation-required-message="Please enter your subject.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <textarea class="form-control" name="message" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                    <div id="success"></div>
                    <button name="add_contact" type="submit" class="btn btn-xl btn-primary">Send Message</button>
                </div>
            </div>
        </form>
  </div>
</div>
    </div>
    
    <hr>
    
    
    <div class="container px-4 py-5 card shadow">
   
    <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
      <div class="d-flex flex-column align-items-start gap-2">
        <h3 class="fw-bold text-center">Want to Book an Appointment or just talk about an issue?</h3>
      </div>
      <div class="row row-cols-1 row-cols-sm-2 g-4">
        <div class="d-flex flex-column gap-2">
          <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3" style="background-color:#839ffa!important;">
            <i class="fa-solid fa-map-location-dot"></i>
          </div>
          <h4 class="fw-semibold mb-0 text-center">Office Addresses</h4>
          <address class="text-muted text-center">7, Keke busstop,, Off Olodo bank, Ibadan, Oyo State</address>
          <address class="text-muted text-center">Suite 301, 2nd floor, Bosco plaza, opposite SAO petrol station, Idi Ape, Bashorun, Ibadan, Oyo State</address>
        </div>

        <div class="d-flex flex-column gap-2">
          <div
            class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3" style="background-color:#839ffa!important;">
            <i class="fa-solid fa-address-book"></i>
          </div>
          <h4 class="fw-semibold mb-0 text-center">Mobile Numbers</h4>
          <p class="text-muted text-center">+234 811 784-7784</p>
        </div>
      </div>
    </div>
  </div>
  
  
  <hr>
  
  <div class="container marketing px-4 py-5">
      
      <div class="row w-100">
  <div class="col-lg-6 my-4 card shadow-lg">
      
    
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.3781314974963!2d3.899629214452037!3d7.4233379141083216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1039f2ab707b3fdb%3A0xc0fcab454aaabfbb!2sSafeway%20Dermatology%20%26%20Laser%20Centre!5e0!3m2!1sen!2sng!4v1672959005639!5m2!1sen!2sng" width="" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
  </div>
  <div class="col-lg-6 my-4 d-flex align-items-center">
    <div>
      <h6>Come See Us</h6>
      <p>Our Pop-up Location is closest to you. </p>
      <p>Our offices are open Monday to Friday, 9 AM to 4 PM.</p>
      
    </div>
  </div>
</div>
      
      
    </div>
  
        
     
    
    
    
   <?php include(TEMPLATE_FRONT . DS . "front_footer.php");   ?>
  
   
   