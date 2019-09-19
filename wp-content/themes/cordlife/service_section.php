<!-- Service Section -->
<section class="service_section padd">
    <div class="head_title">
        <?php $servicePageId = '17'; ?>
        <h2 class="title"><?php echo get_field( "custom_heading", $servicePageId ); ?></h2>
        <p class="subpara"><?php echo get_field( "short_description", $servicePageId ); ?></p>
    </div>
    <div class="container">
        <?php
        $args = array(
            'showposts'   => -1,
            'post_type'     => 'services',
            'post_status'      => 'publish',
            'order' => 'ASC');
        query_posts( $args );
        if (have_posts()) : ?>
            <ul class="service_list">
                <?php while (have_posts($args)) : the_post(); ?>
                    <li>
                        <a href="#">
                            <figure><img src="<?php echo get_field('small_icon')['url']; ?>" alt="<?php the_title(); ?>"></figure>
                            <h3 class="title"><?php the_title(); ?></h3>
                            <p><?php echo get_field('short_description'); ?></p>
                        </a>
                    </li>
                <?php endwhile; ?>
            </ul>
            <?php endif; ?>
    </div>
    <a href="#" class="book_appointment">Book an appointment <span class="ion-android-arrow-forward"></span></a>
</section>
<!-- Service Section -->