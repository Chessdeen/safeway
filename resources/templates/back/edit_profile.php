<?php 

    
    if(isset($_GET['id'])) {
        
        $query = query("SELECT * FROM users WHERE user_id = " . escape_string($_GET['id']) . " ");
        confirm($query);
        
        while($row = fetch_array($query)) {
            
            
$username                 = escape_string($row['username']);
$email                    = escape_string($row['email']);
$password                 = escape_string($row['password']);
$user_firstname           = escape_string($row['user_firstname']);
$user_lastname            = escape_string($row['user_lastname']);
$user_role                = escape_string($row['user_role']);

       
        }
        
        update_profile();
    }


?>



                        <h1 class="page-header">
                            Edit Profile
                        </h1>

                      <div class="col-md-6 user_image_box">
                          
                    <a href="#" data-toggle="modal" data-target="#photo-library"><img class="img-responsive" src="" alt=""></a>

                      </div>


                    <form action="" method="post" enctype="multipart/form-data">

  


                        <div class="col-md-6">


                           <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" class="form-control"  value="<?php echo $username; ?>" required>
                               
                           </div>
                           
                           <div class="form-group">
                                <label for="Email">Email</label>
                            <input type="text" name="email" class="form-control" value="<?php echo $email; ?>" required>
                               
                           </div>
    

                            <div class="form-group">
                                <label for="first name">First Name</label>
                            <input type="text" name="user_firstname" class="form-control"  value="<?php echo $user_firstname; ?>" required>
                               
                           </div>

                            <div class="form-group">
                                <label for="last name">Last Name</label>
                            <input type="text" name="user_lastname" class="form-control" value="<?php echo $user_lastname; ?>" required>
                               
                           </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                            <input autocomplete="off" type="password" name="password" class="form-control" value="" required>
                               
                           </div>

                            <div class="form-group">

        
                            <div class="pull-left">
                            <input type="submit" name="update" id="btn-registration" class="btn btn-custom btn-lg btn-blockt" value="Update" style="background-color: #839ffa;">
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





    