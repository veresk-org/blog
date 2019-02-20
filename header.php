<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <title>
        <?php bloginfo('title')?>
    </title>
    <meta charset="utf-8">
    <meta name="description" content="veresk blog">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory')?>/styles/bootstrap/bootstrap.min.css">
    <link href="<?php bloginfo('template_directory')?>/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet"
        type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory')?>/style.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory')?>/styles/responsive.css">
    <?php wp_head();?>
</head>

<body class="persian">

    <div class="super_container">
        <header class="header p-2">
            <div class="container">
                <div class="row">
                    <div class="header_content d-flex flex-row align-items-center justify-content-between">
                        <div class="logo col-sm-3"><img src="<?php bloginfo('template_directory')?>/images/veresk-logo/veresk-logo3.png"
                                alt="Logo">
                        </div>
                        <div class="col-sm-5">
                            <nav class="main_nav">
                                <ul class="d-flex justify-content-center">
                                    <li class="mx-3"><a href="">خدمات</a></li>
                                    <li class="mx-3"><a href="#">درباره ما</a></li>
                                    <li class="mx-3"><a href="#">ارتباط با ما</a></li>
                                    <li class="mx-3"><a href="https://panel.veresk.org">پنل</a></li>

                                </ul>
                            </nav>
                        </div>

                        <div class="col-sm-3">
                            <nav class="main_nav">
                                <!-- <ul class="d-flex"> -->
                                <span class="mx-3"><a href="#">ثبت نام</a></span>
                                <span class="mx-3"><a class="login" href="#">ورود</a></span>
                                <span class="mx-3"><a href="#">ارتباط با ما</a></span>

                                <!-- </ul> -->
                            </nav>
                        </div>

                        <div class="hamburger menu_mm">
                            <i class="fa fa-bars trans_200 menu_mm" aria-hidden="true"></i>
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
            <div class="logo menu_mm text-center">
                <img src="<?php bloginfo('template_directory')?>/images/veresk-logo/veresk-logo.png" alt="Logo">
            </div>
            <div class="search">
                <form>
                    <div class="inner-form">
                        <div class="input-wrap px-2">
                            <div class="input-field">
                                <input class="px-1" type="text" placeholder="جستجو">
                            </div>
                        </div>
                        <button class="btn-search" type="button">جستجو</button>
                    </div>
                </form>
            </div>
            <nav class="menu_nav">
                <ul class="menu_mm">
                    <li class="active menu_mm"><a href="index.html">خانه</a></li>
                    <li class="menu_mm"><a href="https://panel.veresk.org">پنل</a></li>
                </ul>
            </nav>
        </div>