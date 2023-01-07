<?php 

if(!is_admin($_SESSION['username'])) {
    
  header("Location: index.php");  
    
}

?>
<div class="col-lg-12">
    <h1 class="page-header"> User Address </h1>
    <h3 class="bg-success"><?php display_message(); ?></h3>
 
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-user fa-fw"></i> User Address Panel</h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                            <tr>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Logistics</th>
                            </tr>
                            </thead>
                            <tbody>
                            
                            <?php display_user_address() ?>
                            
                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    