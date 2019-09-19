<?php
get_header(); ?>
<?php include(TEMPLATEPATH.'/inner_banner.php'); ?>
<section class="infographics_section padd">
    <div class="container tabbed-content">
        <div class="row">
            <!-- Get infographics category for the post type infographics -->
            <?php  $taxonomyTerms = get_terms( array(
                'taxonomy' => 'infographicscat',
                'hide_empty' => false,
                'orderby'    => 'ID',
                'order'      => 'ASC'
            ) );
            ?>
            <?php if ( !empty($taxonomyTerms) ){ ?>
                <div class="col-lg-3 col-md-4 col-sm-4">
                    <div class="infograph_left ">
                        <h2>Category of Infographics</h2>
                        <nav class="tabs">
                            <ul>
                                <?php $count = 0;
                                //display infographics categories
                                foreach( $taxonomyTerms as $taxonomyTerm ) { $count++;?>
                                    <li><a href="#side_tab<?php echo $taxonomyTerm->term_id; ?>" class="<?php if ($count == '1'){ ?>active<?php } ?>"><?php echo $taxonomyTerm->name; ?></a></li>
                                <?php } ?>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-sm-8  tabs-side">
                    <?php $count2 = 0;
                    foreach( $taxonomyTerms as $taxonomyTerm ) { $count2++;?>
                        <div id="side_tab<?php echo $taxonomyTerm->term_id; ?>" class="infograph_content item<?php if ($count2 == '1'){ ?> active<?php } ?>" data-title="Tab 1">
                            <div class="item-content">
                                <div class="head_title">
                                    <h2 class="title"><?php echo $taxonomyTerm->name; ?></h2>
                                </div>
                                <ul class="infograph_menus">
                                    <!-- Get posts for corresponding taxonomy category -->
                                    <?php $args = array(
                                        'post_type' => 'infographics',
                                        'post_status' => 'publish',
                                        'showposts' =>-1,
                                        'tax_query' => array(
                                            array(
                                                'taxonomy' => 'infographicscat',
                                                'field' => 'slug',
                                                'terms' => array( $taxonomyTerm->name )
                                            )
                                        )
                                    );
                                    $loop = new WP_Query( $args );
                                    while ( $loop->have_posts() ) : $loop->the_post();
                                    ?>
                                        <!-- Display post titles for corresponding taxonomy category -->
                                        <li class=""><div class="menu_box"><span><?php the_title(); ?><?php //echo $taxonomyTerm->term_id; ?></span></div></li>
                                    <?php endwhile; ?>
                                </ul>
                                <ul class="infograph_info">
                                    <?php while ( $loop->have_posts() ) : $loop->the_post();
                                        $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'full');
                                        $imageId = get_post_thumbnail_id( $post->ID );
                                        $imageAlt = get_post_meta($imageId, '_wp_attachment_image_alt', true);
                                    ?>
                                        <!-- Display post images for corresponding taxonomy category -->
                                        <li>
<!--                                            <span>-->
                                                <img src="<?php echo $image[0]; ?>" alt="<?php echo $imageAlt; ?>">
                                                <?php //the_title(); ?><?php //echo $taxonomyTerm->term_id; ?>
<!--                                            </span>-->
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            </div>
                        </div>
                    <?php } ?>
                </div> <!-- col-9 ends -->
            <?php } else { echo "No infographics found"; } ?>
        </div> <!-- row ends -->
    </div> <!-- container ends -->
</section> <!-- section ends -->
<?php get_footer(); ?>