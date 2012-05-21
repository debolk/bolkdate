<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>BolkDate</title>

        <link rel="stylesheet" href="/stylesheets/reset.css" type="text/css"/>
        <link rel="stylesheet" href="/stylesheets/application.css" type="text/css"/>

        <script type="text/javascript" src="/javascripts/jquery.js"></script>
        <script type="text/javascript" src="/javascripts/application.js"></script>

        <base href="<?php echo URL::base(true,true); ?>" />
    </head>
    <body class="<?php echo Request::$current->controller(); ?> <?php echo Request::$current->action(); ?>">
        <div id="header">
            <img src="/images/logo-klein.png" width="128" height="128" alt="" />
            <h1>BolkDate</h1>
        </div>
        <?php echo $content; ?>
    </body>
</html>
