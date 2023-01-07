<?php 

if(!is_admin($_SESSION['username'])) {
    
  header("Location: index.php");  
    
}

?>

<h1 class="page-header">
   All Products

</h1>

<h3 class="bg-success"><?php display_message(); ?></h3>
<a href="index.php?add_product" class="btn btn-primary">Add Product</a>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-tags fa-fw"></i> Products Panel</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
           <th>Title</th>
           <th>Description</th>
           <th>Category</th>
           <th>Price</th>
            <th>Quantity</th>
            <th>Delete</th>
                            </tr>
                        </thead>
                            <tbody>
                                
                            <?php get_products_in_admin(); ?>
                            
                            
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>










                
               