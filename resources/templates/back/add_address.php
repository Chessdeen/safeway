<?php add_addy(); ?>
<div class="col-md-12">

<div class="row">
<h1 class="page-header">
   Add Delivery Address and Mobile Number

</h1>
</div>
               


<form action="" method="post" enctype="multipart/form-data">


<div class="col-md-8">

<div class="form-group">
    <label for="delivery-addy">Address</label>
        <input type="text" name="delivery_addy" class="form-control" required>
       
    </div>
    <div class="form-group">
    <label for="delivery-phone">Mobile Number</label>
        <input type="text" name="delivery_phone" class="form-control" required>
       
    </div>
    <div class="form-group">
         <label for="location">Logistics Location</label>
        <select name="location" id="" class="form-control" required>
            <option value="">Select Logistics</option>
            <option value="Ibadan">Within Ibadan</option>
            <option value="Nigeria">Nigeria</option>
            <option value="International">International Logistics</option>
            
           
        </select>
    
    
    </div>
    
 <div class="form-group">
        <input type="submit" name="publish" class="btn btn-primary btn-lg" value="Publish">
    </div>


</div><!--Main Content-->








    
</form>



                


