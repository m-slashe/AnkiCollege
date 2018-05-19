<html>
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
        <style> <?php include_once 'app.css'; ?> </style>
    </head>
    <body>
        <div class="container-fluid" id="app-body">
            <div class="row">
                <?php

                if((isset ($_SESSION['login']) == false) and (isset ($_SESSION['senha']) == false))
                {
                    unset($_SESSION['login']);
                    unset($_SESSION['senha']);
                    include_once 'components/login/login.php';
                }else{
                    include_once 'components/menu/menu.php';
                    include_once 'components/content/content.php';
                }
                ?>
            </div>
        </div>
    </body>
</html>