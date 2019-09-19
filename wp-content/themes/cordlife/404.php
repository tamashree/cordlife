<?php //get_header(); ?>
<!--    <section class="about_box press_sec padd">-->
<!--        <div class="head_title">-->
<!--            <h2 class="title">--><?php //the_title(); ?><!--</h2>-->
<!--        </div> -->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-lg-12 col-md-12 col-sm-12 press_info">-->
<!--                    <img src="--><?php //bloginfo('template_directory'); ?><!--/images/404/404.png">-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<?php //get_footer(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/icon_bzc_icon.ico" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php bloginfo('name'); ?><?php if ( is_single() ) { ?> | Product >><?php } ?><?php wp_title(); ?></title>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,700" rel="stylesheet">
    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/404.css" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
<div id="notfound">
    <div class="notfound">
<!--        <div class="notfound-404">-->
<!--            <h1>4<span></span>4</h1>-->
<!--        </div>-->
<!--        <h2>Oops! This Page Could Not Be Found</h2>-->
<!--        <p>Sorry but the page you are looking for does not exist, have been removed. name changed or is temporarily unavailable</p>-->
        <p><img src="<?php bloginfo('template_directory'); ?>/images/404/404.png"></p>
        <a href="<?php bloginfo('url'); ?>">Back to homepage</a>
    </div>
</div>
</body>
</html>

