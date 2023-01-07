<?php require_once("../../resources/config.php");



                            if(isset($_GET['change_to_admin'])) {
                            
                                $user_id = $_GET['change_to_admin'];
                                
                                $query = "UPDATE users SET user_role = 'admin' WHERE user_id = $user_id ";
                                $change_to_admin_query = mysqli_query($connection, $query);
                                header("Location: index.php?users");
                                
                            }
                            
                            
                            
                            
                            if(isset($_GET['change_to_sub'])) {
                            
                                $the_user_id = $_GET['change_to_sub'];
                                
                                $query = "UPDATE users SET user_role = 'subscriber' WHERE user_id = $the_user_id ";
                                $change_to_sub_query = mysqli_query($connection, $query);
                                header("Location: index.php?users");
                                
                            }



 ?>