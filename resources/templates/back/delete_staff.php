<?php require_once("../../resources/config.php");



if(isset($_GET['delete_staff_id'])) {
    
    $query = query("DELETE FROM staff_data WHERE id = " . escape_string($_GET['delete_staff_id']) . " ");
    confirm($query);
    
    
    set_message("Staff Data Deleted");
    redirect("index.php?staff");
    
    
    
    
} else {
    
    redirect("index.php?staff");
    
    
}





 ?>