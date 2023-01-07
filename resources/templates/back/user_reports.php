<?php 

if(!is_admin($_SESSION['username'])) {
    
  header("Location: index.php");  
    
}

?>
<h1 class="page-header">
   All Reports

</h1>

<h3 class="bg-success"><?php display_message(); ?></h3>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-file fa-fw"></i> Reports Panel</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Product Id</th>
                                <th>Order Id</th>
                                <th>Price</th>
                                <th>Product title</th>
                                <th>Product quantity</th>
                                <th>User</th>
                            </tr>
                        </thead>
                            <tbody>
                                
                            <?php get_user_reports(); ?>
                            
                            
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


