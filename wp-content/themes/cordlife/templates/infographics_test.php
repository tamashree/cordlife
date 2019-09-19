<h4>Filter News by Category</h4>
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
<?php // let the queries begin 
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;  
if( !isset($_GET['infographicsCat']) || '' == $_GET['infographicsCat']) {
    $newslist = new WP_Query( array(
    'post_type' => 'infographics', 
    'posts_per_page' => 8,
    'orderby' => 'DATE',
    'paged' => $paged
    ) ); 
} else { //if select value exists (and isn't 'show all'), the query that compares $_GET value and taxonomy term (name)
    $infographicscatCategory = $_GET['infographicsCat']; //get sort value
    $newslist = new WP_Query( array(
    'post_type' => 'infographics', 
    'posts_per_page' => 8,
    'orderby' => 'DATE',
    'paged' => $paged,
    'tax_query' => array(
        array(
        'taxonomy' => 'infographicscat',
        'field' => 'name',
        'terms' => $infographicscatCategory
        ) 
    ) 
    ));
}
if ($newslist->have_posts()) :
while ( $newslist->have_posts() ) : $newslist->the_post();
    the_title(); echo "<br>"; 
?>
<?php endwhile; 
else : 
echo 'There are no news items in that category.'; 
endif; 
?>  
<!-- <?php if(function_exists('wp_pagenavi')) {
    wp_pagenavi(array('query' => $newslist));
    } else {
    echo 'Please enable WP-PageNavi!';
    } ?>  -->
<?php wp_reset_query(); ?>





===========================================



<?php /* Template Name: New Infographics Template */
get_header(); ?>
<?php include(TEMPLATEPATH.'/inner_banner.php'); ?>
<section class="about_box press_sec padd">
    <div class="head_title">
        <h2 class="title"><?php the_title(); ?></h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
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
            <?php // let the queries begin
            if( !isset($_GET['infographicsCat']) || '' == $_GET['infographicsCat']) {
                $newslist = new WP_Query( array(
                'post_type' => 'infographics',
                'orderby' => 'DATE',
                'showposts' => -1
                //'paged' => $paged
                ) ); 
            } else { //if select value exists (and isn't 'show all'), the query that compares $_GET value and taxonomy term (name)
                $infographicscatCategory = $_GET['infographicsCat']; //get sort value
                $newslist = new WP_Query( array(
                'post_type' => 'infographics', 
                'orderby' => 'DATE',
                'showposts' => -1,
                'paged' => $paged,
                'tax_query' => array(
                    array(
                    'taxonomy' => 'infographicscat',
                    'field' => 'name',
                    'terms' => $infographicscatCategory
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
                <div class="col-lg-5 col-md-5 col-sm-5 about_border">
                    <div class="about_info_img">
                        <figure><img src="<?php echo $image[0]; ?>" alt="" height="100px"></figure>
                    </div>
                </div>
                <!-- <div class="col-md-3 col-sm-6 col-md-6"  >
                    <img src="<?php echo $image[0]; ?>" alt="<?php echo $imageAlt; ?>" width="100px" height="100px">
                </div> -->
            <?php endwhile; 
            else : 
            echo 'There are no news items in that category.'; 
            endif; 
            ?>     
        </div>
    </div>
</section>
<?php include(TEMPLATEPATH.'/book_appointment.php'); ?>
<?php get_footer(); ?>