<?php get_header(); ?>
<?php include(TEMPLATEPATH.'/inner_banner.php'); ?>
<section class="about_box press_sec padd">
    <div class="head_title">
        <?php if (have_posts()) :
            while (have_posts($args)) : the_post(); ?>
                <h2 class="title"><?php the_title(); ?></h2>
    </div>
    <div class="container">
        <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 press_info">
                    <?php the_content(); ?>
                </div>
            <?php endwhile;
            endif; ?>
        </div>
    </div>
</section>
<?php include(TEMPLATEPATH.'/book_appointment.php'); ?>
<?php get_footer(); ?>