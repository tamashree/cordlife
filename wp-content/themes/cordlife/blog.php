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
        <?php if (have_posts()) : ?>
            <div class="row">
                <?php
                $args = array(
                    'showposts'   => 3,
                    'post_type'     => 'post',
                    'post_status'      => 'publish',
                    'order' => 'DESC');
                query_posts( $args );
                while (have_posts($args)) : the_post();
                    $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'full');
                    $imageId = get_post_thumbnail_id( $post->ID );
                    $imageAlt = get_post_meta($imageId, '_wp_attachment_image_alt', true); ?>
           



                    <div class="col-lg-4 col-md-4 col-sm-6 aos-item"  data-aos="flip-left"  data-aos-duration="500">
                        <a href="<?php the_permalink(); ?>" class="blog_box">
                            <div class="blog_img">
                                <img src="<?php echo $image[0]; ?>" alt="<?php echo $imageAlt; ?>">
                                <div class="blog_head_btm">
                                    <h3><?php the_title(); ?></h3>
                                </div>

                                <div class="blog_info_hover">
                                    <div class="blog_info_inner">
                                    <h3><?php the_title(); ?></h3>
                                    <?php $content = get_the_content();
                                    $content = strip_tags($content);?>
                                    <p><?php echo substr($content, 0, 96); ?>...</p>
                                    </div>
                                </div>

                            </div>
                            <div class="blog_btm_outer">
                                <span><i class="fa fa-calendar"></i><?php echo date("j F, Y") ?></span>
                                <span><i class="fa fa-user"></i>Author</span>
                            </div>
                        </a>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
        <div class="view_all">
            <a href="#" class="default_btn">VIEW ALL <i class="ion-ios-arrow-thin-right"></i></a>
        </div>
    </div>
</section>