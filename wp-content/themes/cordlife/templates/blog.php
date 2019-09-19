<?php /* Template Name: Blog */
get_header(); ?>
<?php include(TEMPLATEPATH.'/inner_banner.php'); ?>
<section class="blog_section padd" style="height:100%">
	<div class="container">
		<h1><span>THE CORDLIFE</span> </h1>
    	<div class="row">
    		<div class="col-lg-9 col-md-8 col-sm-7">
    		    <div class="blog_main">
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
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-5 blog-side">
                <div class="blog_sidebar">
                    <div class="blog_search">
                        <input type="text" placeholder="Search...">
                        <button><i class="ion-android-search"></i></button>
                    </div>
                </div>
                <div class="side_category">
                    <h3>Category</h3>
                    <!-- <ul>
                        <li><a href="#">Lorem Ipsum details</a></li>
                        <li><a href="#">Lorem Ipsum details</a></li>
                        <li><a href="#">Lorem Ipsum details</a></li>
                        <li><a href="#">Lorem Ipsum details</a></li>
                        <li><a href="#">Lorem Ipsum details</a></li>
                        <li><a href="#">Lorem Ipsum details</a></li>
                        <li><a href="#">Lorem Ipsum details</a></li>

                    </ul> -->
                    <!-- <ul>
                        <?php $categories = get_categories(); 
                        // echo "<pre>";print_r($categories);
                        foreach ($categories as $category) { //echo "<pre>";print_r($category); ?>
                            <li><a href="<?php bloginfo('url') ?>/<?php echo $category->slug; ?>"><?php echo $category->name; ?></a></li>    
                        <?php } ?>
                        
                    </ul> -->
                    <?php //wp_list_categories(); ?>
                    <?php echo get_the_category_list(); ?>
                </div>
                <!-- <div class="side_category">
                    <h3>Archive</h3>
                    <ul>
                        <li><a href="#">Lorem Ipsum details</a></li>
                        <li><a href="#">Lorem Ipsum details</a></li>
                        <li><a href="#">Lorem Ipsum details</a></li>
                        <li><a href="#">Lorem Ipsum details</a></li>
                        <li><a href="#">Lorem Ipsum details</a></li>
                        <li><a href="#">Lorem Ipsum details</a></li>
                        <li><a href="#">Lorem Ipsum details</a></li>
                        <li><a href="#">Lorem Ipsum details</a></li>
                    </ul>
                </div> -->
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>