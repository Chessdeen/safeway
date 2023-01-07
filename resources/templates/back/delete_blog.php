<?php require_once("../../resources/config.php");



if(isset($_GET['delete_blog_id'])) {
    
    $query = query("DELETE FROM blogs WHERE blog_id = " . escape_string($_GET['delete_blog_id']) . " ");
    confirm($query);
    
    
    set_message("Blog Deleted");
    redirect("index.php?blogs");
    
    
    
    
} else {
    
    redirect("index.php?blogs");
    
    
}





 ?>