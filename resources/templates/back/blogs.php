<?php 

if(!is_admin($_SESSION['username']) && !is_editor() ) {
    
  header("Location: index.php");  
    
}

?>

<h1 class="page-header">
   Skin Talk

</h1>

<h3 class="bg-success"><?php display_message(); ?></h3>
<a href="index.php?add_blog" class="btn btn-primary">Add Blog</a>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa-solid fa-blog"></i></i> Blogs Panel</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
           <th>Blog Title</th>
           <th>Short Description</th>
           <th>Blog Write Up</th>
            <th></th>
                            </tr>
                        </thead>
                            <tbody>
                                
                            <?php get_blogs_in_admin(); ?>
                            
                            
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>










                
               