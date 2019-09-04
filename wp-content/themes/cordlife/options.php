<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 * @package Skeleton WordPress Theme Framework
 * @subpackage skeleton
 * @author Simple Themes - www.simplethemes.com
 */

function optionsframework_option_name() {


	$theme  = wp_get_theme();
	$themename = $theme['Template'];
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option( 'optionsframework' );
	$optionsframework_settings['id'] = $themename;
	update_option( 'optionsframework', $optionsframework_settings );

}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the "id" fields, make sure to use all lowercase and no spaces.
 *
 */

function optionsframework_options() {
// If using image radio buttons, define a directory path
$imagepath =  get_template_directory_uri() . '/images/';
$options = array();
/*General Site Settings*/
$options[] = array( "name" => "General Settings",
					"type" => "heading");

$options[] = array( "name" => "Logo",
					"desc" => "",
					"id" => "logo",
					"class" => "",
					"type" => "upload");
$options[] = array( "name" => "Email",
                    "desc" => "Please enter the email ID",
                    "id" => "email_id",
                    "std" => "",
                    "class" => "",
                    "type" => "text");
$options[] = array( "name" => "Email 2",
                    "desc" => "Please enter another email ID",
                    "id" => "email_id_2",
                    "std" => "",
                    "class" => "",
                    "type" => "text");
$options[] = array( "name" => "Toll Free No.",
                    "desc" => "Please enter the toll free no.",
                    "id" => "toll_free_no",
                    "std" => "",
                    "class" => "",
                    "type" => "text");
$options[] = array( "name" => "Hot Line No.",
                    "desc" => "Please enter the hot line no.",
                    "id" => "hot_line_no",
                    "std" => "",
                    "class" => "",
                    "type" => "text");
$options[] = array( "name" => "Address",
                    "desc" => "Please enter the address",
                    "id" => "address",
                    "std" => "",
                    "class" => "",
                    "type" => "textarea");
$options[] = array( "name" => "Collaborator Logo",
                    "desc" => "",
                    "id" => "collaborator_logo",
                    "class" => "",
                    "type" => "upload");
$options[] = array( "name" => "Footer Copyright Text",
                    "desc" => "Please enter the copyright text",
                    "id" => "footer_copyright",
                    "std" => "",
                    "class" => "",
                    "type" => "textarea");

/*Social Icon Links*/
$options[] = array( "name" => "Social Icons Settings",
                    "type" => "heading");

$options[] = array( "name" => "Facebook",
                    "desc" => "Please Enter the Facebook Link",
                    "id" => "facebook",
                    "std" => "",
                    "class" => "",
                    "type" => "text");
$options[] = array( "name" => "Google Plus",
                    "desc" => "Please Enter the Google Plus Link",
                    "id" => "gplus",
                    "std" => "",
                    "class" => "",
                    "type" => "text");
$options[] = array( "name" => "Twitter",
                    "desc" => "Please Enter the Twitter Link",
                    "id" => "twitter",
                    "std" => "",
                    "class" => "",
                    "type" => "text");
$options[] = array( "name" => "You Tube",
                    "desc" => "Please Enter the You Tube Link",
                    "id" => "youtube",
                    "std" => "",
                    "class" => "",
                    "type" => "text");
$options[] = array( "name" => "LinkedIn",
                    "desc" => "Please Enter the LinkedIn Link",
                    "id" => "linkedin",
                    "std" => "",
                    "class" => "",
                    "type" => "text");
					
/*Homepage Slider*/
$options[] = array( "name" => "Homepage Slider",
					"type" => "heading");					
					
$options[] = array( "name" => "Custom Number",
					"desc" => "Enter the number of slider images.",
					"id" => "lycust_no",
					"std" => "",
					"type" => "text");
					
$lnum=of_get_option('lycust_no');	
for ($i=1;$i<=$lnum	;$i++)
{
    $options[] = array( "name" => "Image $i",
                        "desc" => "Upload a desired image.",
                        "id" => "lylogoimg_$i",
                        "std" => "",
                        "type" => "upload");
    $options[] = array( "name" => "Image Title $i",
                        "desc" => "Enter your desired banner title.",
                        "id" => "lytitle_$i",
                        "std" => "",
                        "type" => "textarea");
    $options[] = array( "name" => "Image Description $i",
                        "desc" => "Enter the desired banner description.",
                        "id" => "lydesc_$i",
                        "std" => "",
                        "type" => "textarea");
    $options[] = array( "name" => "Image Button Text $i",
                        "desc" => "Enter the desired button text.",
                        "id" => "lybuttontext_$i",
                        "std" => "",
                        "type" => "text");
    $options[] = array( "name" => "Image Link $i",
                        "desc" => "Enter the link for the button.",
                        "id" => "lybuttonlink_$i",
                        "std" => "",
                        "type" => "text");
}

/*Homepage Quick Facts*/
$options[] = array( "name" => "Homepage Quick Facts",
                    "type" => "heading");
$options[] = array( "name" => "Quick Facts Main Heading",
                    "desc" => "Enter the main heading of quick facts.",
                    "id" => "quick_facts_main_heading",
                    "std" => "",
                    "type" => "text");
$options[] = array( "name" => "Quick Facts Sub Heading",
                    "desc" => "Enter the sub heading of quick facts.",
                    "id" => "quick_facts_sub_heading",
                    "std" => "",
                    "type" => "text");
$options[] = array( "name" => "Number of Facts",
                    "desc" => "Enter the number of quick facts.",
                    "id" => "quick_fact_no",
                    "std" => "",
                    "type" => "text");

$lnum=of_get_option('quick_fact_no');
for ($i=1;$i<=$lnum	;$i++)
{
    $options[] = array( "name" => "Quick Fact Icon $i",
                        "desc" => "Upload a desired quick fact icon.",
                        "id" => "quick_fact_icon_$i",
                        "std" => "",
                        "type" => "upload");
    $options[] = array( "name" => "Title $i",
                        "desc" => "Enter your desired quick fact title.",
                        "id" => "quick_fact_title_$i",
                        "std" => "",
                        "type" => "text");
    $options[] = array( "name" => "Description $i",
                        "desc" => "Enter the desired quick fact description.",
                        "id" => "quick_fact_desc_$i",
                        "std" => "",
                        "type" => "textarea");
}

/*Homepage Reporting Section*/
$options[] = array( "name" => "Home Page Reporting Section",
    "type" => "heading");
$options[] = array( "name" => "Image",
                    "desc" => "",
                    "id" => "report_section_image",
                    "class" => "",
                    "type" => "upload");
$options[] = array( "name" => "Title",
                    "desc" => "Please enter the title of the reporting section",
                    "id" => "report_section_title",
                    "std" => "",
                    "class" => "",
                    "type" => "text");
$options[] = array( "name" => "Description",
                    "desc" => "Please enter the description of the reporting section",
                    "id" => "report_section_description",
                    "std" => "",
                    "class" => "",
                    "type" => "textarea");
$options[] = array( "name" => "Opening Hours Heading",
                    "desc" => "Please Enter the heading",
                    "id" => "opening_hours_heading",
                    "std" => "",
                    "class" => "",
                    "type" => "text");
$options[] = array( "name" => "Opening Hours Description",
                    "desc" => "Please Enter the Description",
                    "id" => "opening_hours_description",
                    "std" => "",
                    "class" => "",
                    "type" => "textarea");
$options[] = array( "name" => "Working Days",
                    "desc" => "Please Enter the working days",
                    "id" => "opening_hours_working_days",
                    "std" => "",
                    "class" => "",
                    "type" => "text");
$options[] = array( "name" => "Working Days Time",
                    "desc" => "Please Enter the time for working days",
                    "id" => "opening_hours_working_days_time",
                    "std" => "",
                    "class" => "",
                    "type" => "text");
$options[] = array( "name" => "Other Working Days",
                    "desc" => "Please Enter other working days",
                    "id" => "opening_hours_working_days_other",
                    "std" => "",
                    "class" => "",
                    "type" => "text");
$options[] = array( "name" => "Other Working Days Time",
                    "desc" => "Please Enter the time for other working days",
                    "id" => "opening_hours_working_days_time_other",
                    "std" => "",
                    "class" => "",
                    "type" => "text");

return $options;
}
