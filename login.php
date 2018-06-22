<?php include "init.php"; ?>
<?php
    $obj = new base_class;
    if(isset($_POST['login'])){
        $email = $obj->security($_POST['email']);
        $password = $obj->security($_POST['password']);
        $email_status = $password_status = 1;
        
        // Email Validations
        if(empty($email)){
            $email_error = "Email is required";
            $email_status = "";
        }
        
        // Password Validations
        if(empty($password)){
            $password_error = "Password is Required";
            $password_status = "";
        } 
        
        if(!empty($email_status) && !empty($password_status)) {
            if($obj->Normal_Query("SELECT * FROM users WHERE email = ?", [$email])){
                if($obj->Count_Rows() == 0){
                    $email_error = "Please Enter Correct Email";
                } else {
                    $row = $obj->Single_Result();
                    $mail = $row->email;
                    $db_password = $row->password;
                    $user_id = $row->id;
                    $user_name = $row->name;
                    $user_image = $row->image;
                    $clean_status = $row->clean_status;
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, intial-scale=1, shrink-to-fit=no">
	    <title>Create A New Account</title>
	    <?php include 'components/css.php'; ?>
    </head>
    <body>
        <?php if(isset($_SESSION['security'])): ?>
            <div class="flash error-flash">
                <span class="remove">&times;</span>
                <div class="flash-heading">
                    <h3><span class="cross">&#x2715;</span>
                        Error: You Have An Error!
                    </h3>
                </div>
                <div class="flash-body">
                    <p><?php echo $_SESSION['security']; ?></p>
                </div>
            </div>
        <?php endif; ?>
        <?php unset($_SESSION['security']); ?>
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
                <?php include 'components/login_form.php'; ?>
            </div>
        </div><!-- close signup-container -->
        
        <?php include 'components/js.php'; ?>
    </body>
</html>