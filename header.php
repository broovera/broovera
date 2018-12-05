<?php
/**
 * The default template for displaying header
 *
 * @package eVision themes
 * @subpackage Bizlight
 * @since Bizlight 1.0.0
 */

/**
 * bizlight_action_before_head hook
 * @since Bizlight 1.0.0
 *
 * @hooked bizlight_set_global -  0
 * @hooked bizlight_doctype -  10
 */
do_action( 'bizlight_action_before_head' );?>
<head>
<meta name="format-detection" content="telephone=no">
	<?php
	/**
	 * bizlight_action_before_wp_head hook
	 * @since Bizlight 1.0.0
	 *
	 * @hooked bizlight_before_wp_head -  10
	 */
	do_action( 'bizlight_action_before_wp_head' );

	wp_head();

	/**
	 * bizlight_action_after_wp_head hook
	 * @since Bizlight 1.0.0
	 *
	 * @hooked null
	 */
	do_action( 'bizlight_action_after_wp_head' );
	?>

<style>
    .cc-btn{
    color: rgb(255, 255, 255) !important;
}
</style>

<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1492339297487637');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=1492339297487637&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
</head>

<body <?php body_class(); ?>>
    <div class="side_widget animated bounce duration3 open-dynamic-modal">
<div class="side_widget_btn">CONTATTACI ORA <i class="fa fa-envelope"></i></div> 
...
</div> 
</div>

<?php
/**
 * bizlight_action_before hook
 * @since Bizlight 1.0.0
 *
 * @hooked bizlight_page_start - 15
 */
do_action( 'bizlight_action_before' );

/**
 * bizlight_action_before_header hook
 * @since Bizlight 1.0.0
 *
 * @hooked bizlight_skip_to_content - 10
 */
do_action( 'bizlight_action_before_header' );


/**
 * bizlight_action_header hook
 * @since Bizlight 1.0.0
 *
 * @hooked bizlight_after_header - 10
 */
do_action( 'bizlight_action_header' );

/**
 * bizlight_action_before_content hook
 * @since Bizlight 1.0.0
 *
 * @hooked null
 */
do_action( 'bizlight_action_before_content' );

/**
 * bizlight_action_on_header hook
 * @since Bizlight 1.0.0
 *
 * @hooked null
 */
do_action( 'bizlight_action_on_header' );




/**
 * bizlight_action_after_header hook
 * @since Bizlight 1.0.0
 *
 * @hooked null
 */
do_action( 'bizlight_action_after_header' );

?>