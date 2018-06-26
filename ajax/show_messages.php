<?php
    include "../init.php";
    $obj = new base_class;
    
    if(isset($_GET['message'])){
        $user_id = $_SESSION['user_id'];
        
        if($obj->Normal_Query("SELECT clean_message_id FROM clean WHERE clean_user_id = ?", [$user_id])){
            $last_msg_row = $obj->Single_Result();
		    $last_msg_id = $last_msg_row->clean_message_id;
		    
		    $obj->Normal_Query("SELECT msg_id FROM messages ORDER BY msg_id DESC LIMIT 1");
		    $msg_row = $obj->Single_Result();
		    $msg_table_id = $msg_row->msg_id;
		    $obj->Normal_Query("SELECT * FROM messges INNER JOIN users ON messages messages.user_id = users.id
		    WHERE messages.msg_id BETWEEN $last_msg_id AND $msg_table_id ORDER BY messages.msg_id ASC");
		    
		    if($obj->Count_Rows() == 0){
		        echo "<p class='clean_message'>
		            Start a conversation with your friends
		        </p>"
		    } else {
		        $messages_row = $obj->fetch_all();
		        
		        foreach($messages_row as $informations):
		            $full_name = ucwords($informations->name);
			        $user_image = $informations->image;
			        $user_status = $informations->status;

			        $message = $informations->message;
			        $msg_type = $informations->msg_type;
		            $db_user_id = $informations->user_id;
			        $msg_time = $obj->time_ago($informations->msg_time);
			        
			        if($user_status == 0){
			            $user_online_status = '<span class="offline-icon"></span>';
			        } else {
			            $user_online_status = '<span class="online-icon"></span>';
			        }
			
		        endforeach;   
		    }
		    
        }
    }
?>