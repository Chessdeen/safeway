
<!-- Configuration-->

<?php require_once("../resources/config.php"); ?>


<!-- Header-->
<?php include(TEMPLATE_FRONT .  "/header.php");?>




    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
    <p class="lead">SHOP BY CATEGORY</p>
    <div class="list-group">
        
        
        <?php
        
        get_categories();
        
        
        ?>
        
    </div>
</div>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        
                      <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h1> All Categories Spotlight!</h1>
            <p>Select the precise skin care product category here to narrow your search</p>
            <!--<p><a class="btn btn-primary btn-large">Call to action!</a>-->
            <!--</p>-->
        </header>

        <hr>
                        
                        
                    </div>

                </div>

                <div class="row">
                    
                    <?php   ?>
                    
                    


                </div> <!-- Row ends here -->

            </div>

        </div>

    </div>
    <!-- /.container -->

   <?php include(TEMPLATE_FRONT . DS . "footer.php");   ?>