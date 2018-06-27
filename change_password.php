<?php include "init.php"; ?>
<?php include "security.php"; ?>
<?php
    $obj = new base_class;
    
    if(isset($_POST['change_password'])){
        $current_password = $obj->security($_POST['current_password']);
        $new_password = $obj->security($_POST['new_password']);
        $retype_password = $obj->security($_POST['retype_password']);
        
        $current_status = $new_status = $retype_status = 1;
        
    }
?>