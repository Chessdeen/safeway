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
        
        update_user();
    }


?>



                        <h1 class="page-header">
                            Edit User
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
                            <select name="user_role" for="user_role" required>
                                <option type="text" value="<?php echo $user_role; ?>" class="form-control"><?php echo $user_role; ?></option>
                                <option type="text" value="admin" class="form-control">Admin</option>
                                <option type="text" value="subscriber" class="form-control">Subscriber</option>
                                <option type="text" value="editor" class="form-control">Editor</option>
                            </select>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                            <input autocomplete="off" type="password" name="password" class="form-control" value="" required>
                               
                           </div>

                            <div class="form-group">

        

                            <input type="submit" name="update" id="btn-registration" class="btn btn-custom btn-lg btn-blockt" value="Update" style="background-color: #839ffa;">
                               
                           </div>
                                
                           
                            

                        </div>

                      

            </form>





    