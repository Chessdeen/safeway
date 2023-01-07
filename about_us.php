<!-- Configuration-->

<?php require_once("resources/config.php"); ?>


<!-- Header-->
<?php include(TEMPLATE_FRONT .  "/front_header.php");?>




  
  
<div class="p-5 mb-4 bg-light rounded-3" style="background-image: linear-gradient(to top, #d9afd9 0%, #97d9e1 100%);">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold text-center">Who We Are</h1>
        
      </div>
    </div>
  
  
  
  
  
  <hr>
  
  <div class="container marketing card">
      <h2  style="text-align:center;">About Safeway Dermatology</h2>
      <p style="text-align:center;">Our dermatology brand was founded by a team of experienced and highly qualified dermatologists, who are passionate about providing the highest level of care to our patients. Our team includes board-certified dermatologists, as well as physician assistants, nurse practitioners, and other medical professionals who are dedicated to helping people achieve and maintain healthy, beautiful skin.</p>
      <p style="text-align:center;">Our state-of-the-art facilities are equipped with the latest technology and we use only the highest-quality products to ensure that our patients receive the best possible care. <br><br>We are committed to providing personalized, compassionate care to all of our patients, and we take the time to listen to your concerns and understand your individual needs. Thank you for considering us for your dermatology needs.</p>
      
      </div>
      <hr>
  
  <h2 class="text-center">Meet The Team</h2>
  
  <div class="container marketing px-4 py-5" style="background-image: linear-gradient(to right, #fa709a 0%, #fee140 100%); padding:10px;margin:10px;">
      
      
      

    <!-- Three columns of text below the carousel -->
    <div class="row row-cols-1 row-cols-md-3 g-4">
        

        <?php get_staff(); ?>
  
  
    </div>
</div>
  
  
  <hr>
  
  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing px-4 py-5">

    <!-- START THE FEATURETTES -->


    <div class="row featurette">
      <div class="col-md-6">
        <h2 class="featurette-heading fw-normal lh-1">Our Mission.</h2>
        <p class="lead">The goal of the team is to provide high-quality, comprehensive care to patients with skin, hair, and nail conditions.</p>
      </div>
      <div class="col-md-6">
       
        
        <img src="assets/images/safe_clinic.png" alt="" style="width:500; height:500;" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" loading="lazy">

      </div>
    </div>

    <hr>

    <div class="row featurette">
      <div class="col-md-6 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">Our Team. </h2>
        <p class="lead">Our team of dermatologists, who are medical doctors specializing in the diagnosis and treatment of conditions affecting the skin, hair, and nails.</p>
      </div>
      <div class="col-md-6 order-md-1">
        
        <img src="assets/images/safe_clin.png" alt="" style="width:500; height:500;" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" loading="lazy">

      </div>
    </div>

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


   
    
    

    
    
    
    
   <?php include(TEMPLATE_FRONT . DS . "front_footer.php");   ?>
  
   
   