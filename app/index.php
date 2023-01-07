
<!-- Configuration-->

<?php require_once("../resources/config.php"); ?>


<!-- Header-->
<?php include(TEMPLATE_FRONT .  "/header.php");?>




    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <?php include(TEMPLATE_FRONT . DS . "side_nav.php");   ?>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        
                       <?php include(TEMPLATE_FRONT . DS . "slider.php");   ?>
                        
                        
                    </div>

                </div>

                <div class="row">
                    
                    <?php get_products_with_pagination();  ?>
                    
                    


                </div> <!-- Row ends here -->

            </div>

        </div>

    </div>
    <!-- /.container -->

   <?php include(TEMPLATE_FRONT . DS . "footer.php");   ?>