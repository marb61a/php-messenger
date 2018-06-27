<?php include "init.php"; ?>
<?php include "security.php"; ?>
<?php
    $obj = new base_class;
    
    if(isset($_POST['change_password'])){
        $current_password = $obj->security($_POST['current_password']);
        $new_password = $obj->security($_POST['new_password']);
        $retype_password = $obj->security($_POST['retype_password']);
        
        $current_status = $new_status = $retype_status = 1;
        
        if(empty($current_password)){
            $current_password_error = "Current Password is required";
            $current_status = "";
        }
        
        if(empty($new_password)){
            $new_password_error = "New Password is required";
            $new_status = "";
        } else if(strlen($new_password) < 5){
            $new_password_error = "New Password is too short";
            $new_status = "";
        }
        
        if(empty($retype_password)){
            $retype_password_error = "Retype password is required";
		    $retype_status = "";
        }
        
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, intial-scale=1, shrink-to-fit=no">
    	<title>Home</title>
    	<?php include 'components/css.php'; ?>
    </head>
    <body>
        <?php include 'components/nav.php'; ?>
            <div class="chat-container">
                <?php include 'components/sidebar.php'; ?>
                <section id="right-area">
		            <?php include 'components/change_password_form.php'; ?>
	            </section
            </div>
        <?php include 'components/js.php'; ?>
    </body>
</html>
