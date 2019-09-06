<?php /* Template Name: Contact Us */
get_header(); ?>
<?php include(TEMPLATEPATH.'/inner_banner.php'); ?>
<section class="padd">
    <div class="container">
        <div class="contact_form billing_form">
            <div class="bill_head clears">
                <h1>Contact Us</h1>
            </div>
            <?php echo do_shortcode('[contact-form-7 id="111" title="Contact form 1"]'); ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>