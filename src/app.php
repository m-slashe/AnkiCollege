<html>
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
        <style> <?php include_once 'app.css'; ?> </style>
    </head>
    <body>
        <div id="app-nav">
            <?php include_once 'components/nav/nav.php'; ?>
        </div>
        <div class="container-fluid" id="app-body">
            <div class="row">
                <div class="col-md-2" id="app-menu">
                    <?php include_once 'components/menu/menu.php'; ?>
                </div>
                <div class="col-md-10 scrollbar" id="app-content">
                    <?php include_once 'components/content/content.php'; ?>
                </div>
            </div>
        </div>
    </body>
</html>