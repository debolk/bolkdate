<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"> 

        <title>BolkDate</title>
        <link rel="stylesheet" type="text/css" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile.structure-1.1.0.css" />
        <link rel="stylesheet" type="text/css" href="/stylesheets/<?php echo $mobile_theme; ?>.mobile.css" />

        <script type="text/javascript" src="/javascripts/jquery.js"></script>
        <script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>
        <script type="text/javascript" src="/javascripts/mobile.js"></script>

        <base href="<?php echo URL::base(true,true); ?>" />
    </head>
    <body class="<?php echo Request::$current->controller(); ?> <?php echo Request::$current->action(); ?>">
       <div data-role="page">
            <div data-role="header" data-theme="a">
                <h1>BolkDate</h1>
            </div>
            <div data-role="content" data-theme="a">
                <?php echo $content; ?>     
            </div>
            <div data-role="footer"> 
                <h4>BolkDate is bedacht en ontwikkeld door 
                <a href="https://www.facebook.com/jakobbuis" style="color: white;">Jakob</a>,
                ge&iuml;nspireerd door
                <a href="http://xrv.nl/" style="color: white;">Xander</a>.
                </h4>
            </div>
        </div>
    </body>
</html>




