<?php require_once("../../resources/config.php");



if(isset($_GET['delete_faq_id'])) {
    
    $query = query("DELETE FROM faq WHERE id = " . escape_string($_GET['delete_faq_id']) . " ");
    confirm($query);
    
    
    set_message("FAQ Deleted");
    redirect("index.php?faq");
    
    
    
    
} else {
    
    redirect("index.php?faq");
    
    
}





 ?>