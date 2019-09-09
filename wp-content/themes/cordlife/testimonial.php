<section class="testimonial padd">
    <div class="container">
        <ul class="testimonial_slider">
            <?php
            $args = array(
                'showposts'   => -1,
                'post_type'     => 'testimonials',
                'post_status'      => 'publish');
            query_posts( $args );
            while (have_posts($args)) : the_post();
                $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'full');
                $imageId = get_post_thumbnail_id( $post->ID );
                $imageAlt = get_post_meta($imageId, '_wp_attachment_image_alt', true);
                ?>
                <li>
                    <div class="head_title">
                        <h2 class="title">What our patients say</h2>
                    </div>
                    <figure class="client_pic"><img src="<?php echo $image[0]; ?>" alt="<?php echo $imageAlt; ?>"></figure>
                    <h3><?php the_title();?></h3>
                    <?php the_content();?>
                </li>
            <?php endwhile; ?>
        </ul>
    </div>
</section>