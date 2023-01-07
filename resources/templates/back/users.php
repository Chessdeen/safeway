<?php 

if(!is_admin($_SESSION['username'])) {
    
  header("Location: index.php");  
    
}

?>
<div class="col-lg-12">
    <h1 class="page-header"> Users </h1>
    <h3 class="bg-success"><?php display_message(); ?></h3>
    <a href="index.php?add_user" class="btn btn-primary">Add User</a>
 
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-user fa-fw"></i> Users Panel</h3>
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
                            <th>Role</th>
                            <th>Change Role</th>
                            </tr>
                            </thead>
                            <tbody>
                            
                            <?php display_users() ?>
                            
                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    