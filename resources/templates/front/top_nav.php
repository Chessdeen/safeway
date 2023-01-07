<?php 

    $home_class = '';
    $shop_class = '';
    $checkout_class = '';
    $login_class = '';
    $registration_class = '';
    
    $pageName = basename($_SERVER['PHP_SELF']);
    
    $home = 'index.php';
    $shop = 'shop.php';
    $checkout = 'checkout.php';
    $login = 'login.php';
    $registration = 'registration.php';
    
     if($pageName == $home ) {
        
         $home_class = 'active';
        
    }else if($pageName == $shop ) {
        
         $shop_class = 'active';
        
    }else if($pageName == $checkout ) {
        
         $checkout_class = 'active';
        
    }else if($pageName == $login) {
        
        $login_class = 'active';
        
    }else if($pageName == $registration) {
        
        $registration_class = 'active';
        
    } 

?>



<div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" >
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div style="margin-bottom:5;padding-bottom:5;"><a class="navbar-brand" href="/app/index"><img src="/../assets/images/logo.png" alt="safeway logo" width="35" height="35"></a></div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/../" target="_blank"><b>Back to Clinic</b></a>
                    </li>
                     <li class="<?php echo $home_class; ?>">
                        <a href="/app/index"><b>Home</b></a>
                    </li>
                    <li class="<?php echo $shop_class; ?>">
                        <a href="/app/shop"><b>Shop</b></a>
                    </li>
                    <li class="<?php echo $checkout_class; ?>">
                        <a href="/app/checkout"><b>Checkout</b></a>
                    </li>
                    
                    
                    <?php if(!isset($_SESSION['user_role'])): ?>
                    
                    <li class="<?php echo $login_class; ?>">
                        <a href="/app/login"><b>Login</b></a>
                    </li>
                    <li class="<?php echo $registration_class; ?>">
                        <a href="/app/registration"><b>Register</b></a>
                    </li>
                    
                        
                        
                    
                    <?php else: ?>
                    
                        <li>
                        
                        <a href="#"><span class="label label-pill label-danger count" style="border-radius:10px;"></span> <i class="fa-solid fa-cart-shopping" style="color:black;"></i><span class="badge badge-light">
                        <?php
                        echo isset($_SESSION['item_quantity']) ? $_SESSION['item_quantity'] : $_SESSION['item_quantity'] = "0"; 
                        ?>
                        </span></a>
                        
                        </li>
                        </ul>
                        
                        <ul class="nav navbar-right top-nav">
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: black!important;"><i class="fa fa-user"></i><b> 
                        <?php  echo strtoupper(get_user_name()); ?></b> 
                        <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                        <li>
                        <a href="/app/admin" style="color:;"><i class="fa fa-fw fa-user"></i><b>Dashboard</b></a>
                        </li>
                        <li class="divider"></li>
                        <li >
                        <a href="/app/admin/logout.php" style="color:;"><i class="fa fa-fw fa-power-off"></i> <b>Log Out</b></a>
                        </li>
                        </ul>
                        </li>
                        </ul>
    
                    
                    <?php endif; ?>
                    
                    
                     
                    
                
                
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->