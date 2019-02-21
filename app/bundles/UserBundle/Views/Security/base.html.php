<?php

/*
 * @copyright   2014 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title><?php echo $view['slots']->get('pageTitle', 'Mautic'); ?></title>
    <meta name="robots" content="noindex, nofollow" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" type="image/x-icon" href="<?php echo $view['assets']->getUrl('media/images/favicon.ico') ?>" />
    <link rel="apple-touch-icon" href="<?php echo $view['assets']->getUrl('media/images/apple-touch-icon.png') ?>" />
    <?php $view['assets']->outputSystemStylesheets(); ?>
    <?php echo $view->render('MauticCoreBundle:Default:script.html.php'); ?>
    <?php $view['assets']->outputHeadDeclarations(); ?>
</head>
<body>
<section id="main" role="main">
    <div class="container" style="margin-top:100px;">
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4">
                <div class="panel" name="form-login">
                    <div class="panel-body">
                        <div class="mautic-logo img-circle mb-md text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 52.19 81.5">
                            <defs>
                                <style>.thunder-1{fill:#f7931e;}.thunder-2{fill:#2c2c2c;}.thunder-3{fill:url(#Degradado_sin_nombre_3);}</style>
                                <linearGradient id="Degradado_sin_nombre_3" y1="29.9" x2="28.72" y2="29.9" gradientUnits="userSpaceOnUse">
                                <stop offset="0" stop-color="#f15a24"/>
                                <stop offset="1" stop-color="#f7931e"/>
                                </linearGradient>
                            </defs>
                            <title>Thunder mail</title>
                            <g id="Capa_2" data-name="Capa 2">
                                <g id="Layer_1" data-name="Layer 1">
                                <polygon class="thunder-1" points="14.33 0 28.72 33.81 0 59.8 14.33 0"/>
                                <polygon class="thunder-2" points="52.19 12.56 35.73 81.5 25.86 58.38 0.03 59.79 52.19 12.56"/>
                                <polygon class="thunder-3" points="14.33 0 28.72 33.81 0 59.8 14.33 0"/>
                                </g>
                            </g>
                            </svg>
                        </div>
                        <div id="main-panel-flash-msgs">
                            <?php echo $view->render('MauticCoreBundle:Notification:flashes.html.php'); ?>
                        </div>
                        <?php $view['slots']->output('_content'); ?>
                    </div>
                </div>
            </div>
        </div>
         <div class="row">
            <div class="col-lg-4 col-lg-offset-4 text-center text-muted">
                <?php echo $view['translator']->trans('mautic.core.copyright', ['%date%' => date('Y')]); ?>
            </div>
        </div>
    </div>
</section>
<?php echo $view['security']->getAuthenticationContent(); ?>
</body>
</html>
