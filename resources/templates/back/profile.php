<?php 

if(is_admin($_SESSION['username'])) {
    
  header("Location: index.php");  
    
}

?>

        <div class="col-md-12">
<div class="row">
<h1 class="page-header">
   My Profile

</h1>
<h3 class="bg-success"><?php display_message(); ?></h3>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-fw  fa-user"></i> Profile Panel</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                            <thead>
                            <tr>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            </tr>
                            </thead>
                            <tbody>
                            
                            <?php display_user() ?>
                            
                            </tbody>
                        </table>
                    
                </div>
            </div>
        </div>
        
        <hr>
        
        
        
        
    <a href="index.php?add_address" class="btn btn-primary">Add Address</a>
        
        
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-fw  fa-map"></i> Address Panel</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                   
                        
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                            <tr>
                            <th>Address</th>
                            <th>Phone Number</th>
                            </tr>
                            </thead>
                            <tbody>
                            
                            <?php display_user_addy() ?>
                            
                            
                            </tbody>
                        </table>
                    
                </div>
            </div>
        </div>
        
        
        
    </div>

</div>

