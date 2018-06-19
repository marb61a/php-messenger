<div class="form-area">
    <form method="POST" action="" enctype="multipart/form-data">
        <div class="group">
            <h2 class="form-heading">
                Create New Account
            </h2>
        </div> <!-- group -->
        <div class="group">
            <input type="text" name="full_name" class="control" placeholder="Enter Full name..." 
                value="<?php if(isset($full_name)): echo $full_name; endif;?>">
            <div class="name-error error">
                <?php if(isset($name_error)): ?>
                    <?php echo $name_error; ?>
                <?php endif; ?>
            </div>
        </div> <!-- close group -->
        <div class="group">
            <input type="email" name="email" class="control" placeholder="Enter Email..."
                value=" <?php if(isset($email)): echo $email; endif;?> ">
            <div class="name-error error">
                <?php if(isset($email_error)): ?>
                     <?php echo $email_error; ?>
                <?php endif; ?>
            </div>
        </div> <!-- close group -->
        <div class="group">
            <input type="password" name="password" class="control" placeholder="Create Password..." 
                value="<?php if(isset($password)): echo $password; endif;?>">
           <div class="name-error error">
                <?php if(isset($password_error)): ?>
                    <?php echo $password_error; ?>
                <?php endif; ?>
            </div>
        </div> <!-- close group -->
        
    </form>
</div> <!-- close form-area -->