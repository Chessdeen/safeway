<?php require_once("../resources/config.php");   ?>
<?php session_start(); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php");   ?>



<?php

		checkIfUserIsLoggedInAndRedirect('admin');


		if(ifItIsMethod('post')){

			if(isset($_POST['username']) && isset($_POST['password'])){

				login_user($_POST['username'], $_POST['password']);


			}else {

                set_message("Username or Password Incorrect");
				redirect('login.php');
			}

		}






?>
                
     
      
<!-- Page Content -->
<div class="container">

    <div class="form-gap"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="text-center">


                                <h3><i class="fa  fa-arrow-right-to-bracket fa-4x"></i></h3>
                                <h2 class="text-center">Login Here</h2>
                                <h3 class="text-center"> <?php display_message(); ?></h3>
                                <div class="panel-body">




                                    <form role="form" class="" action="login.php" method="post" enctype="multipart/form-data">
                
               
                    <div class="form-group">
                    	<div class="input-group">
                    		<span class="input-group-addon"><i class="glyphicon glyphicon-user color-blue"></i></span>
                    
                    		<input name="username" type="text" class="form-control" placeholder="Enter Username">
                    	</div>
                    </div>
                    
                    <div class="form-group">
                    	<div class="input-group">
                    		<span class="input-group-addon"><i class="glyphicon glyphicon-lock color-blue"></i></span>
                    		<input name="password" type="password" class="form-control" placeholder="Enter Password">
                    	</div>
                    </div>
                    
                    	<div class="form-group">
                                        
										<input name="submit" class="btn btn-lg btn-primary btn-block" value="Login" type="submit" style="background-color: #839ffa;">
										<span class="input-group-btn">
										    
										</span>
									</div>
									<div class="form-group text-center">
									    <a href="forgot.php?forgot=<?php echo uniqid(true); ?>"><b>Forgot Password?</b></a>
									    | <a href="registration.php"><b>Register</b></a>
									    
									    
									</div>
                
            </form>

                                </div><!-- Body-->


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <hr>

    <?php include(TEMPLATE_FRONT . DS . "footer.php");   ?>

</div> <!-- /.container -->