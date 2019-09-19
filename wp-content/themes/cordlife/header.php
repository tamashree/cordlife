<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php bloginfo('name'); ?><?php if ( is_single() ) { ?> | Product >><?php } ?><?php wp_title(); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=1">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/icon_bzc_icon.ico" />
    <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
<!--    <link href="--><?php //bloginfo('template_directory'); ?><!--/css/ionicons.min.css" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900|Roboto:100,300,400,400i,500,700,900&display=swap" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/font-awesome.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/slick.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/source/jquery.fancybox.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/aos.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/masonry-docs.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap-grid.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/style.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/responsive.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5d7630bceb1a6b0be60bb326/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->
<body>
<!-- Header Section -->
<header>
    <div class="header_top">
        <div class="container clears">
            <div class="top_left top_menu">
                <ul>
                    <li><i><img src="<?php bloginfo('template_directory'); ?>/images/preheader_icons/headphone.png"></i><a href="tel:<?php echo of_get_option('toll_free_no'); ?>" class=" "><?php echo of_get_option('toll_free_no'); ?> (Toll Free)</a></li>
                    <li><i><img src="<?php bloginfo('template_directory'); ?>/images/preheader_icons/calling.png"></i><a href="tel:<?php echo of_get_option('hot_line_no'); ?>"><?php echo of_get_option('hot_line_no'); ?> (Hot Line)</a></li>
                    <li><i><img src="<?php bloginfo('template_directory'); ?>/images/preheader_icons/mailus.png"></i><a href="mailto:<?php echo of_get_option('email_id'); ?>"><?php echo of_get_option('email_id'); ?></a></li>
                </ul>
            </div>
            <div class="top_right top_menu">
                <ul>
                    <li><a href="#" class="ion-social-facebook"></a></li>
                    <li><a href="#" class="fa fa-google"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-youtube-play"></a></li>
                    <li><a href="#" class="fa fa-linkedin"></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="header_section">
        <div class="container clears">
            <a href="<?php bloginfo('url'); ?>" class="logo"><img src="<?php echo of_get_option('logo'); ?>" alt="Cordlife"></a>
            <div class="menu_section">
                <span class="toggle ion-drag"></span>
<!--                <ul class="menu">-->
<!--                    <li class="active"><a href="#">Home</a></li>-->
<!--                    <li><a href="#">About Us</a></li>-->
<!--                    <li><a href="#">Services <i class="fa fa-angle-down"></i></a></li>-->
<!--                    <li><a href="#">Resources <i class="fa fa-angle-down"></i></a></li>-->
<!--                    <li><a href="#">Media Centre <i class="fa fa-angle-down"></i></a></li>-->
<!--                    <li><a href="#">InfoGraphics</a></li>-->
<!--                    <li><a href="#">Contact Us</a></li>-->
<!--                </ul>-->
                <?php wp_nav_menu( array( 'container' => '', 'theme_location' => 'inner_top', 'menu_class' => 'menu') ); ?>
            </div>
        </div>
    </div>
</header>
<!-- Header Section -->