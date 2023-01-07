<?php require_once("../../resources/config.php");  ?>
        
<?php include(TEMPLATE_BACK . "/header.php");  ?>


<?php

if(!isset($_SESSION['username'])) {
    
    redirect("../login");
    
}

// if(isset($_SESSION['user_role'])) {
    
//     if($_SESSION['user_role'] == 'subscriber') {
        
//         header ("Location: ../");
        
//     } 
    
// }



?>



        <div id="page-wrapper">

            <div class="container-fluid">

                

                
                
                <?php 
                
                
                if($_SERVER['REQUEST_URI'] == "/app/admin/"  || $_SERVER['REQUEST_URI'] == "/app/admin/index.php") {
                    
                    
                    include(TEMPLATE_BACK . "/admin_content.php");
                }
                
                if(isset($_GET['dashboard'])) {
                    include(TEMPLATE_BACK . "/dashboard.php");
                    
                    
                    
                }
                
                if(isset($_GET['orders'])) {
                    include(TEMPLATE_BACK . "/orders.php");
                    
                    
                    
                }
                if(isset($_GET['user_orders'])) {
                    include(TEMPLATE_BACK . "/user_orders.php");
                    
                    
                    
                }
                if(isset($_GET['profile'])) {
                    include(TEMPLATE_BACK . "/profile.php");
                    
                    
                    
                }
                if(isset($_GET['edit_profile'])) {
                    include(TEMPLATE_BACK . "/edit_profile.php");
                    
                    
                    
                }
                if(isset($_GET['add_address'])) {
                    include(TEMPLATE_BACK . "/add_address.php");
                    
                    
                    
                }
                if(isset($_GET['user_address'])) {
                    include(TEMPLATE_BACK . "/user_address.php");
                    
                    
                    
                }
                if(isset($_GET['user_receipt'])) {
                    include(TEMPLATE_BACK . "/user_receipt.php");
                    
                    
                    
                }
                
                if(isset($_GET['edit_address'])) {
                    include(TEMPLATE_BACK . "/edit_address.php");
                    
                    
                    
                }
                
                 if(isset($_GET['categories'])) {
                    include(TEMPLATE_BACK . "/categories.php");
                    
                    
                    
                }
                
                 if(isset($_GET['products'])) {
                    include(TEMPLATE_BACK . "/products.php");
                    
                    
                    
                }
                 if(isset($_GET['payment'])) {
                    include(TEMPLATE_BACK . "/payment.php");
                    
                    
                    
                }
                
                 if(isset($_GET['add_product'])) {
                    include(TEMPLATE_BACK . "/add_product.php");
                    
                    
                    
                }
                
                if(isset($_GET['edit_product'])) {
                    include(TEMPLATE_BACK . "/edit_product.php");
                    
                    
                    
                }
                 if(isset($_GET['contact'])) {
                    include(TEMPLATE_BACK . "/contact.php");
                    
                    
                    
                }
                
                
                   if(isset($_GET['users'])) {
                    include(TEMPLATE_BACK . "/users.php");
                    
                    
                    
                }
                
                
                
                 if(isset($_GET['add_user'])) {
                    include(TEMPLATE_BACK . "/add_user.php");
                    
                    
                    
                }
                
                 if(isset($_GET['edit_user'])) {
                    include(TEMPLATE_BACK . "/edit_user.php");
                    
                    
                    
                }
                if(isset($_GET['change_to_admin'])) {
                    include(TEMPLATE_BACK . "/change_role.php");
                    
                    
                    
                }
                 if(isset($_GET['change_to_sub'])) {
                    include(TEMPLATE_BACK . "/change_role.php");
                    
                    
                    
                }
                
                  if(isset($_GET['change_to_a'])) {
                    include(TEMPLATE_BACK . "/change_sub.php");
                    
                    
                    
                }
                
                if(isset($_GET['reports'])) {
                    include(TEMPLATE_BACK . "/reports.php");
                    
                    
                    
                }
                
                 if(isset($_GET['slides'])) {
                    include(TEMPLATE_BACK . "/slides.php");
                    
                    
                    
                }
                
                
                 if(isset($_GET['delete_order_id'])) {
                    include(TEMPLATE_BACK . "/delete_order.php");
                    
                    
                    
                }
                
                 if(isset($_GET['delete_product_id'])) {
                    include(TEMPLATE_BACK . "/delete_product.php");
                    
                    
                    
                }
                
                 if(isset($_GET['delete_category_id'])) {
                    include(TEMPLATE_BACK . "/delete_category.php");
                    
                    
                    
                }
                
                 if(isset($_GET['delete_report_id'])) {
                    include(TEMPLATE_BACK . "/delete_report.php");
                    
                    
                    
                }
                if(isset($_GET['delete_contact_id'])) {
                    include(TEMPLATE_BACK . "/delete_contact.php");
                    
                    
                    
                }
                
                 if(isset($_GET['delete_user_id'])) {
                    include(TEMPLATE_BACK . "/delete_user.php");
                    
                    
                    
                }
                if(isset($_GET['delete_personal_user_id'])) {
                    include(TEMPLATE_BACK . "/delete_personal_user.php");
                    
                    
                    
                }
                
                if(isset($_GET['delete_address_id'])) {
                    include(TEMPLATE_BACK . "/delete_address.php");
                    
                    
                    
                }
                
                if(isset($_GET['delete_slide_id'])) {
                    include(TEMPLATE_BACK . "/delete_slide.php");
                    
                    
                    
                }
                if(isset($_GET['blogs'])) {
                    include(TEMPLATE_BACK . "/blogs.php");
                    
                    
                    
                }
                if(isset($_GET['add_blog'])) {
                    include(TEMPLATE_BACK . "/add_blog.php");
                    
                    
                    
                }
                if(isset($_GET['delete_blog_id'])) {
                    include(TEMPLATE_BACK . "/delete_blog.php");
                    
                    
                    
                }
                if(isset($_GET['staff'])) {
                    include(TEMPLATE_BACK . "/staff.php");
                    
                    
                    
                }
                if(isset($_GET['add_staff'])) {
                    include(TEMPLATE_BACK . "/add_staff.php");
                    
                }
                if(isset($_GET['edit_staff'])) {
                    include(TEMPLATE_BACK . "/edit_staff.php");
                    
                    
                    
                }
                if(isset($_GET['delete_staff_id'])) {
                    include(TEMPLATE_BACK . "/delete_staff.php");
                    
                    
                    
                }
                if(isset($_GET['add_faq'])) {
                    include(TEMPLATE_BACK . "/add_faq.php");
                    
                }
                if(isset($_GET['faq'])) {
                    include(TEMPLATE_BACK . "/faq.php");
                    
                    
                    
                }
                if(isset($_GET['delete_faq_id'])) {
                    include(TEMPLATE_BACK . "/delete_faq.php");
                    
                    
                    
                }
            
                
                ?>
                
                
                
                
                

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    <?php include(TEMPLATE_BACK . "/footer.php");  ?>