 <?php require_once("../resources/config.php");   ?>
<?php session_start(); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php");   ?>



<?php
    
    
    // require './vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
    // require './classes/config.php';
    
    
    // $mail = new PHPMailer();
                    
    //  echo get_class($mail);
    
    
    if(!isset($_GET['forgot'])){

        redirect('index');
        
    }

    if(ifItIsMethod('post')){
        
        if(isset($_POST['email'])) {
            
            $email = $_POST['email'];
            
            $length = 50;
            
            $token = bin2hex(openssl_random_pseudo_bytes($length));
            
            
            
            if(email_exists($email)){
                
              if($stmt = mysqli_prepare($connection, "UPDATE users SET token='{$token}' WHERE email= ?")){
                   
                      mysqli_stmt_bind_param($stmt, "s", $email);
                      mysqli_stmt_execute($stmt);
                      mysqli_stmt_close($stmt);
                       
                       
            //         /**
            //          *
            //          * configure PHPMailer                      *
            //          *
            //          */
                    
                    
            //         $mail = new PHPMailer();
                    
            //         echo get_class($mail);
                    
                    // $insert_forgot = query("INSERT INTO forgot (id, email) VALUES('{$id}', '{$email}'");
                    
                    // confirm($insert_forgot);
                    
                    redirect ('https://tawk.to/chat/63758d48b0d6371309cf71e2/1gi1ivpks');
                    
                }
            }
            
        }
        
    }
    
    
    




// require './vendor/autoload.php';

//     if(!isset($_GET['forgot'])){

//         redirect('index');

//     }


//     if(ifItIsMethod('post')){

//         if(isset($_POST['email'])) {

//             $email = $_POST['email'];

//             $length = 50;

//             $token = bin2hex(openssl_random_pseudo_bytes($length));


//             if(email_exists($email)){


//                 if($stmt = mysqli_prepare($connection, "UPDATE users SET token='{$token}' WHERE email= ?")){

//                     mysqli_stmt_bind_param($stmt, "s", $email);
//                     mysqli_stmt_execute($stmt);
//                     mysqli_stmt_close($stmt);



//                     /**
//                      *
//                      * configure PHPMailer
//                      *
//                      *
//                      */

//                     $mail = new PHPMailer();

//                     $mail->isSMTP();
//                     $mail->Host = Config::SMTP_HOST;
//                     $mail->Username = Config::SMTP_USER;
//                     $mail->Password = Config::SMTP_PASSWORD;
//                     $mail->Port = Config::SMTP_PORT;
//                     $mail->SMTPSecure = 'tls';
//                     $mail->SMTPAuth = true;
//                     $mail->isHTML(true);
//                     $mail->CharSet = 'UTF-8';


//                     $mail->setFrom('hello@safewayskin.com', 'Hamidah');
//                     $mail->addAddress($email);

//                     $mail->Subject = 'This is a test email';

//                     $mail->Body = '<p>Please click to reset your password

//                     <a href="https://safewayskin.com/app/reset.php?email='.$email.'&token='.$token.' ">https://safewayskin.com/app/reset.php?email='.$email.'&token='.$token.'</a>



//                     </p>';


//                     if($mail->send()){

//                         $emailSent = true;

//                     } else{

//                         echo "NOT SENT";

//                     }





//                 }




//             }




//         }


//      }





?>






<!-- Page Content -->
<div class="container">

    <div class="form-gap"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="text-center">


                        <?php if(!isset( $emailSent)): ?>


                                <h3><i class="fa fa-lock fa-4x"></i></h3>
                                <h2 class="text-center">Forgot Password?</h2>
                                <p>You can reset your password here.</p>
                                <div class="panel-body">




                                    <form id="register-form" role="form" autocomplete="off" class="form" method="post">

                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                                <input id="email" name="email" placeholder="email address" class="form-control"  type="email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Reset Password" type="submit">
                                        </div>

                                        <input type="hidden" class="hide" name="token" id="token" value="">
                                    </form>
                                    

                                </div><!-- Body-->

                            <?php else: ?>


                                <h2>Please check your email</h2>


                            <?php endIf; ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <hr>

       <?php include(TEMPLATE_FRONT . DS . "footer.php");   ?>
       
</div> <!-- /.container -->

