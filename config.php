<?php

define('USE_DATABASE', true);
define('DS', DIRECTORY_SEPARATOR);
define('ABSPATH', dirname(__FILE__) . DS);
define( 'HOST', 'http://' . $_SERVER['HTTP_HOST'] . '/' );
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_CONNECT_STRING', 'mysql:host=localhost;dbname=Anki2');