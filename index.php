<?php
require_once(__DIR__ . "/backend/require.php");
require_once(__DIR__ . "/frontend/require.php");
?>


<html>
    <head>
        <title><?php echo ($config["web_title"]); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php
        require_once(__DIR__ . "/frontend/all.bootstrap.loader.php");
        ?>
    </head>



    <body>
        <?php
        $viewManager = new ViewManager();
        $viewManager->show($_GET['p']);
        ?>

    </body>
</html>