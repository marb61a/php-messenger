<?php
    include "init.php";
    $obj = new base_class;
    
    if(isset($_POST['signup'])){
        
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, intial-scale=1, shrink-to-fit=no">
	    <title>Create A New Account</title>
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
    </body>
</html>