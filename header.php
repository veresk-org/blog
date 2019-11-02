<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css"
        href="<?php bloginfo('template_directory')?>/dist/css/styles.min.css?v=<?php echo time() ?>">
</head>

<body class="<?php if( get_locale() == 'fa_IR') echo 'persian' ?>">

    <div class="super_container">
        <header class="header p-2">
            <div class="container">
                <div class="row">
                    <div class="header_content d-flex flex-row align-items-center justify-content-between">
                        <div class="logo col-sm-3 p-0">
                            <a href="<?php echo get_home_url(); ?>">
                                <img src="<?php bloginfo('template_directory')?>/images/veresk-logo/veresk-logo3.png"
                                    alt="Logo">
                            </a>
                        </div>
                        <div class="col-sm-5">
                            <nav class="main_nav">
                                <ul class="d-flex justify-content-center">
                                    <li class="mx-3">
                                        <a href="https://veresk.org/<?php echo substr(get_locale(), 0, 2) ?>#services"
                                            target="_blank"><?php _e("Services", 'vereskBlog') ?>
                                        </a>
                                    </li>
                                    <li class="mx-3">
                                        <a href="https://veresk.org/<?php echo substr(get_locale(), 0, 2) ?>/about-us" target="_blank">
                                            <?php _e("About Us", 'vereskBlog') ?>
                                        </a>
                                    </li>
                                    <li class="mx-3">
                                        <a href="https://veresk.org/<?php echo substr(get_locale(), 0, 2) ?>/contact-us" target="_blank">
                                            <?php _e("Contact Us", 'vereskBlog') ?>
                                        </a>
                                    </li>
                                    <li class="mx-3">
                                        <a href="https://veresk.org/<?php echo substr(get_locale(), 0, 2) ?>" target="_blank">
                                            <?php _e("Home", 'vereskBlog') ?>
                                        </a>
                                    </li>

                                </ul>
                            </nav>
                        </div>

                        <div class="col-sm-4 p-0">
                            <nav class="main_nav d-lg-flex justify-content-end align-items-center">
                                <span class="mx-3">
                                    <a href="https://panel.veresk.org/static/register.html?lang=<?php echo substr(get_locale(), 0, 2) ?>"
                                        target="_blank"><?php _e("Sign Up", 'vereskBlog') ?>
                                    </a>
                                </span>
                                <span class="mx-3">
                                    <a class="login" href="https://panel.veresk.org/static/login.html?lang=<?php echo substr(get_locale(), 0, 2) ?>"
                                        target="_blank"><?php _e("Sign In", 'vereskBlog') ?>
                                    </a>
                                </span>
                                <span class="mx-3 polylang-select">
                                    <!-- <select class="lang-menu">
                                        <option style="color:black;" value="en">English</option>
                                        <option style="color:black;" value="fa" selected>فارسی</option>
                                        <option style="color:black;" value="ru">русский</option>
                                    </select> -->
                                    <?php dynamic_sidebar('langSwitcher') ?>
                                </span>
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
            <div class="logo menu_mm text-center mb-4">
                <a href="<?php echo get_home_url(); ?>">
                    <img src="<?php bloginfo('template_directory')?>/images/veresk-logo/veresk-logo.png" alt="Logo">
                </a>
            </div>
            <!-- <div class="search">
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
            </div> -->
            <nav class="menu_nav">
                <ul class="menu_mm">
                    <li class="active menu_mm"><a
                            href="<?php echo get_home_url(); ?>"><?php _e("Home", 'vereskBlog') ?></a></li>
                    <li class="menu_mm"><a
                            href="https://veresk.org/<?php echo substr(get_locale(), 0, 2) ?>#services"><?php _e("Services", 'vereskBlog') ?></a>
                    </li>
                    <li class="menu_mm"><a
                            href="https://veresk.org/<?php echo substr(get_locale(), 0, 2) ?>/about-us"><?php _e("About Us", 'vereskBlog') ?></a></li>
                    <li class="menu_mm"><a
                            href="https://veresk.org/<?php echo substr(get_locale(), 0, 2) ?>/contact-us"><?php _e("Contact Us", 'vereskBlog') ?></a></li>
                    <li class="menu_mm"><a href="https://veresk.org/<?php echo substr(get_locale(), 0, 2) ?>"><?php _e("Home", 'vereskBlog') ?></a></li>
                    <li class="menu_mm"><a class="register"
                            href="https://panel.veresk.org/static/register.html?lang=<?php echo substr(get_locale(), 0, 2) ?>"><?php _e("Sign Up", 'vereskBlog') ?></a>
                    </li>
                    <li class="menu_mm"><a class="login"
                            href="https://panel.veresk.org/static/login.html?lang=<?php echo substr(get_locale(), 0, 2) ?>"><?php _e("Sign In", 'vereskBlog') ?></a>
                    </li>
                    <li class="menu_mm">
                        <!-- <select class="form-control lang-menu">
                            <option style="color:black;" value="en">English</option>
                            <option style="color:black;" value="fa" selected>فارسی</option>
                            <option style="color:black;" value="ru">русский</option>
                        </select> -->
                        <?php dynamic_sidebar('myWidget') ?>
                    </li>
                </ul>
            </nav>
        </div>