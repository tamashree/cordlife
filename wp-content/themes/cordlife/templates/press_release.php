<?php /* Template Name: Press Release */
get_header(); ?>
<?php include(TEMPLATEPATH.'/inner_banner.php'); ?>
<section class="about_box press_sec padd">
    <div class="head_title">
        <?php if (have_posts()) :
            while (have_posts($args)) : the_post(); ?>
                <h2 class="title"><?php the_title(); ?></h2>
                <p class="subpara"><?php the_content(); ?></p>
            <?php endwhile;
        endif; ?>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 press_info">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-5 about_border">
                        <div class="about_info_img">
                            <figure><img src="<?php bloginfo('template_directory'); ?>/images/vl1.jpg" alt=""></figure>
                        </div>
                    </div>
                    <div class="col-lg-7 col-sm-7 col-md-7 about_right_info"  >
                        <div class="about_rt_text">
                            <h2>CHOOSE US</h2>
                            <span><i class="fa fa-calendar"></i> 04-05-2019 </span>
                            <p>It is a long established fact that a reader will be distracted by the
                                readable content of a page when looking at its layout.
                            </p>
                            <a href="#" class="default_btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 press_info">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-5 about_border">
                        <div class="about_info_img">
                            <figure><img src="<?php bloginfo('template_directory'); ?>/images/vl2.jpg" alt=""></figure>
                        </div>
                    </div>
                    <div class="col-lg-7 col-sm-7 col-md-7 about_right_info"  >
                        <div class="about_rt_text">
                            <h2>CHOOSE US</h2>
                            <span><i class="fa fa-calendar"></i> 04-05-2019 </span>

                            <p>It is a long established fact that a reader will be distracted by the
                                readable content of a page when looking at its layout.
                            </p>
                            <a href="#" class="default_btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 press_info">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-5 about_border">
                        <div class="about_info_img">
                            <figure><img src="<?php bloginfo('template_directory'); ?>/images/vl3.jpg" alt=""></figure>
                        </div>
                    </div>
                    <div class="col-lg-7 col-sm-7 col-md-7 about_right_info"  >

                        <div class="about_rt_text">
                            <h2>CHOOSE US</h2>
                            <span><i class="fa fa-calendar"></i> 04-05-2019 </span>

                            <p>It is a long established fact that a reader will be distracted by the
                                readable content of a page when looking at its layout.
                            </p>
                            <a href="#" class="default_btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-lg-6 col-md-6 col-sm-6 press_info">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-5 about_border">
                        <div class="about_info_img">
                            <figure><img src="<?php bloginfo('template_directory'); ?>/images/vl1.jpg" alt=""></figure>
                        </div>
                    </div>
                    <div class="col-lg-7 col-sm-7 col-md-7 about_right_info"  >

                        <div class="about_rt_text">
                            <h2>CHOOSE US</h2>
                            <span><i class="fa fa-calendar"></i> 04-05-2019 </span>

                            <p>It is a long established fact that a reader will be distracted by the
                                readable content of a page when looking at its layout.
                            </p>
                            <a href="#" class="default_btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 press_info">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-5 about_border">
                        <div class="about_info_img">
                            <figure><img src="<?php bloginfo('template_directory'); ?>/images/vl2.jpg" alt=""></figure>
                        </div>
                    </div>
                    <div class="col-lg-7 col-sm-7 col-md-7 about_right_info"  >

                        <div class="about_rt_text">
                            <h2>CHOOSE US</h2>
                            <span><i class="fa fa-calendar"></i> 04-05-2019 </span>

                            <p>It is a long established fact that a reader will be distracted by the
                                readable content of a page when looking at its layout.
                            </p>
                            <a href="#" class="default_btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-6 col-md-6 col-sm-6 press_info">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-5 about_border">
                        <div class="about_info_img">
                            <figure><img src="<?php bloginfo('template_directory'); ?>/images/vl3.jpg" alt=""></figure>
                        </div>
                    </div>
                    <div class="col-lg-7 col-sm-7 col-md-7 about_right_info"  >

                        <div class="about_rt_text">
                            <h2>CHOOSE US</h2>
                            <span><i class="fa fa-calendar"></i> 04-05-2019 </span>

                            <p>It is a long established fact that a reader will be distracted by the
                                readable content of a page when looking at its layout.
                            </p>
                            <a href="#" class="default_btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include(TEMPLATEPATH.'/newsletter.php'); ?>
<?php get_footer(); ?>