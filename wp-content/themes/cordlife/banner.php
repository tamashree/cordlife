<!-- Banner Section -->
<section class="banner_section">
    <ul class="banner_slider">
        <?php $noOfBanner = of_get_option('lycust_no');
        for ($i=1;$i<=$noOfBanner;$i++) { ?>
            <li>
                <div class="banner">
                    <figure><img src="<?php echo of_get_option('lylogoimg_'.$i); ?>" alt="Cordlife"></figure>
                    <div class="banner_info_section">
                        <div class="banner_box">
                            <div class="container">
                                <div class="banner_content">
                                    <?php echo of_get_option('lytitle_'.$i); ?>
                                    <p><?php echo of_get_option('lydesc_'.$i); ?></p>
                                    <a href="<?php echo of_get_option('lybuttonlink_'.$i); ?>" class="btn_box"><?php echo of_get_option('lybuttontext_'.$i); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        <?php } ?>
    </ul>
</section>
<!-- Banner Section -->