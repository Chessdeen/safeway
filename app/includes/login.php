<?php require_once("../../resources/config.php");   ?>
<?php
                
                  if(isset($_POST['submit'])) {
                      
                   echo $username = $_POST['$username'];
                    echo $password = $_POST['$password'];
                      
                      
                      
                    // $username = $_POST['$username'];
                    // $password = $_POST['$password'];
                    
                    // $username = mysqli_real_escape_string($connection, $username);
                    // $password = mysqli_real_escape_string($connection, $password);
                    
                    // $query = "SELECT * FROM users WHERE username = '{$username}' ";
                    // $select_user_query = mysqli_query($connection, $query);
                    // if(!$select_user_query) {
                    //     die("QUERY FAILED". mysqli_error($cnnection));
                        
                    // }
                    
                    // while($row = mysqli_fetch_array($select_user_query)) {
                    //     $db_user_id = $row['user_id'];
                    //     $db_username = $row['username'];
                    //     $db_password = $row['password'];
                    //     $db_fisrtname = $row['user_firtname'];
                    //     $db_lastname = $row['user_lastname'];
                    //     $db_user_role = $row['user_role'];
                    // }
                    
                    // if(password_veryify($password,$db_password)) {
                    //     $_SESSION['username'] = $db_username;
                    //     $_SESSION['user_firtname'] = $db_fisrtname;
                    //     $_SESSION['$lastname'] = $db_lastname;
                    //     $_SESSION['user_role'] = $db_user_role;
                        
                    //     header("Location: ../admin");
                        
                    // } else {
                    //     header("Location: ../index.php");
                        
                    // }
                    
                }
                
                ?>