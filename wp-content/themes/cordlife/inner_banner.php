<!-- Banner Section -->
<section class="banner_section">
    <div class="banner inner_banner">
        <?php if (have_posts()) :
            while (have_posts($args)) : the_post();
                $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'full');
                $imageId = get_post_thumbnail_id( $post->ID );
                $imageAlt = get_post_meta($imageId, '_wp_attachment_image_alt', true); ?>
                <figure><img src="<?php echo $image[0]; ?>" alt="<?php echo $imageAlt; ?>"></figure>
                <div class="banner_info_section">
                    <div class="banner_box">
                        <div class="container">
                            <div class="banner_content">
                                <h2><span><?php the_title(); ?></span></h2>
                            </div>
                            <div class="breadcrumb_section">
                                <ul>
                                    <li><a href="<?php bloginfo('url'); ?>">Home</a></li>
                                    <li><?php the_title(); ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile;
        endif; ?>
    </div>
</section>