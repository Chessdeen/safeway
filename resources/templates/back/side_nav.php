<?php 

    // $home_class = '';
    // $orders_class = '';
    // $dashboard_class = '';
    // $reports_class = '';
    // $products_class = '';
    // $categories_class = '';
    // $message_class = '';
    // $users_class = '';
    // $slides_class = '';
    // $blogs_class = '';
    
    // $pageName = basename($_SERVER['PHP_SELF']);
    
    // $home = 'index.php';
    // $orders = 'orders.php';
    // $dashboard = 'dashboard.php';
    // $reports = 'reports.php';
    // $products = 'products.php';
    // $categories = 'categories.php';
    // $message = 'contact.php';
    // $users = 'users.php';
    // $slides = 'slides.php';
    // $blogs = 'blogs.php';
    
    //  if($pageName == $home ) {
        
    //      $home_class = 'active';
        
    // }else if($pageName == $orders ) {
        
    //      $orders_class = 'active';
        
    // }else if($pageName == $dashboard ) {
        
    //      $dashboard_class = 'active';
        
    // }else if($pageName == $reports) {
        
    //     $reports_class = 'active';
        
    // }else if($pageName == $products) {
        
    //     $products_class = 'active';
        
    // }else if($pageName == $categories ) {
        
    //      $categories_class = 'active';
        
    // }else if($pageName == $message ) {
        
    //      $message_class = 'active';
        
    // }else if($pageName == $users) {
        
    //     $users_class = 'active';
        
    // }else if($pageName == $slides) {
        
    //     $slides_class = 'active';
        
    // }else if($pageName == $blogs) {
        
    //     $blogs_class = 'active';
        
    // } 


?>


 <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                   
                    
                    
                    <?php if(is_admin()): ?>
                    
                    <li class="<?php echo $dashboard_class; ?>">
                        <a href="index.php?dashboard"><i class="fa-solid fa-gauge"></i> Admin Dashboard</a>
                    </li>
                    <li class="<?php echo $orders_class; ?>">
                        <a href="index.php?orders"><i class="fa fa-fw  fa-shopping-cart"></i> Orders</a>
                    </li>
                    
                    <li class="<?php echo $reports_class; ?>">
                        <a href="index.php?reports"><i class="fa fa-fw fa-file"></i> Reports</a>
                    </li>
                    
                    <li class="<?php echo $products_class; ?>">
                        <a href="index.php?products"><i class="fa fa-fw fa-tags"></i> View Products</a>
                    </li>
                    
                    
                    <li class="<?php echo $categories_class; ?>">
                        <a href="index.php?categories"><i class="fa fa-fw fa-list"></i> Categories</a>
                    </li>
                    
                    
                    
                    <li class="<?php echo $message_class; ?>">
                        <a href="index.php?contact"><i class="fa fa-fw fa-envelope"></i> Messages</a>
                    </li>
                    
                    
                    <li class="<?php echo $users_class; ?>">
                        <a href="index.php?users"><i class="fa fa-fw fa-user"></i> Users</a>
                    </li>
                    <li class="<?php echo $slides_class; ?>">
                        <a href="index.php?slides"><i class="fa fa-fw fa-image"></i> Slides</a>
                    </li>
                    <li class="<?php echo $blogs_class; ?>">
                        <a href="index.php?blogs"><i class="fa-solid fa-blog"></i> View Blogs</a>
                    </li>
                    <li class="">
                        <a href="index.php?staff"><i class="fa-solid fa-users"></i> Staff Data</a>
                    </li>
                    <li class="">
                        <a href="index.php?faq"><i class="fa-solid fa-question"></i> FAQ</a>
                    </li>
                    <li class="<?php echo $blogs_class; ?>">
                        <a href="index.php?blogs"><i class="fa-solid fa-blog"></i> View Blogs</a>
                    </li>
                    
                    <?php endif ?>
                    
                    <?php if(is_editor()): ?>
                    
                    <li class="<?php echo $blogs_class; ?>">
                        <a href="index.php?blogs"><i class="fa-solid fa-blog"></i> View Blogs</a>
                    </li>
                    
                    <?php endif ?>
                    
                    <?php if(!is_admin() && !is_editor()): ?>
                    
                     <li class="<?php echo $home_class; ?>">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> My Data</a>
                    </li>
                    
                     <li class="<?php echo $orders_class; ?>">
                        <a href="index.php?user_orders"><i class="fa fa-fw  fa-shopping-cart"></i> My Orders</a>
                    </li>
                    <li class="<?php ; ?>">
                        <a href="index.php?profile"><i class="fa fa-fw  fa-user"></i> My Profile</a>
                    </li>
                    
                    <?php endif ?>
                    
                    
                    
                    
                
                </ul>
            </div>