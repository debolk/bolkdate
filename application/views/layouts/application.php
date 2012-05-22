<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>BolkDate</title>

        <link rel="stylesheet" href="/stylesheets/reset.css" type="text/css"/>
        <link rel="stylesheet" href="/stylesheets/application.css" type="text/css"/>

        <script type="text/javascript" src="/javascripts/jquery.js"></script>
        <script type="text/javascript" src="/javascripts/countdown.js"></script>
        <script type="text/javascript" src="/javascripts/application.js"></script>

        <base href="<?php echo URL::base(true,true); ?>" />
    </head>
    <body class="<?php echo Request::$current->controller(); ?> <?php echo Request::$current->action(); ?>">
        <div id="header" class="clearfix">
            <h1>
                <img src="/images/logo-klein.png" width="64" height="64" alt="" />
                BolkDate
            </h1>
        </div>
        <div id="content" class="clearfix">
            <?php echo $content; ?>
        </div>
        <div id="footer" class="clearfix">
            <span id="count_singles">0</span> vrijgezellen beschikbaar
            &mdash;
            <span id="count_dates">0</span> speeddates gehouden
        </div>
    </body>
</html>
