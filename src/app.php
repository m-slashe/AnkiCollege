<html>
    <head>
        <style> <?php include 'app.css'; ?> </style>
    </head>
    <body>
        <div id="app-nav"><?php include 'components/nav/nav.php'; ?></div>
        <div style="overflow: hidden" class="container-fluid">
            <div class="row">
                <div class="col-xl-2" id="app-menu"><?php include 'components/menu/menu.php'; ?></div>
                <div style="overflow-y: auto;overflow-x: hidden;" class="col-xl-10" id="app-content"><?php include 'components/content/content.php'; ?></div>
            </div>
        </div>
    </body>
</html>