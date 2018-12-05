<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package eVision themes
 * @subpackage Bizlight
 * @since Bizlight 1.0.0
 */

/**
 * bizlight_action_after_content hook
 * @since Bizlight 1.0.0
 *
 * @hooked null
 */
do_action( 'bizlight_action_after_content' );

/**
 * bizlight_action_before_footer hook
 * @since Bizlight 1.0.0
 *
 * @hooked null
 */
do_action( 'bizlight_action_before_footer' );

/**
 * bizlight_action_footer hook
 * @since Bizlight 1.0.0
 *
 * @hooked bizlight_footer - 10
 */
do_action( 'bizlight_action_footer' );

/**
 * bizlight_action_after_footer hook
 * @since Bizlight 1.0.0
 *
 * @hooked null
 */
do_action( 'bizlight_action_after_footer' );

/**
 * bizlight_action_after hook
 * @since Bizlight 1.0.0
 *
 * @hooked bizlight_page_end - 10
 */
do_action( 'bizlight_action_after' );
?>
<?php wp_footer(); ?>
<script>

jQuery( document ).ready(function() {
    if (jQuery.trim(jQuery(".greysectionbottom").html()) == '') {
        jQuery(".greysectionbottom").hide();
    }
    var myDiv = document.getElementById("catapult-cookie-bar");
    var cookieconsenttotalheight = myDiv.clientHeight + myDiv.scrollHeight;
    if(jQuery(document).width()>991){
        jQuery( "#masthead" ).prepend( jQuery('#catapult-cookie-bar') );
    }else{
           jQuery( ".mynavigation" ).prepend( jQuery('#catapult-cookie-bar') );
    }
    
    // Detect ios 11_x_x affected  
    // NEED TO BE UPDATED if new versions are affected
    var ua = navigator.userAgent,
    iOS = /iPad|iPhone|iPod/.test(ua),
    iOS11 = /OS 11_0|OS 11_1|OS 11_2/.test(ua);

    // ios 11 bug caret position
    if ( iOS && iOS11 ) {

        // Add CSS class to body
        jQuery("body").addClass("iosBugFixCaret");

    }
    
});

jQuery('.menu-item-has-children').on('click touch', function () {
	jQuery(this).find("ul.sub-menu").toggle();
});
jQuery(document).ready(function ($) {
    $('#page').on('click touchend',function (event) {
            $(".navbar-collapse").removeClass('in');
    });
	$('#page').on('click touchend',function (event) {
		catapultAcceptCookies();
	});
});
jQuery('.open-dynamic-modal').click(function(){
    jQuery('#dynamic-modal').modal('show');
});

jQuery('.wpcf7-form p').not(":has(img)").addClass('toTop');
</script>




        <div class="modal fade" id="dynamic-modal" tabindex="-1" role="dialog" aria-labelledby="DynamicModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <?php echo do_shortcode('[contact-form-7 id="112" title="Broovera"]'); ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Chiudi</button>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>