<section class="quick_link_section padd">
    <div class="container">
        <div class="head_title">
            <h3 class="quick_title"><?php echo of_get_option('quick_facts_main_heading'); ?></h3>
            <h2 class="title"><?php echo of_get_option('quick_facts_sub_heading'); ?></h2>
        </div>
        <div class="quick_links_list aos-item" data-aos="zoom-in"  data-aos-duration="500">
            <ul class="row">
                <?php $noOfFacts = of_get_option('quick_fact_no');
                for ($i=1;$i<=$noOfFacts;$i++) { ?>
                    <li class="col-lg-4 col-md-4 col-sm-6">
                        <small class="quick_icons"><img src="<?php echo of_get_option('quick_fact_icon_'.$i); ?>" alt="<?php echo of_get_option('quick_fact_title_'.$i); ?>"></small>
                        <div class="quick_info">
                            <h2><?php echo of_get_option('quick_fact_title_'.$i); ?></h2>
                            <p><?php echo of_get_option('quick_fact_desc_'.$i); ?></p>
                        </div>
                    </li>
                <?php } ?>
<!--                <li class="col-lg-4 col-md-4 col-sm-6">-->
<!--                    <small class="quick_icons"><img src="--><?php //bloginfo('template_directory'); ?><!--/images/more_icons/quick-visits.png"></small>-->
<!--                    <div class="quick_info">-->
<!--                        <h2>Quick Visits</h2>-->
<!--                        <p>It is a long established fact that a reader-->
<!--                            will be distracted by the readable content of-->
<!--                            a page when looking at its layout.</p>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li class="col-lg-4 col-md-4 col-sm-6">-->
<!--                    <small class="quick_icons"><img src="--><?php //bloginfo('template_directory'); ?><!--/images/more_icons/card-payments.png"></small>-->
<!--                    <div class="quick_info">-->
<!--                        <h2>Card Payments</h2>-->
<!--                        <p>It is a long established fact that a reader-->
<!--                            will be distracted by the readable content of-->
<!--                            a page when looking at its layout.</p>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li class="col-lg-4 col-md-4 col-sm-6">-->
<!--                    <small class="quick_icons"><img src="--><?php //bloginfo('template_directory'); ?><!--/images/more_icons/patients-history.png"></small>-->
<!--                    <div class="quick_info">-->
<!--                        <h2>Patients History</h2>-->
<!--                        <p>It is a long established fact that a reader-->
<!--                            will be distracted by the readable content of-->
<!--                            a page when looking at its layout.</p>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li class="col-lg-4 col-md-4 col-sm-6">-->
<!--                    <small class="quick_icons"><img src="--><?php //bloginfo('template_directory'); ?><!--/images/more_icons/natural-medicine.png"></small>-->
<!--                    <div class="quick_info">-->
<!--                        <h2>Natural Medicine</h2>-->
<!--                        <p>It is a long established fact that a reader-->
<!--                            will be distracted by the readable content of-->
<!--                            a page when looking at its layout.</p>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li class="col-lg-4 col-md-4 col-sm-6">-->
<!--                    <small class="quick_icons"><img src="--><?php //bloginfo('template_directory'); ?><!--/images/more_icons/short-terms.png"></small>-->
<!--                    <div class="quick_info">-->
<!--                        <h2>Short Terms</h2>-->
<!--                        <p>It is a long established fact that a reader-->
<!--                            will be distracted by the readable content of-->
<!--                            a page when looking at its layout.</p>-->
<!--                    </div>-->
<!--                </li>-->
            </ul>
        </div>
    </div>
</section>