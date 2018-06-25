<?php
    include "../init.php";
    $obj = new base_class;
    
    if(isset($_GET['message'])){
        $user_id = $_SESSION['user_id'];
        
        if($obj->Normal_Query("SELECT clean_message_id FROM clean WHERE clean_user_id = ?", [$user_id])){
            $last_msg_row = $obj->Single_Result();
		    $last_msg_id = $last_msg_row->clean_message_id;
		
        }
    }
?>