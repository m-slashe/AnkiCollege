<html>
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
        <style> <?php include 'app.css'; ?> </style>
    </head>
    <body >
        <div id="app-nav"><?php include 'components/nav/nav.php'; ?></div>
        <div style="overflow: hidden" class="container-fluid">
            <div class="row">
                <div class="col-sm-2" id="app-menu"><?php include 'components/menu/menu.php'; ?></div>
                <div class="col-sm-10 scrollbar" id="app-content"><?php include 'components/content/content.php'; ?></div>
            </div>
        </div>
    </body>
</html>