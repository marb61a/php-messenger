<?php include "init.php"; ?>
<?php include "security.php"; ?>
<?php
    $obj = new base_class;
    
    if(isset($_POST['change_img'])){
        $img_name = $_FILES['change_img']['name'];
        $tmp_name = $_FILES['change_img']['tmp_name'];
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
                <?php include 'components/change_image_form.php'; ?>
            </section>
        </div>
        <?php include 'components/js.php'; ?>
    </body>
</html>