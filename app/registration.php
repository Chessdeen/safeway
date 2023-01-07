<?php require_once("../resources/config.php");   ?>

<?php include(TEMPLATE_FRONT . DS . "header.php");   ?>


<?php

if($_SERVER['REQUEST_METHOD'] == "POST") {
    
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    
    $error = [
        
        'username'=> '',
        'email'=> '',
        'password'=> ''
        
        
        ];
        
        if(strlen($username) < 4){
            
            $error['username'] = 'Username needs to be longer';
            
        }
        
        if($username == ''){
            
            $error['username'] = 'Username cannot be empty';
            
        }
        
        if(username_exists($username)){
            
            $error['username'] = 'Username already exists, pick another';
            
        }
        
        
         if($email == ''){
            
            $error['email'] = 'Email cannot be empty';
            
        }
        
        
        if(email_exists($email)){
            
            $error['email'] = 'Email already exists, <a href="login.php">Please login</a>';
            
        }
        if(strlen($password) < 6){
            
            $error['password'] = 'Password needs to be longer';
            
        }
        
        
        if($password == '') {
            
            $error['password'] = 'Password cannot be empty';
        }
        
        
        foreach ($error as $key => $value) {
            
            if(empty($value)) {
                
                unset($error[$key]);
            }
            
            
            
            
        } //foreach
        
        
        if(empty($error)) {
            
            register_user($username, $email, $password);
            
            
            login_user($username, $password);
            
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




                                <h3><i class="fa fa-address-card fa-4x"></i></h3>
                                <h2 class="text-center">Register Here</h2>
                                <h3 class="text-center"> <?php display_message(); ?></h3>
                                <div class="panel-body">
                
                    <form role="form" action="registration.php" method="post" id="login-form" autocomplete="off">
                        
                        <div class="form-group">
                            <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user color-blue"></i></span>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Enter Desired Username" autocomplete="on" value="<?php echo isset($username) ? $username : '' ?>" >
                            
                           
                            </div>
                             <p><?php echo isset($error['username']) ? $error['username'] : '' ?></p>
                        </div>
                         <div class="form-group">
                            <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                            <input type="email" name="email" id="email" class="form-control" placeholder="somebody@example.com" autocomplete="on" value="<?php echo isset($email) ? $email : '' ?>">
                            
                            
                        </div>
                        <p><?php echo isset($error['email']) ? $error['email'] : '' ?></p>
                        </div>
                         <div class="form-group">
                             <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock color-blue"></i></span>
                            <label for="password" class="sr-only">Password</label>
                            <input type="password" name="password" id="key" class="form-control" placeholder="Password">
                            
                            
                        </div>
                        <p><?php echo isset($error['password']) ? $error['password'] : '' ?></p>
                        </div>
                        
                        <div class="mb-3 form-check form-group">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                        <label class="form-check-label" for="exampleCheck1">Agree to Safeway <a href="../terms.php" target="_blank">Terms</a> and <a href="../privacy.php" target="_blank">Privacy Policy</a></label>
                        </div>
                        
                        
                        <div class="form-group">
                        
                            <input name="submit" name="register" id="btn-registration" class="btn btn-lg btn-primary btn-block" value="Register" type="submit" style="background-color: #839ffa;">
                            <span class="input-group-btn">
                            
                            </span>
                        </div>
                        
                        <br>
                        <div class="form-group">
                            <p class="text-center"><b>Are you a member? <a href="login.php">Log in Now!</b></a></p>
                            
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