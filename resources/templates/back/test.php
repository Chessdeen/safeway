<?php

$upload_directory = "uploads";


// helper functions


function last_id() {
    
    global $connection;
    
    return mysqli_insert_id($connection);
}


function set_message($msg){
    
    if(!empty($msg)) {
        
        $_SESSION['message'] = $msg;
        
    } else {
        
        $msg = "";
    }
    
}

function display_message() {
    
    if(isset($_SESSION['message'])) {
        
        echo $_SESSION['message'];
        unset($_SESSION['message']);
        
    }
}


function redirect($location){
    
    header("Location: $location ");
}


function query($sql) {
    
    global $connection;
    
    return mysqli_query($connection, $sql);
}


function confirm($result){
    
    global $connection;
    
     if(!$result) {
            die("QUERY FAILED" . mysqli_error($connection));
        }
    
}


function escape_string($string){
    
global $connection;

return mysqli_real_escape_string($connection, $string);
        
}

function fetch_array($result){
    
return mysqli_fetch_array($result);
}



/******************************FRONT END FUNCTIONS******************************/

// Count Records

function count_all_records($table){
    return mysqli_num_rows(query('SELECT * FROM '.$table));
}


function count_all_products_in_stock(){
    
    return mysqli_num_rows(query('SELECT * FROM products WHERE product_quantity >=1'));
    
}




//GET PRODUCTS

function get_products_with_pagination($perPage = "6"){
    
$rows = count_all_products_in_stock();



if(isset($_GET['page'])){
    
    $page = preg_replace('#[^0-9]#', '', $_GET['page']);
    
} else {
    
    $page = 1;
}




$lastPage = ceil($rows / $perPage) ;

if($page < 1) {
    
    $page = 1;
} elseif($page > $lastPage){
    
    $page = $lastPage;
    
}


$middleNumbers = '';

$sub1 = $page - 1;
$sub2 = $page - 2;
$add1 = $page + 1;
$add2 = $page + 2;

if($page == 1) {
    
    
    $middleNumbers .= '<li class="page-item active"><a>' .$page. '</a></li>';
    
    $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$add1.'">' .$add1. '</a></li>';
    
    
    
    
    
    
} elseif ($page == $lastPage) {
    
    
    $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$sub1.'">' .$sub1. '</a></li>';
    
    $middleNumbers .= '<li class="page-item active"><a>' .$page. '</a></li>';
    
}elseif ($page > 2 && $page < ($lastPage -1)) {
    
    $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$sub2.'">' .$sub2. '</a></li>';
    
    $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$sub1.'">' .$sub1. '</a></li>';
    
    $middleNumbers .= '<li class="page-item active"><a>' .$page. '</a></li>';
    
    $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$add1.'">' .$add1. '</a></li>';
    
    $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$add2.'">' .$add2. '</a></li>';
    
    
   
    
} elseif($page > 1 && $page < $lastPage) {
    
    
    
    $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$sub1.'">' .$sub1. '</a></li>';
    
    $middleNumbers .= '<li class="page-item active"><a>' .$page. '</a></li>';
    
    $middleNumbers .= '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$add1.'">' .$add1. '</a></li>'; 
    
    
    
     //echo "<ul class='pagination'>{$middleNumbers}</ul>";
    
}


$limit = 'LIMIT '. ($page-1) * $perPage . ',' . $perPage;


$query2 = query("SELECT * FROM products WHERE product_quantity >= 1 ". $limit);
confirm($query2);


$outputPagination = "";

// if($lastPage != 1){
    
//     echo "Page $page of $lastPage";
    
// }

if($page != 1){
    
    $prev = $page - 1;
    
    $outputPagination .='<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$prev.'">Back</a></li>';
}


$outputPagination .= $middleNumbers;




if($page != $lastPage) {
    $next = $page + 1;
    $outputPagination .='<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?page='.$next.'">Next</a></li>';
}




while($row = fetch_array($query2)) {

    $product_image =  display_image($row['product_image']);
    
    
$product = <<<DELIMETER
<div class="col-sm-4 col-lg-4 col-md-4">
    <div class="thumbnail">
        <a href="item.php?id={$row['product_id']}"><img style="height:90px" src="../resources/{$product_image}" alt=""></a>
        <div class="caption">
            <h4 class="pull-right">&#8358;{$row['product_price']}</h4>
            <h4><a href="item.php?id={$row['product_id']}">{$row['product_title']}</a>
            </h4>
            <p>{$row['short_desc']}</p>
             <p class="text-center">
                <a class="btn btn-primary" target="_blank" href="../app/resources/cart.php?add={$row['product_id']}">Add to cart</a>
                <a href="item.php?id={$row['product_id']}" class="btn btn-default">More Info</a>
            </p>

        </div>
    </div>
</div>

DELIMETER;
       
echo $product;
    
    }
    
    echo "<div class='text-center' style='clear:both'><ul class='pagination'>{$outputPagination}</ul></div>";
    
}

//GET CATEGORIES

function get_categories(){
    $query = query("SELECT * FROM categories");
    confirm($query);
    
    while($row = fetch_array($query)) {

$categories_links = <<<DELIMETER

<a href='category.php?id={$row['cat_id']}' class='list-group-item'>{$row['cat_title']}</a>

DELIMETER;
        
echo $categories_links;
    }
}



//GET PRODUCTS IN CATEGORY PAGE

function get_products_in_cart_page(){
    
$query = query("SELECT * FROM products WHERE product_category_id = " . escape_string($_GET['id']) . " AND product_quantity >= 1 ");
confirm($query);

while($row = fetch_array($query)) {

    $product_image =  display_image($row['product_image']);
    
$product = <<<DELIMETER
<div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img style="height:90px" src="../resources/{$product_image}" alt="">
                    <div class="caption">
                        <h3>{$row['product_title']}</h3>
                        <p>{$row['short_desc']}</p>
                        <p>
                            <a href="../resources/cart.php?add={$row['product_id']}" class="btn btn-primary">Buy Now!</a> <a href="item.php?id={$row['product_id']}" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>


DELIMETER;
       
echo $product;
    
    }
    
}



//GET PRODUCTS IN SHOP PAGE

function get_products_in_shop_page() {
    
$query = query("SELECT * FROM products WHERE product_quantity >= 1 ");
confirm($query);

while($row = fetch_array($query)) {

    $product_image =  display_image($row['product_image']);
    
$product = <<<DELIMETER
<div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img style="height:90px" src="../resources/{$product_image}" alt="">
                    <div class="caption">
                        <h3>{$row['product_title']}</h3>
                        <p>{$row['short_desc']}</p>
                        <p>
                            <a href="../resources/cart.php?add={$row['product_id']}" class="btn btn-primary">Buy Now!</a> <a href="item.php?id={$row['product_id']}" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>


DELIMETER;
       
echo $product;
    
    }
    
}


// Login

function login_user(){
    
   
    
   if(isset($_POST['submit'])){
       
      $username = escape_string($_POST['username']);
      $password = escape_string($_POST['password']);
       
       $query = query("SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}' ");
       confirm($query);
       
       
      if(mysqli_num_rows($query) == 0) {
          
          set_message("Your Username or Password is incorrect");
          redirect("login.php");
          
      } else {
          
          $_SESSION['username'] = $username;
          
          redirect("admin");
          
      }
       
   } 
    
}


function user_login(){
    
    if(isset($_POST['submit'])) {
                   
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    
                    $username = mysqli_real_escape_string($connection, $username);
                   $password = mysqli_real_escape_string($connection, $password);
                      
                    $query = "SELECT * FROM users WHERE username = '{$username}' ";
                    $select_user_query = mysqli_query($connection, $query);
                    
                    if(!$select_user_query) {
                        die("QUERY FAILED". mysqli_error($connection));
                        
                    }
                    
                      while($row = mysqli_fetch_array($select_user_query)) {
                          
                          
                        $db_user_id = $row['user_id'];
                        $db_username = $row['username'];
                        $db_password = $row['password'];
                        $db_fisrtname = $row['user_firtname'];
                        $db_lastname = $row['user_lastname'];
                        $db_user_role = $row['user_role'];
                        
                    }
                    
                    if(password_verify($password,$db_password)) {
                        
                        $_SESSION['username'] = $db_username;
                        $_SESSION['user_firstname'] = $db_firstname;
                        $_SESSION['$lastname'] = $db_lastname;
                        $_SESSION['user_role'] = $db_user_role;
                        
                        header("Location: admin ");
                    } else {
                        header ("Location: index.php");
                    }
                    
                }
                
}





// Send Message

function send_message() {
    
    if(isset($_POST['submit'])) {
        
        
        $to         = "someEmailaddress@gmail.com";
        $from_name  = $_POST['name'];
        $subject    = $_POST['subject'];
        $email      = $_POST['email'];
        $message    = $_POST['message'];
        
        $headers = "From: {$from_name} {$email}";
        
        $result = mail($to, $subject, $message,$headers);
        
        if(!$result) {
            
            set_message("Sorry we could not send your message");
            redirect("contact.php");
            
        } else {
            
            set_message("Your Message has been sent");
            redirect("contact.php");
            
        }
        
    }
     
}


/******************************BACK END FUNCTIONS******************************/


/******************************* Admin Orders *******************************/
function display_orders() {

    
$query = query("SELECT * FROM orders");
confirm($query);
    
    
while($row = fetch_array($query)) {

$orders = <<<DELIMETER

<tr>
    <td>{$row['order_id']}</td>
    <td>{$row['order_amount']}</td>
    <td>{$row['order_transaction']}</td>
    <td>{$row['order_currency']}</td>
    <td>{$row['order_status']}</td>
    <td><a class="btn btn-danger" href="index.php?delete_order_id={$row['order_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
    
</tr>


DELIMETER;
    
echo $orders;
    
}



}



/******************************* Admin Products Page *******************************/



function display_image($picture) {
    
    global $upload_directory;
    
    return $upload_directory . DS . $picture;
    
    
    
    
    
}


/******************************* Get Products In Admin Page *******************************/

function get_products_in_admin() {

$query = query("SELECT * FROM products");
confirm($query);

while($row = fetch_array($query)) {
    
$category = show_product_category_title($row['product_category_id']);
    
    
    
    $product_image =  display_image($row['product_image']);
        

$product = <<<DELIMETER

    <tr>
        <td>{$row['product_id']}</td>
        <td>{$row['product_title']} <br>
        <a href="index.php?edit_product&id={$row['product_id']}"><img width='100' height='40' src="../../../resources/{$product_image}" alt="product image"></a>
        </td>
        <td>{$row['product_description']}</td>
        <td>{$category}</td>
        <td>{$row['product_price']}</td>
        <td>{$row['product_quantity']}</td>
         <td><a class="btn btn-danger" href="index.php?delete_product_id={$row['product_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
    </tr>
        
DELIMETER;
       
echo $product;
    
    }

}


/******************************* Show Products Categories Title *******************************/


function show_product_category_title($product_category_id) {
    
    
    $category_query = query("SELECT * FROM categories WHERE cat_id = '{$product_category_id}' ");   
    confirm($category_query);
    
    while($category_row = fetch_array($category_query)) {
        
        return $category_row['cat_title'];
        
        
    }
    
}




/******************************* Add Products in Admin *******************************/

function add_product() {
    
if(isset($_POST['publish'])) {
    
    
  $product_title            = escape_string($_POST['product_title']);
  $product_category_id      = escape_string($_POST['product_category_id']);
  $product_price            = escape_string($_POST['product_price']);
  $product_description      = escape_string($_POST['product_description']);
  $short_desc               = escape_string($_POST['short_desc']);
  $product_quantity         = escape_string($_POST['product_quantity']);
    
  $product_image            = escape_string($_FILES['file']['name']);
  $image_temp_location      = escape_string($_FILES['file']['tmp_name']);
    
  move_uploaded_file($image_temp_location , UPLOAD_DIRECTORY . DS . $product_image);
    
    
  $query = query("INSERT INTO products(product_title, product_category_id, product_price, product_description, short_desc, product_quantity, product_image) VALUES('{$product_title}', '{$product_category_id}', '{$product_price}', '{$product_description}', '{$short_desc}', '{$product_quantity}', '{$product_image}')");
    
    $last_id = last_id();
    confirm($query);
    
    set_message("New Product with id {$last_id} was Added");
    redirect("index.php?products");
    
    
    
    
    
}
    
}




/******************************* Show Category in Products Page in Admin *******************************/



function show_categories_add_product_page(){
    $query = query("SELECT * FROM categories");
    confirm($query);
    
    while($row = fetch_array($query)) {

$categories_options = <<<DELIMETER

<option value="{$row['cat_id']}">{$row['cat_title']}</option>

DELIMETER;
        
echo $categories_options;
    }
}




/******************************* Update Products Page in Admin *******************************/




function update_product() {
    
if(isset($_POST['update'])) {
    
    
  $product_title            = escape_string($_POST['product_title']);
  $product_category_id      = escape_string($_POST['product_category_id']);
  $product_price            = escape_string($_POST['product_price']);
  $product_description      = escape_string($_POST['product_description']);
  $short_desc               = escape_string($_POST['short_desc']);
  $product_quantity         = escape_string($_POST['product_quantity']);
    
  $product_image            = escape_string($_FILES['file']['name']);
  $image_temp_location      = escape_string($_FILES['file']['tmp_name']);
    
    
    
    if(empty($product_image)) {
        
        
        $get_pic = query("SELECT product_image FROM products WHERE product_id =" .escape_string($_GET['id']). "");
        confirm($get_pic);
        
        while($pic = fetch_array($get_pic)) {
            
            $product_image = $pic['product_image'];
            
        }
        
    }
    
    
    
  move_uploaded_file($image_temp_location , UPLOAD_DIRECTORY . DS . $product_image);
    
    
$query  = "UPDATE products SET ";
$query .= "product_title          = '{$product_title}'          , ";
$query .= "product_category_id    = '{$product_category_id}'    , ";
$query .= "product_price          = '{$product_price}'          , ";
$query .= "product_description    = '{$product_description}'    , ";
$query .= "short_desc             = '{$short_desc}'             , ";
$query .= "product_quantity       = '{$product_quantity}'       , ";
$query .= "product_image          = '{$product_image}'            ";
$query .= "WHERE product_id=" . escape_string($_GET['id']);

      
      
      
    $send_update_query = query($query);
    confirm($send_update_query);
    
    set_message("Product has been updated");
    redirect("index.php?products");
    
    
    
    
    
}
    
}




/******************************* Categories Page in Admin *******************************/

function show_categories_in_admin() {

    
$category_query = query("SELECT * FROM categories");
confirm($category_query);

while ($row = fetch_array($category_query)) {

$cat_id = $row['cat_id'];
$cat_title = $row['cat_title'];


$category = <<<DELIMETER

    <tr>
        <td>{$cat_id}</td>
        <td>{$cat_title}</td>
        <td><a class="btn btn-danger" href="index.php?delete_category_id={$row['cat_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
    </tr>

DELIMETER;
    
    echo $category;
    
}
    
}


/******************************* Add To Categories in Admin *******************************/


function add_category() {
    
if(isset($_POST['add_category'])) {

$cat_title = escape_string($_POST['cat_title']);
    
    if(empty($cat_title) || $cat_title == " ") {
        
        echo "<p class='bg-danger'>This Cannot Be Empty</p>";
        
    } else {
        
    
    

$insert_cat = query("INSERT INTO categories(cat_title) VALUES('{$cat_title}') ");
confirm($insert_cat);
set_message("Category Created");
    
        

        
        }
        
    }
    
}



/******************************* Users in Admin *******************************/


function display_users() {

    
$user_query = query("SELECT * FROM users");
confirm($user_query);

while ($row = fetch_array($user_query)) {

$user_id = $row['user_id'];
$username = $row['username'];
$email = $row['email'];
$user_firstname = $row['user_firstname'];
$user_lastname = $row['user_lastname'];
$user_role = $row['user_role'];



$user = <<<DELIMETER

    <tr>
        <td>{$user_id}</td>
        <td>{$username}</td>
        <td>{$email}</td>
        <td>{$user_firstname}</td>
        <td>{$user_lastname}</td>
        <td>{$user_role}</td>
        <td><a href="index.php?change_role&id={$row['user_id']}">Admin</a> | <a href="index.php?users?change_to_sub={$row['user_id']}">Subscriber</a></td>
        <td><a href="index.php?edit_user&edit_user={$row['user_id']}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></a></td>
        <td><a href="index.php?delete_user_id={$row['user_id']}" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a></td>
        
    </tr>

DELIMETER;
    
    echo $user;
    
}
    
}



/******************************* Update Users Page in Admin *******************************/




function update_user() {
    
if(isset($_POST['update'])) {
    
    
$username                 = escape_string($row['username']);
$email                    = escape_string($row['email']);
$user_firstname           = escape_string($row['user_firstname']);
$user_lastname            = escape_string($row['user_lastname']);
$user_role                = escape_string($row['user_role']);
$user_password            = escape_string($row['password']);
    
    
   
$query  = "UPDATE users SET ";
$query .= "username          = '{$username}'                , ";
$query .= "email             = '{$email}'                   , ";
$query .= "user_firstname    = '{$user_firstname}'          , ";
$query .= "user_lastname     = '{$user_lastname}'           , ";
$query .= "user_role         = '{$user_role}'               , ";
$query .= "password          = '{$user_password}'             ";
$query .= "WHERE user_id=" . escape_string($_GET['edit_user']);

      
      
      
    $send_update_query = query($query);
    confirm($send_update_query);
    
    set_message("User has been updated");
    redirect("index.php?users");
    
    
    
    
    
}
    
}






/************************** Contact in Admin **************************/


function display_contact() {

    
$contact_query = query("SELECT * FROM contact");
confirm($contact_query);

while ($row = fetch_array($contact_query)) {

$id = $row['id'];
$name = $row['name'];
$email = $row['email'];
$subject = $row['subject'];
$message = $row['message'];



$contact = <<<DELIMETER

    <tr>
        <td>{$id}</td>
        <td>{$name}</td>
        <td>{$email}</td>
        <td>{$message}</td>
        <td><a class="btn btn-danger" href="index.php?delete_contact_id={$row['id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
    </tr>

DELIMETER;
    
    echo $contact;
    
}
    
}


/******************************* Add To Users in Admin *******************************/

function add_user() {
    
    if(isset($_POST['add_user'])) {
        
       $username    = escape_string($_POST['username']);
        $email      = escape_string($_POST['email']);
        $user_role   = escape_string($_POST['user_role']);
        $password   = escape_string($_POST['password']);
        
//        $user_photo = escape_string($_FILES['file']['name']);
//        $photo_temp = escape_string($_FILES['file']['tmp_name']);
//        
//        
//        move_uploaded_file($photo_temp, UPLOAD_DIRECTORY . DS . $user_photo);
        
        $password = password_hash( $password, PASSWORD_BCRYPT, array('cost' => 10) );
        
        $query = query("INSERT INTO users(username,email,user_role,password) VALUES('{$username}','{$email}','{$user_role}','{$password}') ");
        confirm($query);
        
        set_message("User Created");
        
        redirect("index.php?users");
        
    }
    
}



function add_email() {
    
    if(isset($_POST['add_email'])) {
        
        $username       = escape_string($_POST['username']);
        $email          = escape_string($_POST['email']);
        
        
        $query = query("INSERT INTO users(username,email) VALUES('{$username}','{$email}') ");
        confirm($query);
        
        set_message("User Added");
        
    }
    
}

function add_contact() {
    
    if(isset($_POST['add_contact'])) {
        
        $name           = escape_string($_POST['name']);
        $email          = escape_string($_POST['email']);
        $subject       = escape_string($_POST['subject']);
        $message       = escape_string($_POST['message']);
        
        
        $query = query("INSERT INTO contact(name,email,subject,message) VALUES('{$name}','{$email}','{$subject}','{$message}') ");
        confirm($query);
        
        set_message("Message Sent, A representative will get back to you shortly");
        
    }
    
}



/******************************* Get Report in Admin *******************************/

function get_reports() {

$query = query("SELECT * FROM reports");
confirm($query);

while($row = fetch_array($query)) {
    

        

$report = <<<DELIMETER

    <tr>
        <td>{$row['report_id']}</td>
        <td>{$row['product_id']}</td>
        <td>{$row['order_id']}</td>
        <td>{$row['product_price']}</td>
        <td>{$row['product_title']}</td>
        <td>{$row['product_quantity']}</td>
         <td><a class="btn btn-danger" href="index.php?delete_report_id={$row['report_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
    </tr>
        
DELIMETER;
       
echo $report;
    
    }

}





/*********************** Slider Function *****************************/



function add_slides() {
    
    if(isset($_POST['add_slide'])) {
        
        $slide_title        = escape_string($_POST['slide_title']);
        $slide_image        = escape_string($_FILES['file']['name']);
        $slide_image_loc    = escape_string($_FILES['file']['tmp_name']);
        
        if(empty($slide_title) || empty($slide_image)) {
            echo "<p class='bg-danger'>This field cannot be empty</p>";
            
            
        } else {
            
            move_uploaded_file($slide_image_loc, UPLOAD_DIRECTORY . DS . $slide_image);
            
            
            $query = query("INSERT INTO slides(slide_title, slide_image) VALUES('{$slide_title}', '{$slide_image}')");
            confirm($query);
            set_message("Slide Added");
            
            redirect("index.php?slides");
            
            
        }
        
        
    }
    
    
    
}






function get_current_slide_in_admin() {
    

$query = query("SELECT * FROM slides ORDER BY slide_id DESC LIMIT 1");
confirm($query);

while($row = fetch_array($query)) {
    
$slide_image =  display_image($row['slide_image']);

$slide_active_admin = <<<DELIMETER


    <img class="img-responsive" src="../../resources/{$slide_image}" alt="">



DELIMETER;


echo $slide_active_admin;

    }
    
    
}






function get_active_slide() {
    
    
$query = query("SELECT * FROM slides ORDER BY slide_id DESC LIMIT 1");
confirm($query);

while($row = fetch_array($query)) {
    
$slide_image =  display_image($row['slide_image']);

$slide_active = <<<DELIMETER

<div class="item active">
    <img class="slide-image" src="../resources/{$slide_image}" alt="">
</div>


DELIMETER;


echo $slide_active;

    }
    
    
}


function get_slides() {
    
$query = query("SELECT * FROM slides");
confirm($query);

while($row = fetch_array($query)) {
    
$slide_image =  display_image($row['slide_image']);

$slides = <<<DELIMETER

<div class="item">
    <img class="slide-image" src="../resources/{$slide_image}" alt="">
</div>


DELIMETER;


echo $slides;

    }
    
}



function get_slide_thumbnails() {
    
    
    
    $query = query("SELECT * FROM slides ORDER BY slide_id ASC ");
confirm($query);

while($row = fetch_array($query)) {
    
$slide_image =  display_image($row['slide_image']);

$slide_thumb_admin = <<<DELIMETER

<div class="col-xs-6 col-md-3 image_container">
    <a href="index.php?delete_slide_id={$row['slide_id']}">
        
       <img class="img-responsive slide_image" src="../../resources/{$slide_image}" alt="">
        
    </a>
    
    <div class="caption">
        <p>{$row['slide_title']}</p>
    </div>

</div>

DELIMETER;


echo $slide_thumb_admin;

    }
    
    
    
}





?>