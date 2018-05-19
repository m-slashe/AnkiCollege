<?php
    define( 'DS', DIRECTORY_SEPARATOR);
    define( 'ABSPATH', dirname(__FILE__) . DS );
    session_start()
?>
<head>
    <link rel="icon" type="image/png" href="src/assets/favicon.png">
    <script>
        <?php include_once ABSPATH.'lib/jquery-3.3.1.js' ?>
    </script>
    <script>
        <?php include_once ABSPATH.'lib/bootstrap-4.1.0-dist/js/bootstrap.js' ?>
    </script>
        <style>
        <?php include_once ABSPATH.'lib/bootstrap-4.1.0-dist/css/bootstrap.css' ?>
    </style>
    <style>
        <?php include_once ABSPATH.'lib/fontawesome-free-5.0.10/web-fonts-with-css/css/fontawesome-all.css' ?>
    </style>
    <meta charset="UTF-8">
</head>

<?php
    require_once 'autoload.php';
	include_once 'src/app.php';
?>

    