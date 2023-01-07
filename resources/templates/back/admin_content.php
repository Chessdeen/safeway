<?php 

if(is_admin($_SESSION['username'])) {
    
  header("Location: index.php?dashboard");  
    
}

if(is_editor($_SESSION['username'])) {
    
  header("Location: index.php?blogs");  
    
}

?>

 
 <!-- FIRST ROW WITH PANELS -->

               <!-- Page Heading -->
              
                <div class="row">
                    
                    <div class="col-lg-12">
                       
                        <div class="popup">
                         <input type="checkbox" id="one" class="hidden" name="ossm">  
  <label for="one" class="alert-message ">
    <strong> <i class="fa fa-exclamation-triangle"></i> Attention!</strong> Update your address and profile data for delivery <a href="index.php?profile"><button type="button" class="btn btn-primary btn-sm">UPDATE NOW</button></a>
    <span class="close">×</span>
  </label> 
  </div>
                        <h1 class="page-header">
                           Welcome <?php echo strtoupper(get_user_name()); ?>  
                        </h1>
                        
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa-solid fa-gauge"></i> My Data Overview
                            </li>
                        </ol>
                    </div>
                    
                </div>
                <!-- /.row -->
                
                <!-- /.row -->
                <div class="row">

                            <div class="col-lg-4 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-cart fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo count_all_records('orders wHERE user_id='.$_SESSION['user_id'].''); ?></div>
                                        <div>My Orders!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="index.php?user_orders">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

              
                </div>
        
                <!-- /.row -->


                <!-- SECOND ROW WITH TABLES-->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Orders Panel</h3>
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
                                            <?php display_orders_for_users_in_dashboard(); ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-right">
                                    <a href="index.php?user_orders">View My Orders <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>







                    
















                </div>
                <!-- /.row -->