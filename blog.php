<!-- Configuration-->
<?php require_once("resources/config.php"); ?>



<?php

$query = query(" SELECT * FROM blogs WHERE blog_id = " . escape_string($_GET['id']) . " ");
confirm($query);

while($row = fetch_array($query)): 
    
    


?>





<!-- Header-->
<?php include(TEMPLATE_FRONT .  "/front_header.php");?>
<style>
    .nav_min{
        
        font-size:15px;
        color:;
        text-decoration: none;
        
    }
    
    .active {
        
        font-size:15px;
        color:grey;
        text-decoration: none;
        pointer-events: none;
        
    }
    .link{
        text-decoration: none;
    }
    
</style>

  <div class="p-4 p-md-5 mb-4 rounded text-bg-dark">
      
      
    <!--<div class="col-md-6 px-0">-->
    <!--  <h2 class="fst-italic ">Safeway Blogspot</h2>-->
    <!--</div>-->
    
    <div class="row mb-2">
    <div class="col-md-6">
        
        <div class="col p-6 d-flex flex-column position-static">
          
          <h3 class="mb-0"><?php echo $row['blog_title']; ?></h3>
         
        </div>
        
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-6 d-flex flex-column position-static">
             <img width="100%" height="100%" class="img-responsive" src="resources/<?php echo display_image($row['blog_image']); ?>" alt="">
          
        </div>
      </div>
    </div>
  </div>
    
    
  </div>


  <div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        <nav >
            <a href="index" class="nav_min">home </a> <span class="active">&#62;</span>
            <a href="bloglist" class="nav_min">blogs </a> <span class="active">&#62;</span>
            <a href="" class="active">blog-ID <span><?php echo $row['blog_id']; ?></span></a> 
            
        </nav>
      </h3>

      <article class="blog-post">

        <p><?php echo $row['blog_description']; ?></p>
        
        
       

    </div>

    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        

        <div class="p-4">
          <h4 class="fst-italic">Product Categories</h4>
          <hr>
          <?php
        get_categories();
        
        
        ?>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Quick Links</h4>
          <hr>
          <ol class="list-unstyled">
              <li><a href="app/" class="link" target="_blank">Shop</a></li>
            <li><a href="app/login" class="link" target="_blank">Login</a></li>
            <li><a href="app/registration" class="link" target="_blank">Register</a></li>
            
          </ol>
        </div>
      </div>
    </div>
  </div>

<?php endwhile; ?>
<!-- Footer -->
<?php include(TEMPLATE_FRONT . DS . "front_footer.php");   ?>
  
   
   