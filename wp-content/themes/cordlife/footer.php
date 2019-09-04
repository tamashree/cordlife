<!-- Footer Section -->
<?php wp_footer(); ?>
<footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div  class="row">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="footer_block">
                        <h2>Collaboration With</h2>
                        <a href="#" class="footer_logo"><img src="<?php echo of_get_option('collaborator_logo')?>" alt="Collaborator"></a>
                        <h2>Contact us</h2>
                        <ul class="footer_contact">
                            <li class="fa fa-phone"><a href="tel:<?php echo of_get_option('toll_free_no')?>"><?php echo of_get_option('toll_free_no')?> (Toll Free)</a></li>
                            <li class="fa fa-mobile"><a href="tel:<?php echo of_get_option('hot_line_no')?> "><?php echo of_get_option('hot_line_no')?> (Hotline)</a></li>
                            <li class="fa fa-envelope"><a href="mailto:<?php echo of_get_option('email_id')?>" target="_blank"><?php echo of_get_option('email_id')?></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="footer_block">
                        <h2>Departments</h2>
                        <ul>
                            <li><a href="#">Aneuploidies</a></li>
                            <li><a href="#"> Noninvasive Prenatal Testing</a></li>
                            <li><a href="#">Pre-eclampsia</a></li>
                            <li><a href="#">Newborn Screening</a></li>
                            <li><a href="#">Cytogenetics</a></li>
                            <li><a href="#">Proteomics Services</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="footer_block">
                        <h2>Quick Links </h2>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Resources</a></li>
                            <li><a href="#">Media Centre</a></li>
                            <li><a href="#">InfoGraphics</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="footer_block">
                        <h2>Subscribe for Newsletter</h2>
                        <div class="footer_news_let">

                            <input type="email" placeholder="Email Id">
                            <button><i class="fa fa-paper-plane"></i></button>
                        </div>
                        <div class="footer_social top_right top_menu">
                            <h2>Follow Us on</h2>
                            <ul>
                                <?php if (of_get_option('facebook')) { ?>
                                    <li><a href="<?php echo of_get_option('facebook')?>" target="_blank" class="ion-social-facebook"></a></li>
                                <?php } ?>
                                <?php if (of_get_option('gplus')) { ?>
                                    <li><a href="<?php echo of_get_option('gplus')?>" target="_blank" class="fa fa-google"></a></li>
                                <?php } ?>
                                <?php if (of_get_option('twitter')) { ?>
                                    <li><a href="<?php echo of_get_option('twitter')?>" target="_blank" class="fa fa-twitter"></a></li>
                                <?php } ?>
                                <?php if (of_get_option('youtube')) { ?>
                                    <li><a href="<?php echo of_get_option('youtube')?>" target="_blank" class="fa fa-youtube-play"></a></li>
                                <?php } ?>
                                <?php if (of_get_option('linkedin')) { ?>
                                    <li><a href="<?php echo of_get_option('linkedin')?>" target="_blank" class="fa fa-linkedin"></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="footer_bottom">
        <div class="container">
            <ul>
                <?php echo of_get_option('footer_copyright')?>
            </ul>
        </div>
    </div>
</footer>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/source/jquery.fancybox.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/aos.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/slick.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/custom.js"></script>
<!--<script src="--><?php //bloginfo('template_directory'); ?><!--/js/ionicons.js"></script>-->
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
<script>
    $(document).ready(function(){
        $('.toggle').click(function(){
            $('.menu').slideToggle();
        })
    });
    AOS.init({
        easing: 'ease-in-out-sine'
    });
    $(window).on('load', function() {
        AOS.refresh();
    });
</script>
</body>
</html>