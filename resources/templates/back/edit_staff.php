<?php 

    
    if(isset($_GET['id'])) {
        
        $query = query("SELECT * FROM staff_data WHERE id = " . escape_string($_GET['id']) . " ");
        confirm($query);
        
        while($row = fetch_array($query)) {

$staff_name            = escape_string($row['staff_name']);
$staff_details      = escape_string($row['staff_details']);
$staff_image            = escape_string($row['staff_image']);
            
$staff_image = display_image($row['staff_image']);
            
            
        }
        
        update_staff();
    }


?>




<div class="col-md-12">

<div class="row">
<h1 class="page-header">
   Edit Staff Data

</h1>
</div>
               


<form action="" method="post" enctype="multipart/form-data">


<div class="col-md-8">

<div class="form-group">
    <label for="staff-name">Staff Name </label>
        <input type="text" name="staff_name" class="form-control" value="<?php echo $staff_name; ?>" requiured>
       
    </div>


    <div class="form-group">
           <label for="staff-details">Staff Details</label>
      <textarea name="staff_details" id="" cols="30" rows="10" class="form-control" requiured><?php echo $staff_details; ?></textarea>
    </div>

</div><!--Main Content-->


<!-- SIDEBAR-->


<aside id="admin_sidebar" class="col-md-4">

    <!-- Staff Image -->
    <div class="form-group">
        <label for="staff-image">Staff Image</label>
        <input type="file" name="file" requiured> <br>
        
        <img width="200" src="../../resources/<?php echo $staff_image; ?>" alt="">
      
    </div>

 <div class="form-group">
       <!--<input type="submit" name="draft" class="btn btn-warning btn-lg" value="Draft">-->
        <input type="submit" name="update" class="btn btn-primary btn-lg" value="Update">
    </div>

</aside><!--SIDEBAR-->


    
</form>



                


