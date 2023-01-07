<!-- Configuration-->
<?php require_once("resources/config.php"); ?>


<!-- Header-->
<?php include(TEMPLATE_FRONT .  "/front_header.php");?>


<div class="p-5 mb-4 bg-light rounded-3" style="background-image: linear-gradient(to top, #d299c2 0%, #fef9d7 100%);">
      <div class="container-fluid py-5">
        <h2 class="display-5 fw-bold text-center">Get the latest gist from around the world of skin care, specially curated for you.</h2>
        
      </div>
    </div>
 <hr>
 <div class="container marketing px-4 py-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">


            <?php get_blogs(); ?>
            

        </div>
        <!-- /.row -->
</div>
<!-- Footer -->
<?php include(TEMPLATE_FRONT . DS . "front_footer.php");   ?>
