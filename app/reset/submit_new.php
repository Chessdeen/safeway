<?php
if(isset($_POST['submit_password']) && $_POST['key'] && $_POST['reset'])
{
  $email=$_POST['email'];
  $pass=$_POST['password'];
  mysql_connect('localhost','safeygwt_skin','Azby1010(.)<.>');
  mysql_select_db('safeygwt_safeway');
  $select=mysql_query("update users set password='$pass' where email='$email'");
}
?>