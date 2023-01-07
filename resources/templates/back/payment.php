<?php 

if(isset($_POST['tx'])) {

$amount = $_POST['amt'];
$transaction = $_POST['tx'];
$status = $_POST['st'];
$currency = $_POST['currency_code']; 
$total = 0;
$item_quantity = 0;

    $receipt            = escape_string($_FILES['file']['name']);
    $image_temp_location      = escape_string($_FILES['file']['tmp_name']);
    
    move_uploaded_file($image_temp_location , UPLOAD_DIRECTORY . DS . $receipt);
    
    $insert_receipt = query("INSERT INTO receipt (receipt,user_id, username) VALUES('{$receipt}','$_SESSION[user_id]','$_SESSION[username]')");
    
    confirm($insert_receipt);
    

$location = $_POST['location'];

foreach ($_SESSION as $name => $value) {

if($value > 0 ) {

if(substr($name, 0, 8 ) == "product_") {

$length = strlen($name)  - 8;
$id = substr($name, 8 , $length);


$send_order = query("INSERT INTO orders (order_amount, order_transaction, order_status, order_currency,user_id) VALUES('$_SESSION[item_total]','{$transaction}','{$status}','{$currency}', '$_SESSION[user_id]')");
$last_id = last_id();
confirm($send_order);


$query = query("SELECT * FROM products WHERE product_id = " . escape_string($id). " ");
confirm($query);

while($row = fetch_array($query)) {
$product_price = $row['product_price'];
$product_title = $row['product_title'];
$sub = $row['product_price']*$value;
$item_quantity +=$value;




$insert_report = query("INSERT INTO reports (product_id, order_id, product_title, product_price, product_quantity,user) VALUES('{$id}', '{$last_id}','{$product_title}','{$product_price}','{$value}','$_SESSION[username]')");

confirm($insert_report);



$insert_location = query("INSERT INTO delivery (location) VALUES('{$location}')");

confirm($insert_location);

}

$total += $sub;
//echo $item_quantity;

}
}


}


session_destroy();    
redirect("../thank_you.php");

}


?>








<div class="col-lg-12">
    <h1 class="page-header"> Payment </h1>
    <small><p style="line-height:1.2;color:#d9534f;">Payment Instructions:<br>1. Copy Safeway Dermatology account number displayed below by clicking the <span style="color:black;"><button onclick="none">Copy</button></span> button. <br>
   2. You are expected to upload your payment receipt for validation of all payments made.</p></small>
    <h3 class="bg-success"><?php display_message(); ?></h3>
   
 
    <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Payment Panel</h3>
                </div>
                <div class="panel-body">
                     <table class="table table-striped">
        <thead>
          <tr>
           <th>Product</th>
           <th>Price</th>
           <th>Quantity</th>
           <th>Sub-total</th>
          </tr>
        </thead>
        <tbody>
            <?php show_product(); ?>
        </tbody>
    </table>

    
    <hr>

    
    <div>
    
                        
                    
                    
                        <div class="col-xs-6 pull-right ">
                        <h3>Cart Totals</h3>
                        
                        <table class="table table-bordered" cellspacing="0">
                        
                        <tr class="cart-subtotal">
                        <th>Items:</th>
                        <td><strong><span class="amount"><?php
                        echo isset($_SESSION['item_quantity']) ? $_SESSION['item_quantity'] : $_SESSION['item_quantity'] = "0"; 
                        ?></span></strong></td>
                        </tr>
                        <tr class="order-total">
                        <th>Order Total</th>
                        <td><strong><span class="amount">&#8358;<?php
                        echo isset($_SESSION['item_total']) ? $_SESSION['item_total'] : $_SESSION['item_total'] = "0"; 
                        ?>
                        
                        
                        </span></strong> </td>
                        </tr>
                            
                       <?php get_logistics(); ?>
                        
                        
                        </tbody>
                        </table>
                        
                        </div><!-- CART TOTALS-->
        </div>
        
        <div class=" pull-left">
                        <h3 class="">Account Data</h3>
                        
                        <table class="table table-bordered" cellspacing="0">
                        
                        <tr class="account-name">
                        <th>Account Name: </th>
                        <td><strong><span class="account-name">THE SAFEWAY MEDICAL CENTRE</span></strong></td>
                        </tr>
                        <tr class="bank-name">
                        <th>Bank Name:</th>
                        <td><strong><span class="bank-name">STERLING BANK</span></strong> </td>
                        </tr>
                        <tr class="bank-name">
                        <th>Account Number:</th>
                        <td><strong>
                                <span class="bank-name">
                                    <!-- The text field -->
                                    <input type="text" value="0500914176" id="myInput" readonly>
                                    
                                    <!-- The button used to copy the text -->
                                    <button onclick="myFunction()">Copy</button>
                                </span>
                            </strong> </td>
                        </tr>
                            
                        
                        
                        </tbody>
                        </table>
                        
                        
                         <form action="" method="post" enctype="multipart/form-data"> 
                            <input type="hidden" name="currency_code" value="NGN">
                            <input type="hidden" name="st" value="Completed">
                            <input type="hidden" name="tx" value="Completed">
                            
                            
                            <div class="form-group">
                            <label for="payment-image">Transaction Receipt</label>
                            <input type="file" name="file" required>
                            
                            </div>
                            
                            <div class="form-group">
                           
                            <input  type="submit" name="tx" class="btn btn-primary btn-lg" value="Paid" > 
                            </div>
                            
                        </form>             
                        </div><!-- Account-->
        
                </div>
            </div>
    </div>
</div>
    <script>
function myFunction() {
  // Get the text field
  var copyText = document.getElementById("myInput");

  // Select the text field
  copyText.select();
  copyText.setSelectionRange(0, 99999); // For mobile devices

   // Copy the text inside the text field
  navigator.clipboard.writeText(copyText.value);

  // Alert the copied text
  alert(" Account Number Copied: " + copyText.value);
}
</script>