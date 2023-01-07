<?php 

if(!is_admin($_SESSION['username'])) {
    
  header("Location: index.php");  
    
}

?>

<h1 class="page-header">
   Members of Staff

</h1>

<h3 class="bg-success"><?php display_message(); ?></h3>
<a href="index.php?add_staff" class="btn btn-primary">Add Staff</a>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-tags fa-fw"></i> Staff Panel</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
           <th>Staff Details</th>
           <th>Staff Data</th>
            <th></th>
                            </tr>
                        </thead>
                            <tbody>
                                
                            <?php get_staff_in_admin(); ?>
                            
                            
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>










                
               