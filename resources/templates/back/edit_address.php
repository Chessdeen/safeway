<?php 

    
    if(isset($_GET['id'])) {
        
        $query = query("SELECT * FROM delivery WHERE delivery_id = " . escape_string($_GET['id']) . " ");
        confirm($query);
        
        while($row = fetch_array($query)) {
            
            
$delivery_addy                 = escape_string($row['delivery_addy']);
$delivery_phone                    = escape_string($row['delivery_phone']);
$user_id                = escape_string($row['user_id']);

       
        }
        
        update_delivery();
    }


?>




                        <h1 class="page-header">
                            Edit Address
                        </h1>

                    <form action="" method="post" enctype="multipart/form-data">

  


                        <div class="col-md-6">


                           <div class="form-group">
                            <label for="address">Delivery Address</label>
                            <input type="text" name="delivery_addy" class="form-control"  value="<?php echo $delivery_addy; ?>" required>
                               
                           </div>
                           
                           <div class="form-group">
                                <label for="Phone">Delivery Contact</label>
                            <input type="text" name="delivery_phone" class="form-control" value="<?php echo $delivery_phone; ?>" required>
                               
                           </div>

                           
                           
                                 <div class="form-group">

        
                            <div class="pull-left">
                            <input type="submit" name="update"  class="btn btn-custom btn-lg btn-blockt" value="Update" style="background-color: #839ffa;">
                            </div>
                            <div class="pull-right">
                            <a href="index.php?profile" class="btn btn-danger" style="min-height:30px;
                            padding: 10px 16px;
                            font-size: 18px;
                            line-height: 1.3333333;
                            border-radius: 6px;
                            display: inline-block;
                            text-align: center;
                            white-space: nowrap;
                            vertical-align: middle;
                            touch-action: manipulation;
                            user-select: none;
                            background-image: none;
                            border: 1px solid transparent;">Cancel</a>
                           </div>
                               
                           </div>
                           
                            

                        </div>

                      

            </form>





    