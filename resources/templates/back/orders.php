<?php 

if(!is_admin($_SESSION['username'])) {
    
  header("Location: index.php");  
    
}

?>

        <div class="col-md-12">
<div class="row">
<h1 class="page-header">
   All Orders

</h1>
<h3 class="bg-success"><?php display_message(); ?></h3>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-fw  fa-shopping-cart"></i> Orders Panel</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Amount</th>
                                <th>Transaction</th>
                                <th>Currency</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                            <tbody>
                                
                            <?php display_orders(); ?>
                            
                            
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

