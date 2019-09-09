<?php /* Template Name: Press Release */
get_header(); ?>
<?php include(TEMPLATEPATH.'/inner_banner.php'); ?>
<section class="about_box press_sec padd">
    <div class="head_title">
        <?php if (have_posts()) :
            while (have_posts($args)) : the_post(); ?>
                <h2 class="title"><?php the_title(); ?></h2>
                <p class="subpara"><?php echo get_the_content(); ?></p>
            <?php endwhile;
        endif; ?>
    </div>
    <div class="container">
        <div class="row">
            <?php
            $args = array(
                'showposts'   => -1,
                'post_type'     => 'press_releases',
                'post_status'      => 'publish');
            query_posts( $args );
            while (have_posts($args)) : the_post();
                $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'full');
                $imageId = get_post_thumbnail_id( $post->ID );
                $imageAlt = get_post_meta($imageId, '_wp_attachment_image_alt', true);
                ?>
                <div class="col-lg-6 col-md-6 col-sm-6 press_info">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5 about_border">
                            <div class="about_info_img">
                                <figure><img src="<?php echo $image[0]; ?>" alt="<?php echo $imageAlt; ?>"></figure>
                            </div>
                        </div>
                        <div class="col-lg-7 col-sm-7 col-md-7 about_right_info"  >
                            <div class="about_rt_text">
                                <h2><?php the_title();?></h2>
                                <span><i class="fa fa-calendar"></i> <?php echo date("m-d-Y") ?></span>
                                <?php $content = get_the_content();
                                $content = strip_tags($content);?>
                                <p><?php echo substr($content, 0, 124); ?></p>
                                <a href="<?php echo get_field('pdf_link'); ?>" class="default_btn" target="_blank">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<?php include(TEMPLATEPATH.'/book_appointment.php'); ?>
<?php get_footer(); ?>