<?php
    include "init.php";
?>

<?php if(!isset($_SESSION['user_id'])): ?>
    <?php header("location:login.php"); ?>
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, intial-scale=1, shrink-to-fit=no">
	    <title>Home</title>
	    <?php include "components/css.php"?>
    </head>
    <body>
        <?php if (isset($_SESSION['loader'])): ?>
            <div class="loader-area">
                <div class="loader-item">
                    <div class="loader"></div>
                </div>
            </div>
        <?php endif ?>
	    <?php unset($_SESSION['loader']); ?>
	    
	    <!-- Flash Message for updating name -->
	    <?php if(isset($_SESSION['name_updated'])):?>
	        <div class="flash success-flash">
	            <span class="remove">&times;</span>
	            <div class="flash-heading">
	                <h3>
	                    <span class="checked">&#10004;</span>
	                    Success!! You have updated successfully
	                </h3>
	            </div>
	            <div class="flash-body">
	                <p>
	                    <?php echo $_SESSION['name_updated']; ?>
	                </p>
	            </div>
	        </div>
	    <?php endif ?>
	    <?php unset($_SESSION['name_updated']); ?>
        
        <?php include 'components/nav.php'; ?>
            <div class="chat-container">
                <?php include 'components/sidebar.php'; ?>
                <section id="right-area">
                    <?php include 'components/messages.php'; ?>
                    <?php include 'components/chat_form.php'; ?>
                    <?php include 'components/emoji.php'; ?>
                </section>
            </div>
        <?php include 'components/js.php'; ?>
        
        <script type="text/javascript">
            $(document).ready(function(){
                $(".loader-area").show();
                setTimeout(function(){
                    $(".loader-area").hide();
                }, 3000);
            });
        </script>
    </body>
</html>