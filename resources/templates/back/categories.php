<?php 

if(!is_admin($_SESSION['username'])) {
    
  header("Location: index.php");  
    
}

?>

<?php add_category(); ?>
 

 <h1 class="page-header">
  Product Categories

</h1>




<div class="row">
    <div class="col-md-4">
    
    <h3 class="bg-success"><?php  display_message(); ?></h3>
    
    <form action="" method="post">
    
        <div class="form-group">
            <label for="category-title">Title</label>
            <input name="cat_title" type="text" class="form-control">
        </div>

        <div class="form-group">
            
            <input name="add_category" type="submit" class="btn btn-primary" value="Add Category">
        </div>      


    </form>


</div>

    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-list fa-fw"></i> Categories Panel</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                
                                <th>Title</th>
                                <th></th>
                            </tr>
                        </thead>
                            <tbody>
                                
                            <?php show_categories_in_admin(); ?>
                            
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>



                







