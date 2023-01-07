<?php add_blog(); ?>
<div class="col-md-12">

<div class="row">
<h1 class="page-header">
   Add Blog

</h1>
</div>
               


<form action="" method="post" enctype="multipart/form-data">


<div class="col-md-8">

<div class="form-group">
    <label for="blog-title">Blog Title </label>
        <input type="text" name="blog_title" class="form-control" required>
       
    </div>
    <div class="form-group">
           <label for="blog-short-desc">short Description</label>
      <textarea name="blog_desc" id="" cols="30" rows="5" class="form-control" required></textarea>
    </div>


    <div class="form-group">
           <label for="blog-description">Blog Writeup</label>
      <textarea name="blog_description" id="" cols="30" rows="10" class="form-control" required></textarea>
    </div>



</div><!--Main Content-->


<!-- SIDEBAR-->


<aside id="admin_sidebar" class="col-md-4">

  

    <!-- Blog Image -->
    <div class="form-group">
        <label for="blog-image">Blog Image</label>
        <input type="file" name="file" required>
      
    </div>

 <div class="form-group">
        <input type="submit" name="publish" class="btn btn-primary btn-lg" value="Publish">
    </div>

</aside><!--SIDEBAR-->


    
</form>



                


