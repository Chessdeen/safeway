<?php require_once("../../resources/config.php");



if(isset($_GET['delete_contact_id'])) {
    
    $query = query("DELETE FROM contact WHERE id = " . escape_string($_GET['delete_contact_id']) . " ");
    confirm($query);
    
    
    set_message("Contact Deleted");
    redirect("index.php?contact");
    
    
    
    
} else {
    
    redirect("index.php?contact");
    
    
}





 ?>