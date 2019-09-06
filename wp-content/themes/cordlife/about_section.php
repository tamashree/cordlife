<section class="about_box padd">
    <div class="container">
        <div class="row">
            <?php $whyChooseUsPageId = '89'; ?>
            <div class="col-lg-5 col-md-5 col-sm-5 about_border aos-item" data-aos="fade-left"  data-aos-duration="500" data-aos-easing="ease-in-out">
                <div class="about_info_img">
                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($whyChooseUsPageId),'full');
                    $imageId = get_post_thumbnail_id( $whyChooseUsPageId );
                    $imageAlt = get_post_meta($imageId, '_wp_attachment_image_alt', true);
                    ?>
                    <figure><img src="<?php echo $image[0]; ?>" alt="<?php echo $imageAlt; ?>"></figure>
                </div>
            </div>
            <div class="col-lg-7 col-sm-7 col-md-7 about_right_info aos-item" data-aos="fade-right"  data-aos-duration="500"  data-aos-easing="ease-in-out">
                <div class="about_rt_text">
                    <h2 class="why_choose_h2"><?php echo get_the_title( $whyChooseUsPageId ); ?></h2>
                    <h3><?php echo get_field( "custom_heading", $whyChooseUsPageId ); ?></h3>
                    <p><?php echo get_field( "short_description", $whyChooseUsPageId ); ?></p>
                    <a href="<?php echo get_the_permalink($whyChooseUsPageId); ?>" class="default_btn">Read More<i class="ion-ios-arrow-thin-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>