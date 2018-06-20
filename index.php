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
        
    </body>
</html>