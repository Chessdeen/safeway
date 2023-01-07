<?php add_staff(); ?>
<div class="col-md-12">

<div class="row">
<h1 class="page-header">
   Add Staff Data

</h1>
</div>
               


<form action="" method="post" enctype="multipart/form-data">


<div class="col-md-8">

<div class="form-group">
    <label for="staff-name">Staff Name </label>
        <input type="text" name="staff_name" class="form-control" required>
       
    </div>


    <div class="form-group">
           <label for="staff-details">Staff Details</label>
      <textarea name="staff_details" id="" cols="30" rows="10" class="form-control" required></textarea>
    </div>
    

</div><!--Main Content-->


<!-- SIDEBAR-->


<aside id="admin_sidebar" class="col-md-4">


    <!-- Staff Image -->
    <div class="form-group">
        <label for="staff-image">Staff Image</label>
        <input type="file" name="file" required>
      
    </div>

 <div class="form-group">
       <!--<input type="submit" name="draft" class="btn btn-warning btn-lg" value="Draft">-->
        <input type="submit" name="add_staff" class="btn btn-primary btn-lg" value="Publish">
    </div>

</aside><!--SIDEBAR-->


    
</form>



                


