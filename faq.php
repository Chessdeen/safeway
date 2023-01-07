<!-- Configuration-->
<?php require_once("resources/config.php"); ?>


<!-- Header-->
<?php include(TEMPLATE_FRONT .  "/front_header.php");?>

<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    
<h2 style="text-align: center;">Frequently Asked Questions</h2>
<hr>
<?php get_faq_in_front(); ?>

</div>
<!-- Footer -->
<?php include(TEMPLATE_FRONT . DS . "front_footer.php");   ?>
