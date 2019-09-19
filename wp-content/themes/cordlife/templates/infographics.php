<?php /* Template Name: Infographics */
get_header(); ?>
<?php include(TEMPLATEPATH.'/inner_banner.php'); ?>
<section class="blog_section padd" style="height:100%">  
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-8 col-sm-7">
                <form action="" method="GET" id="newslist">
                    <select name="infographicsCat" id="infographicsCat" onchange="submit();">
                    <option value="" <?php echo ($_GET['infographicsCat'] == '') ? ' selected="selected"' : ''; ?>>Show all</option>
                    <?php 
                        $categories = get_categories('taxonomy=infographicscat&post_type=infographics'); 
                        foreach ($categories as $category) : 
                        echo '<option value="'.$category->name.'"';
                        echo ($_GET['infographicsCat'] == ''.$category->name.'') ? ' selected="selected"' : '';
                        echo '>'.$category->name.'</option>';
                        endforeach; 
                    ?>
                    </select>
                </form>
            </div>
            <div class="col-lg-12 col-md-8 col-sm-7">
                <div class="blog_main">
                    <div class="grid grid--images" data-js="imagesloaded-callback">
                        <div class="grid-sizer"></div>
                        <?php // let the queries begin
                        if( !isset($_GET['infographicsCat']) || '' == $_GET['infographicsCat']) {
                            $newslist = new WP_Query( array(
                            'post_type' => 'infographics',
                            'orderby' => 'id',
                            'order' => 'ASC',
                            'showposts' => -1
                            //'paged' => $paged
                            ) ); 
                        } else { //if select value exists (and isn't 'show all'), the query that compares $_GET value and taxonomy term (name)
                            $infographicsCategory = $_GET['infographicsCat']; //get sort value
                            $newslist = new WP_Query( array(
                            'post_type' => 'infographics', 
                            'orderby' => 'id',
                            'order' => 'ASC',
                            'showposts' => -1,
                            'paged' => $paged,
                            'tax_query' => array(
                                array(
                                'taxonomy' => 'infographicscat',
                                'field' => 'name',
                                'terms' => $infographicsCategory
                                ) 
                            ) 
                            ));
                        }
                        if ($newslist->have_posts()) :
                        while ( $newslist->have_posts() ) : $newslist->the_post();
                            //the_title(); echo "<br>"; 
                            $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'full');
                            $imageId = get_post_thumbnail_id( $post->ID );
                            $imageAlt = get_post_meta($imageId, '_wp_attachment_image_alt', true);
                        ?>
                            <a href="#" class="blog_column grid-image-item">
                                <!-- <h2><?php the_title(); ?></h2> -->
                                <div class="blog_pic">
                                <figure><img src="<?php echo $image[0]; ?>" alt="" style="border: 1px solid #0076b3; border-radius: 10px;"></figure>
                                </div>
                            </a>
                        <?php endwhile; 
                        else : 
                            echo 'There are no news items in that category.'; 
                        endif; 
                        ?>  
                    </div>  
                </div>
            </div>
        </div>          
    </div>       
</section>
<?php get_footer(); ?>