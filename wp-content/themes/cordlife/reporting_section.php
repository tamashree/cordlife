<section class="reporting_section padd">
    <div class="container">
        <div  class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 aos-item"  data-aos="fade-right"  data-aos-duration="500">
                <div class="schedule_info">
                    <figure><img src='<?php echo of_get_option('report_section_image'); ?>' alt="Welcome To Cordlife"></figure>
                    <h2><?php echo of_get_option('report_section_title'); ?></h2>
                    <p><?php echo of_get_option('report_section_description'); ?></p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 aos-item"  data-aos="fade-left"  data-aos-duration="500">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="time_section">
                            <h2><?php echo of_get_option('opening_hours_heading'); ?></h2>
                            <p><?php echo of_get_option('opening_hours_description'); ?></p>
                            <ul>
                                <li>
                                    <span><?php echo of_get_option('opening_hours_working_days'); ?></span>
                                    <span><?php echo of_get_option('opening_hours_working_days_time'); ?></span>
                                    <hr>
                                </li>
                                <li>
                                    <span><?php echo of_get_option('opening_hours_working_days_other'); ?></span>
                                    <span><?php echo of_get_option('opening_hours_working_days_time_other'); ?></span>
                                    <hr>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="time_section time_sec2">
                            <h2>Get In Touch</h2>
                            <ul>
                                <li><i class="fa fa-map-marker"></i>
                                    <p><?php echo of_get_option('address')?></p>
                                </li>
                                <li><i class="fa fa-phone"></i><a href="tel:<?php echo of_get_option('toll_free_no'); ?>"><?php echo of_get_option('toll_free_no'); ?></a></li>
                                <li><i class="fa fa-paper-plane"></i><a href="mailto:<?php echo of_get_option('email_id'); ?>"><?php echo of_get_option('email_id'); ?></a></li>
                                <li><i class="fa fa-globe"></i><a href="mailto:<?php echo of_get_option('email_id_2'); ?>"><?php echo of_get_option('email_id_2'); ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>