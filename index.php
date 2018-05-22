<?php
    define( 'DS', DIRECTORY_SEPARATOR);
    define( 'ABSPATH', dirname(__FILE__) . DS );
    define( 'HOST', 'http://' . $_SERVER['HTTP_HOST'] . '/' );
    session_start();
?>
<head>
    <link rel="icon" type="image/png" href="src/assets/favicon.png">
    <script src="<?php echo HOST?>lib/jquery-3.3.1.js"></script>
    <script src="<?php echo HOST?>lib/bootstrap-4.1.0-dist/js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo HOST?>lib/bootstrap-4.1.0-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo HOST?>lib/fontawesome-free-5.0.10/web-fonts-with-css/css/fontawesome-all.css">
    <meta charset="UTF-8">
</head>

<?php
    require_once 'autoload.php';
	include_once 'src/app.php';
?>


