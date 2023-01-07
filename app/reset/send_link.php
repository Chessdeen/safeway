<?php
if(isset($_POST['submit_email']) && $_POST['email'])
{
  mysql_connect('localhost','safeygwt_skin','Azby1010(.)<.>');
  mysql_select_db('safeygwt_safeway');
  $select=mysql_query("select email,password from users where email='$email'");
  if(mysql_num_rows($select)==1)
  {
    while($row=mysql_fetch_array($select))
    {
      $email=md5($row['email']);
      $pass=md5($row['password']);
    }
    $link="<a href='www.safewayskin.com/app/reset/reset_pass.php?key=".$email."&reset=".$pass."'>Click To Reset password</a>";
    require_once('vendor/autoload.php');
    $mail = new PHPMailer();
    $mail->CharSet =  "utf-8";
    $mail->IsSMTP();
    // enable SMTP authentication
    $mail->SMTPAuth = true;                  
    // GMAIL username
    $mail->Username = "safeway.skincare@gmail.com";
    // GMAIL password
    $mail->Password = "Azby1010(.)";
    $mail->SMTPSecure = "ssl";  
    // sets GMAIL as the SMTP server
    $mail->Host = "smtp.gmail.com";
    // set the SMTP port for the GMAIL server
    $mail->Port = "465";
    $mail->From='safeway.skincare@gmail.com';
    $mail->FromName='Hamidah';
    $mail->AddAddress('reciever_email_id', 'reciever_name');
    $mail->Subject  =  'Reset Password';
    $mail->IsHTML(true);
    $mail->Body    = 'Click On This Link to Reset Password '.$pass.'';
    if($mail->Send())
    {
      echo "Check Your Email and Click on the link sent to your email";
    }
    else
    {
      echo "Mail Error - >".$mail->ErrorInfo;
    }
  }	
}
?>