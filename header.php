<!DOCTYPE html>
<html lang="en">

<head>
    <title>Veresk </title>
    <meta charset="utf-8">
    <meta name="description" content="veresk blog">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/styles/bootstrap/bootstrap.min.css">
    <link href="<?php bloginfo('template_directory') ?>/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet"
        type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/style.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/styles/responsive.css">
    <?php wp_head();?>
</head>

<body>

    <div class="super_container">
        <header class="header p-2">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="header_content d-flex flex-row align-items-center justify-content-between">
                            <div class="logo"><img src="<?php bloginfo('template_directory') ?>/images/veresk-logo/veresk-logo3.png" alt="Logo"></div>
                            <nav class="main_nav">
                                <ul>
                                    <li class="active"><a href="index.html">Home</a></li>
                                    <li><a href="https://panel.veresk.org">Panel</a></li>
                                    <li>
                                        <select class="form-control">
                                            <option value="en">English</option>
                                            <option value="fa">فارسی</option>
                                            <option value="ru">русский</option>
                                        </select>
                                    </li>
                                </ul>
                            </nav>

                            <div class="hamburger menu_mm">
                                <i class="fa fa-bars trans_200 menu_mm" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="menu d-flex flex-column justify-content-start text-right menu_mm trans_400">
            <div class="menu_close_container">
                <div class="menu_close">
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div class="logo menu_mm"><a href="#">veresk</a></div>
            <div class="search">
                <form>
                    <input type="search" class="header_search_input menu_mm" required="required" placeholder="Type to Search...">
                    <img class="header_search_icon menu_mm" src="images/search_2.png" alt="">
                </form>
            </div>
            <nav class="menu_nav">
                <ul class="menu_mm">
                    <li class="active menu_mm"><a href="index.html">Home</a></li>
                    <li class="menu_mm"><a href="https://panel.veresk.org">Panel</a></li>
                </ul>
            </nav>
        </div>