<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patat</title>
    <?php wp_head(); ?>


</head>

<body>
    <header class="container">
        <div class="navbar" id="navbar">
            <nav class="container flex">
                <div id="logo-img">
                    <a href="<?php echo site_url('/'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Patat logo">
                    </a>
                </div>

                <div id="menu-icon" class="menu-icon">
                    <i class="fa fa-bars"></i>
                </div>

                <ul class="navigation" id="navigation">
                    <li>
                        <a href="<?php echo site_url('/'); ?>" <?php if (is_front_page()) echo 'class="active"' ?>>HOME</a>

                    </li>
                    <li>
                        <a href="<?php echo site_url('/about'); ?>" <? if (is_page('about')) echo 'class="active"' ?>>ABOUT US</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('/flavours'); ?>" <? if (is_page('flavours')) echo 'class="active"' ?>>FLAVOURS</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('/gallery'); ?>" <? if (is_page('gallery')) echo 'class="active"' ?>>GALLERY</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('/contact-us'); ?>" <? if (is_page('contact-us')) echo 'class="active"' ?>>CONTACT US</a>
                    </li>

                </ul>
            </nav>

        </div>
        </div>