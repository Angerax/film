<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 *
 * WARNING: Please do not edit this file in any way
 *
 * load the theme function files
 */

$template_directory = get_template_directory();

//require( $template_directory . '/core/includes/functions-feedback.php' );
require( $template_directory . '/core/includes/functions.php' );
require( $template_directory . '/core/includes/functions-update.php' );
require( $template_directory . '/core/includes/functions-about.php' );
require( $template_directory . '/core/includes/functions-sidebar.php' );
require( $template_directory . '/core/includes/functions-install.php' );
require( $template_directory . '/core/includes/functions-admin.php' );
require( $template_directory . '/core/includes/functions-extras.php' );
require( $template_directory . '/core/includes/functions-extentions.php' );
require( $template_directory . '/core/includes/theme-options/theme-options.php' );
require( $template_directory . '/core/includes/functions-feedback.php' );
require( $template_directory . '/core/includes/post-custom-meta.php' );
require( $template_directory . '/core/includes/tha-theme-hooks.php' );
require( $template_directory . '/core/includes/hooks.php' );
require( $template_directory . '/core/includes/version.php' );
require( $template_directory . '/core/includes/upsell/theme-upsell.php' );
require( $template_directory . '/core/includes/customizer.php' );

// Return value of the supplied responsive free theme option.
function responsive_free_get_option( $option, $default = false ) {
	global $responsive_options;

	// If the option is set then return it's value, otherwise return false.
	if ( isset( $responsive_options[$option] ) ) {
		return $responsive_options[$option];
	}

	return $default;
}
function responsive_free_setup() {
   add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'responsive_free_setup' );

if ( ! function_exists( '_wp_render_title_tag' ) ) :
    function responsive_free_render_title() {
?>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php
    }
    add_action( 'wp_head', 'responsive_free_render_title' );
endif;

add_filter( 'body_class', 'responsive_add_site_layout_classes' );

function responsive_add_site_layout_classes( $classes ){

	global $responsive_options;

	if ( !empty( $responsive_options['site_layout_option'] ) ) :

		$classes[] = $responsive_options['site_layout_option'];
		
	endif;	

	return $classes;

}
$responsive_options = get_option( 'responsive_theme_options' );
if (isset($responsive_options['sticky-header']) && $responsive_options['sticky-header'] =='1' ){
	add_action( 'wp_footer', 'responsive_fixed_menu_onscroll' );
	function responsive_fixed_menu_onscroll()
	{
		?>
	<script type="text/javascript">
	jQuery(document).ready(function($){
		$(window).scroll(function()  {
			if ($(this).scrollTop() > 0) {
				$('#header_section').addClass("sticky-header");
			}
			else{
				$('#header_section').removeClass("sticky-header");
			}

		});
	});		
	</script>
	<?php
}
}
function responsiveedit_customize_register( $wp_customize ){
	$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector' => '.site-name a'
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector' => '.site-description',
	) );
	$wp_customize->selective_refresh->add_partial( 'responsive_theme_options[home_headline]', array(
			'selector' => '.featured-title',
	) );
	$wp_customize->selective_refresh->add_partial( 'responsive_theme_options[home_subheadline]', array(
			'selector' => '.featured-subtitle',
	) );
	$wp_customize->selective_refresh->add_partial( 'responsive_theme_options[cta_text]', array(
			'selector' => '.call-to-action',
	) );
	$wp_customize->selective_refresh->add_partial( 'responsive_theme_options[banner_image]', array(
			'selector' => '#featured',
	) );
	$wp_customize->selective_refresh->add_partial( 'responsive_theme_options[about_title]', array(
			'selector' => '#about_div .section_title',
	) );
	$wp_customize->selective_refresh->add_partial( 'responsive_theme_options[about_text]', array(
			'selector' => '.about_text',
	) );
	$wp_customize->selective_refresh->add_partial( 'responsive_theme_options[about_cta_text]', array(
			'selector' => '.about-cta-button',
	) );
	$wp_customize->selective_refresh->add_partial( 'responsive_theme_options[feature_title]', array(
			'selector' => '#feature_div .section_title',
	) );	
$wp_customize->selective_refresh->add_partial( 'responsive_theme_options[testimonial_title]', array(
		'selector' => '#testimonial_div .section_title',
) );
$wp_customize->selective_refresh->add_partial( 'responsive_theme_options[team_title]', array(
		'selector' => '#team_div .section_title',
) );
	$wp_customize->selective_refresh->add_partial( 'nav_menu_locations[top]', array(
			'selector' => '.main-nav',
	) );

	$wp_customize->selective_refresh->add_partial( 'sidebars_widgets[home-widget-1]', array(
			'selector' => '#home_widget_1',
			 
	) );
	$wp_customize->selective_refresh->add_partial( 'sidebars_widgets[home-widget-2]', array(
			'selector' => '#home_widget_2',
			 
	) );
	$wp_customize->selective_refresh->add_partial( 'sidebars_widgets[home-widget-3]', array(
			'selector' => '#home_widget_3',
			 
	) );
	$wp_customize->selective_refresh->add_partial( 'responsive_theme_options[featured_content]', array(
			'selector' => '#featured-image',
			 
	) );
	$wp_customize->selective_refresh->add_partial( 'responsive_theme_options[home_content_area]', array(
			'selector' => '#featured-content p',
			 
	) );
	$wp_customize->selective_refresh->add_partial( 'responsive_theme_options[copyright_textbox]', array(
			'selector' => '.copyright',
			 
	) );
	$wp_customize->selective_refresh->add_partial( 'responsive_theme_options[contact_title]', array(
			'selector' => '.contact_title',
	
	) );
	$wp_customize->selective_refresh->add_partial( 'responsive_theme_options[contact_subtitle]', array(
			'selector' => '.contact_subtitle',
	
	) );
	$wp_customize->selective_refresh->add_partial( 'responsive_theme_options[contact_add]', array(
			'selector' => '.contact_add',
	
	) );
	$wp_customize->selective_refresh->add_partial( 'responsive_theme_options[contact_email]', array(
			'selector' => '.contact_email',
	
	) );
	$wp_customize->selective_refresh->add_partial( 'responsive_theme_options[contact_ph]', array(
			'selector' => '.contact_ph',
	
	) );
	$wp_customize->selective_refresh->add_partial( 'responsive_theme_options[contact_content]', array(
			'selector' => '.contact_right',
	
	) );
	$wp_customize->selective_refresh->add_partial( 'header_image', array(
			'selector' => '#logo',
			 
	) );

}
add_action( 'customize_register', 'responsiveedit_customize_register' );
add_theme_support( 'customize-selective-refresh-widgets' );

function responsive_custom_category_widget( $arg ) {
	$cat = get_theme_mod( 'exclude_post_cat' );

	if( $cat ){
		$cat = array_diff( array_unique( $cat ), array('') );
		$arg["exclude"] = $cat;
	}
	return $arg;
}
add_filter( "widget_categories_args", "responsive_custom_category_widget" );
add_filter( "widget_categories_dropdown_args", "responsive_custom_category_widget" );

function responsive_exclude_post_cat_recentpost_widget(){
	$s = '';
	$i = 1;
	$cat = get_theme_mod( 'exclude_post_cat' );

	if( $cat ){
		$cat = array_diff( array_unique( $cat ), array('') );
		foreach( $cat as $c ){
			$i++;
			$s .= '-'.$c;
			if( count($cat) >= $i )
				$s .= ', ';
		}
	}

	$exclude = array( 'cat' => $s );

	return $exclude;
}
add_filter( "widget_posts_args", "responsive_exclude_post_cat_recentpost_widget" );

if( !function_exists('responsive_page_featured_image') ) :

	function responsive_page_featured_image() {
					// check if the page has a Post Thumbnail assigned to it.
					$responsive_options = responsive_get_options();
					if ( has_post_thumbnail() && 1 == $responsive_options['featured_images'] ) { ?>
						<div class="featured-image">
							<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'responsive' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
								<?php	the_post_thumbnail(); ?>
							</a>
						</div>
					<?php }  
	}

endif;

/**
 * Exclude post with Category from blog and archive page.
 */
if( !function_exists('responsive_exclude_post_cat') ) : 	
function responsive_exclude_post_cat( $query ){
	$responsive_options = responsive_get_options();
	//$cat = $responsive_options['exclude_post_cat'];
	$cat = get_theme_mod( 'exclude_post_cat' );

	if( $cat && ! is_admin() && $query->is_main_query() ){
		$cat = array_diff( array_unique( $cat ), array('') ); 		
		if( $query->is_home() || $query->is_archive() ) {
			$query->set( 'category__not_in', $cat );
			//$query->set( 'cat', '-5,-6,-65,-66' );
		}
	}
}
endif;	
add_filter( 'pre_get_posts', 'responsive_exclude_post_cat' );

if( !function_exists('responsive_get_attachment_id_from_url') ) :
function responsive_get_attachment_id_from_url( $attachment_url = '' ) {
	global $wpdb;
	$attachment_id = false;
	// If there is no url, return.
	if ( '' == $attachment_url )
		return;
	// Get the upload directory paths
	$upload_dir_paths = wp_upload_dir();
	// Make sure the upload path base directory exists in the attachment URL, to verify that we're working with a media library image
	if ( false !== strpos( $attachment_url, $upload_dir_paths['baseurl'] ) ) {
		// If this is the URL of an auto-generated thumbnail, get the URL of the original image
		$attachment_url = preg_replace( '/-\d+x\d+(?=\.(jpg|jpeg|png|gif)$)/i', '', $attachment_url );
		// Remove the upload path base directory from the attachment URL
		$attachment_url = str_replace( $upload_dir_paths['baseurl'] . '/', '', $attachment_url );
		// Finally, run a custom database query to get the attachment ID from the modified attachment URL
		$attachment_id = $wpdb->get_var( $wpdb->prepare( "SELECT wposts.ID FROM $wpdb->posts wposts, $wpdb->postmeta wpostmeta WHERE wposts.ID = wpostmeta.post_id AND wpostmeta.meta_key = '_wp_attached_file' AND wpostmeta.meta_value = '%s' AND wposts.post_type = 'attachment'", $attachment_url ) );
	}
	return $attachment_id;
}
endif;


/* Lightbox support for woocommerce templates */
	$responsive_options = responsive_get_options();
	if ( isset($responsive_options['override_woo']) && 1 == $responsive_options['override_woo'] )
	{
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );
	}
