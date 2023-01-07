<?php require_once("../../resources/config.php");



if(isset($_GET['delete_address_id'])) {
    
    $query = query("DELETE FROM delivery WHERE delivery_id = " . escape_string($_GET['delete_address_id']) . " ");
    confirm($query);
    
    
    set_message("Address Deleted");
    redirect("index.php?profile");
    
    
    
    
} else {
    
    redirect("index.php?profile");
    
    
}





 ?>