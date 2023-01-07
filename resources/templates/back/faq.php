<?php 

if(!is_admin($_SESSION['username'])) {
    
  header("Location: index.php");  
    
}

?>
<h1 class="page-header">
   All FAQ's

</h1>

<h3 class="bg-success"><?php display_message(); ?></h3>
<a href="index.php?add_faq" class="btn btn-primary">Add FAQ</a>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-file fa-fw"></i> FAQ Panel</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Question</th>
                                <th>Answer</th>
                                <th></th>
                            </tr>
                        </thead>
                            <tbody>
                                
                            <?php get_faq(); ?>
                            
                            
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


