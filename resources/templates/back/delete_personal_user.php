<?php require_once("../../resources/config.php");



if(isset($_GET['delete_personal_user_id'])) {
    
    $query = query("DELETE FROM users WHERE user_id = " . escape_string($_GET['delete_personal_user_id']) . " ");
    confirm($query);
    
    
    session_destroy();
    redirect("../index.php");
    
    
  
    
} 
else {
    
    redirect("index.php");
    
    
}





 ?>