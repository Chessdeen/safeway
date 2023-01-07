<?php 

if(!is_admin($_SESSION['username'])) {
    
  header("Location: index.php");  
    
}

?>

<style>
* {
  box-sizing: border-box;
}

.zoom {
  padding: 50px;
  transition: transform .2s;
  width: 200px;
  height: 200px;
  margin: 0 auto;
}

.zoom:hover {
  -ms-transform: scale(3); /* IE 9 */
  -webkit-transform: scale(3); /* Safari 3-8 */
  transform: scale(3); 
}
</style>

<div class="col-lg-12">
    <h1 class="page-header"> User Receipt </h1>
 
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-user fa-fw"></i> User Receipt Panel</h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                            <tr>
                            <th>Id</th>
                            <th>Receipt</th>
                            <th>User ID</th>
                            <th>Username</th>
                            </tr>
                            </thead>
                            <tbody>
                            
                            <?php display_user_receipt() ?>
                            
                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

