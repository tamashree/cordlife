<section class="blog_section padd">
    <div class="container">
        <div class="head_title">
            <h2 class="title">Latest News</h2>
            <?php
            $diagnosticsConnectPageId = '13';
            $diagnosticsConnectPageId = get_post($diagnosticsConnectPageId);
            $diagnosticsConnectPageContent = $diagnosticsConnectPageId->post_content;
            ?>
            <p><?php echo $diagnosticsConnectPageContent; ?></p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 aos-item"  data-aos="flip-left"  data-aos-duration="500">
                <a href="#" class="blog_box">
                    <div class="blog_img">
                        <img src="<?php bloginfo('template_directory'); ?>/images/vlog/vl1.jpg">
                        <small href="#" class="view_btn ion-ios-eye-outline"></small>
                    </div>
                    <h3>Hello Healthy - MyFitnessPal Blog</h3>
                    <span>20 May, 2019</span>
                    <p>About Blog Hello Healthy is the healthy-living blog
                        of MyFitnessPal. MyFitnessPal is a achieve...</p>
                </a>
            </div>
            <div  class="col-lg-4 col-md-4 col-sm-6 aos-item" data-aos="flip-left"  data-aos-duration="500">
                <a href="#" class="blog_box">
                    <div class="blog_img">
                        <img src="<?php bloginfo('template_directory'); ?>/images/vlog/vl2.jpg">
                        <small href="#" class="view_btn ion-ios-eye-outline"></small>
                    </div>
                    <h3>Hello Healthy - MyFitnessPal Blog</h3>
                    <span>20 May, 2019</span>
                    <p>About Blog Hello Healthy is the healthy-living blog
                        of MyFitnessPal. MyFitnessPal is a achieve...</p>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 aos-item" data-aos="flip-left"  data-aos-duration="500">
                <a href="#" class="blog_box">
                    <div class="blog_img">
                        <img src="<?php bloginfo('template_directory'); ?>/images/vlog/vl3.jpg">
                        <small href="#" class="view_btn ion-ios-eye-outline"></small>
                    </div>
                    <h3>Hello Healthy - MyFitnessPal Blog</h3>
                    <span>20 May, 2019</span>
                    <p>About Blog Hello Healthy is the healthy-living blog
                        of MyFitnessPal. MyFitnessPal is a achieve...</p>
                </a>
            </div>
        </div>
        <div class="view_all">
            <a href="#" class="default_btn">VIEW ALL <i class="ion-ios-arrow-thin-right"></i></a>
        </div>
    </div>
</section>