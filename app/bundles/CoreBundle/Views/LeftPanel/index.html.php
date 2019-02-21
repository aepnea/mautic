<?php

/*
 * @copyright   2014 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
$extraMenu = $view['menu']->render('extra');
?>
<!-- start: sidebar-header -->
<div class="sidebar-header">
    <!-- brand -->
    <a class="mautic-brand<?php echo (!empty($extraMenu)) ? ' pull-left pl-0 pr-0' : ''; ?>" href="#">
        <!-- logo figure -->
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 500.39 86.18">
            <defs>
                <style>
                .cls-1{fill:#2c2c2c;}
                .cls-2{fill:url(#Degradado_sin_nombre_4);}
                .cls-3{fill:url(#Degradado_sin_nombre_4-2);}
                .cls-4{fill:url(#Degradado_sin_nombre_4-3);}
                .cls-5{fill:url(#Degradado_sin_nombre_4-4);}
                .cls-6{fill:#f7931e;}
                .cls-7{fill:url(#Degradado_sin_nombre_3);}
                </style>
                <linearGradient id="Degradado_sin_nombre_4" x1="336.38" y1="64.6" x2="499.85" y2="67.24" gradientUnits="userSpaceOnUse">
                <stop offset="0" stop-color="#f15a24"/>
                <stop offset="1" stop-color="#f7931e"/>
                </linearGradient>
                <linearGradient id="Degradado_sin_nombre_4-2" x1="336.39" y1="63.69" x2="499.86" y2="66.33" xlink:href="#Degradado_sin_nombre_4"/>
                <linearGradient id="Degradado_sin_nombre_4-3" x1="336.4" y1="63.16" x2="499.87" y2="65.79" xlink:href="#Degradado_sin_nombre_4"/>
                <linearGradient id="Degradado_sin_nombre_4-4" x1="336.42" y1="62.34" x2="499.88" y2="64.98" xlink:href="#Degradado_sin_nombre_4"/>
                <linearGradient id="Degradado_sin_nombre_3" x1="0" y1="31.15" x2="29.92" y2="31.15" xlink:href="#Degradado_sin_nombre_4"/>
            </defs>
            <title>thunder-logo</title>
            <g id="Capa_2" data-name="Capa 2">
                <g id="Layer_1" data-name="Layer 1">
                <path class="cls-1" d="M63.34,85.39V57.07H54.57V44.18H88.18V57.07H79.41V85.39Z" transform="translate(-0.25 -0.25)"/>
                <path class="cls-1" d="M106.55,44.18V58h7.35V44.18h16V85.39h-16V71h-7.35V85.39H90.48V44.18Z" transform="translate(-0.25 -0.25)"/>
                <path class="cls-1" d="M152.16,73.08a2.66,2.66,0,0,0,2.94-2.59V44.18h16.07V70.55c-.06,10.72-9.36,15.66-18.95,15.66s-19-4.94-19-15.66V44.18h16.12V70.49A2.67,2.67,0,0,0,152.16,73.08Z" transform="translate(-0.25 -0.25)"/>
                <path class="cls-1" d="M190,70.9V85.39H173.93V44.18h13.42l10.31,14.76V44.18h16V85.39H200.19Z" transform="translate(-0.25 -0.25)"/>
                <path class="cls-1" d="M235.21,44.18c12.06,0,23.19,5,23.19,20.66s-11.19,20.55-23.19,20.55H216V44.18Zm0,28.61c4.7,0,7.12-3.94,7.12-7.89s-2.36-8.12-7.12-8.12H232v16Z" transform="translate(-0.25 -0.25)"/>
                <path class="cls-1" d="M260.22,44.18h33V56.31h-17v2.77h16.36V70.55H276.23v2.71h17V85.39h-33Z" transform="translate(-0.25 -0.25)"/>
                <path class="cls-1" d="M311.9,74.44v11H295.83V44.18H313.6c10.24.06,20.19,2.89,20.19,15.19,0,6-2.41,9.77-6.06,12l6.71,12.71v1.3H318.25l-5.24-11ZM314,62.08c2.64-.06,3.88-.71,3.88-2.71s-1.24-2.83-3.88-2.83h-2.24v5.54Z" transform="translate(-0.25 -0.25)"/>
                <path class="cls-2" d="M352.3,44.14v28h14.94V85.32h-31V44.14Z" transform="translate(-0.25 -0.25)"/>
                <path class="cls-3" d="M400.47,80.55H387.41l-1.76,4.77H369V83.73l15.88-40.06h18.18l15.88,40.06v1.59H402.29Zm-8.94-10.64h4.88l-2.47-10.36Z" transform="translate(-0.25 -0.25)"/>
                <path class="cls-4" d="M446.82,44.14a10.94,10.94,0,0,1,10.82,11.3,7.77,7.77,0,0,1-5.06,7.47c4.88,1.88,7.47,5.06,7.18,10.47-.3,7.06-5.83,11.94-13.06,11.94H420.82V44.14Zm-9.94,15.3h3c2.76,0,2.94-4.3,0-4.3h-3Zm0,14.58h4c2.06,0,2.94-1.29,2.94-2.58s-.83-2.59-2.94-2.59h-4Z" transform="translate(-0.25 -0.25)"/>
                <path class="cls-5" d="M484.4,56.91c-.06-1.3-1.64-1.94-3.23-1.94-1.41,0-3.24.58-3.24,2.29,0,1.41,1.12,2.06,2.53,2.18,8.65.7,20.18,1.7,20.18,12.88,0,10.88-10.53,14.11-19.77,14.11-10.29,0-19.35-4.76-19.41-15.17h16c0,2,1.82,2.53,3.65,2.53s3.29-.47,3.29-2c0-1.35-1-2-3.94-2.3-9-.76-18.76-2.29-18.76-13.23,0-8.41,9-13.35,19.17-13.35,10.65,0,18.88,4.53,19.12,14Z" transform="translate(-0.25 -0.25)"/>
                <polygon class="cls-6" points="14.93 0 29.92 35.22 0 62.3 14.93 0"/>
                <polygon class="cls-1" points="54.36 13.09 37.22 84.9 26.93 60.81 0.03 62.28 54.36 13.09"/>
                <polygon class="cls-7" points="14.93 0 29.92 35.22 0 62.3 14.93 0"/>
                </g>
            </g>
            </svg>
        <!--/ logo figure -->
    </a>
    <?php if (!empty($extraMenu)): ?>
        <div class="dropdown extra-menu">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                <i class="fa fa-chevron-down fa-lg"></i>
            </a>
            <?php echo $extraMenu; ?>
        </div>
    <?php endif; ?>
    <!--/ brand -->
</div>
<!--/ end: sidebar-header -->

<!-- start: sidebar-content -->
<div class="sidebar-content">
    <!-- scroll-content -->
    <div class="scroll-content slimscroll">
        <!-- start: navigation -->
        <nav class="nav-sidebar">
            <?php echo $view['content']->getCustomContent('menu.above', $mauticTemplateVars); ?>
            <?php echo $view['menu']->render('main'); ?>

            <!-- start: left nav -->
            <ul class="nav sidebar-left-dark">
                <li class="hidden-xs">
                    <a href="javascript:void(0)" data-toggle="minimize" class="sidebar-minimizer"><span class="direction icon pull-left fa"></span><span class="nav-item-name pull-left text"><?php echo $view['translator']->trans('mautic.core.menu.left.collapse'); ?></span></a>
                </li>
            </ul>
            <!--/ end: left nav -->

        </nav>
        <!--/ end: navigation -->
    </div>
    <!--/ scroll-content -->
</div>
<!--/ end: sidebar-content -->