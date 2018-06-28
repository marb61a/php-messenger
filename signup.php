<?php
    include "init.php";
    $obj = new base_class;
    
    if(isset($_POST['signup'])){
        $full_name = $obj->security($_POST['full_name']);
        $email = $obj->security($_POST['email']);
        $password = $obj->security($_POST['password']);
        $img_name = $_FILES['img']['name'];
        $img_tmp = $_FILES['img']['tmp_name'];
        $img_path = "assets/img/";
        $extensions = ['jpg', 'jpeg', 'png'];
        $img_ext = explode(".", $img_name);
        $img_extension = end($img_ext);
        
        // Full Name validations
        if(empty($full_name)){
            $name_error = "Full Name Is Required";
            $name_status = "";
        }
        
        // Email Validations
        if(empty($email)){
            $email_error = "Email is required";
            $email_status = "";
        } else {
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $email_error = "Email Format is Invalid";
                $email_status = "";
            } else {
                if($obj->Normal_Query("SELECT email FROM users WHERE email = ?", array($email))){
                    if($obj->Count_Rows() == 0){
                        
                    } else {
                        $email_error = "Sorry, Email Already Exists";
                        $email_status = "";
                    }
                }
            }
        }
        
        // Password Validations
        if(empty($password)){
            $password_error = "Password is Required";
            $password_status = "";
        } else if(strlen($password) < 5) {
            $password_error = "Password is Too Short";
            $password_status = "";
        } else if(strlen($password) < 25) {
            $password_error = "Password is Too Long";
            $password_status = "";
        }
        
        // Image Validations
        if(empty($img_name)){
            $image_error = "Image is required";
            $photo_status = "";
        } else if(!in_array($img_extension, $extensions)){
            $image_error = "Image Extension is Invalid";
            $photo_status = "";
        }
        
        if(!empty($name_status) && !empty($email_status) && !empty($password_status) && !empty($photo_status)){
            move_uploaded_file($img_tmp, "$img_path/$img_name");
            $status = 0;
            $clean_status = 0;
            
        }        
        
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, intial-scale=1, shrink-to-fit=no">
	    <title>Create A New Account</title>
	    <?php include 'components/css.php'; ?>
    </head>
    <body>
        <div class="signup-container">
            <div class="account-left">
                <div class="account-text">
                    <h1>Let's Chat</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
   		                tempor incididunt ut labore mpor incididunt ut labore
   		            </p>
                </div>
            </div> <!-- close account-left-->
            <div class="account-right">
                <?php include 'components/signup_form.php'; ?>
            </div> <!-- close account-right -->
        </div> <!-- close signup-container -->
        
        <?php include 'components/js.php'; ?>
        <script type="text/javascript" src="assets/js/file_labeler.js"></script>
    </body>
</html>