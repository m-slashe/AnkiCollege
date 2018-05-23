<?php
    include_once 'config.php';
?>
<head>
    <link rel="icon" type="image/png" href="<?php echo HOST?>src/assets/favicon.png">
    <script src="<?php echo HOST?>lib/jquery-3.3.1.js"></script>
    <script src="<?php echo HOST?>lib/bootstrap-4.1.0-dist/js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo HOST?>lib/bootstrap-4.1.0-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo HOST?>lib/fontawesome-free-5.0.10/web-fonts-with-css/css/fontawesome-all.css">
    <meta charset="UTF-8">
</head>

<?php
    session_start();
    include_once 'src/autoload.php';
	include_once 'src/app.php';
?>


