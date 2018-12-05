<?php
if (!function_exists('bizlight_home_about_array')) :
    /**
     * Featured Slider array creation
     *
     * @since Bizlight 1.0.0
     *
     * @param string $from_about
     * @return array
     */
    function bizlight_home_about_array() {

        $bizlight_home_about_contents_array = array();
        $bizlight_home_about_contents_array[0]['bizlight-home-about-title'] = __('Public Voice','bizlight');
        $bizlight_home_about_contents_array[0]['bizlight-home-about-content'] = __(" The set doesn't moved. Deep don't fru it fowl gathering heaven days moving creeping under from i air. Set it fifth Meat was darkness.",'bizlight');
        $bizlight_home_about_contents_array[0]['bizlight-home-about-link'] = '#';
        $bizlight_home_about_contents_array[0]['bizlight-home-about-icon'] = 'fa-bullhorn';

        $bizlight_home_about_contents_array[1]['bizlight-home-about-title'] = __('Photography','bizlight');
        $bizlight_home_about_contents_array[1]['bizlight-home-about-content'] = __(" The set doesn't moved. Deep don't fru it fowl gathering heaven days moving creeping under from i air. Set it fifth Meat was darkness.",'bizlight');
        $bizlight_home_about_contents_array[1]['bizlight-home-about-link'] = '#';
        $bizlight_home_about_contents_array[1]['bizlight-home-about-icon'] = 'fa-camera-retro';

        $bizlight_home_about_contents_array[2]['bizlight-home-about-title'] = __('Customization','bizlight');
        $bizlight_home_about_contents_array[2]['bizlight-home-about-content'] = __(" The set doesn't moved. Deep don't fru it fowl gathering heaven days moving creeping under from i air. Set it fifth Meat was darkness.",'bizlight');
        $bizlight_home_about_contents_array[2]['bizlight-home-about-link'] = '#';
        $bizlight_home_about_contents_array[2]['bizlight-home-about-icon'] = 'fa-cog';

        $bizlight_icons_arrays = array();
        $bizlight_home_about_args = array();
        $bizlight_repeated_array = array('bizlight-home-about-page-icon','bizlight-home-about-pages-ids');
        $bizlight_home_about_posts = bizlight_get_repeated_all_value(3,$bizlight_repeated_array);
        $bizlight_home_about_posts_ids = array();
        if (null != $bizlight_home_about_posts) {
            foreach ($bizlight_home_about_posts as $bizlight_home_about_post) {
                if (0 != $bizlight_home_about_post['bizlight-home-about-pages-ids']) {
                    $bizlight_home_about_posts_ids[] = $bizlight_home_about_post['bizlight-home-about-pages-ids'];
                    if (isset($bizlight_home_about_post['bizlight-home-about-page-icon'])) {
                        $bizlight_home_about_page_icon = $bizlight_home_about_post['bizlight-home-about-page-icon'];
                    } else {
                        $bizlight_home_about_page_icon = 'fa-desktop';
                    }
                    $bizlight_icons_arrays[] = $bizlight_home_about_page_icon;
                }
            }
            if( !empty( $bizlight_home_about_posts_ids )){
                $bizlight_home_about_args = array(
                    'post_type' => 'page',
                    'post__in' => $bizlight_home_about_posts_ids,
                    'posts_per_page' => 3,
                    'orderby' => 'post__in'
                );
            }
        }
        // the query
        if( !empty( $bizlight_home_about_args )){
            $bizlight_home_about_contents_array = array();
            $bizlight_home_about_post_query = new WP_Query($bizlight_home_about_args);
            if ($bizlight_home_about_post_query->have_posts()) :
                $i = 0;
                while ($bizlight_home_about_post_query->have_posts()) : $bizlight_home_about_post_query->the_post();
                    $bizlight_home_about_contents_array[$i]['bizlight-home-about-title'] = get_the_title();
                    $bizlight_home_about_contents_array[$i]['bizlight-home-about-content'] = bizlight_words_count( 30 ,get_the_content());
                    $bizlight_home_about_contents_array[$i]['bizlight-home-about-link'] = get_permalink();
                    if(isset( $bizlight_icons_arrays[$i] )){
                        $bizlight_home_about_contents_array[$i]['bizlight-home-about-icon'] = $bizlight_icons_arrays[$i];
                    }
                    else{
                        $bizlight_home_about_contents_array[$i]['bizlight-home-about-icon'] = 'fa-desktop';
                    }
                    $i++;
                endwhile;
                wp_reset_postdata();
            endif;
        }
        return $bizlight_home_about_contents_array;
    }
endif;

if (!function_exists('bizlight_home_about')) :
    /**
     * Featured Slider
     *
     * @since Bizlight 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function bizlight_home_about() {
        global $bizlight_customizer_all_values;
        if (1 != $bizlight_customizer_all_values['bizlight-home-about-enable']) {
            return null;
        }
        $bizlight_about_arrays = bizlight_home_about_array();
        if (is_array($bizlight_about_arrays)) {
            $bizlight_home_about_title = $bizlight_customizer_all_values['bizlight-home-about-title'];
            $bizlight_home_about_content = $bizlight_customizer_all_values['bizlight-home-about-content'];
            $bizlight_home_about_right_image = $bizlight_customizer_all_values['bizlight-home-about-right-image'];
            ?>
            <section class="evision-wrapper block-section wrap-about">
                    <div class="container overhidden">
                        <div class="row">
                        <div class="col-md-12 about-testo-principale">
                                      <?php 
                                           	$hometestoprincipale = get_option('cta-box') ;
                                            echo($hometestoprincipale);
                                      ?>
                        </div>
                            <div class="col-md-7 evision-animate fadeInLeft about-testo-secondario1">
                                <div class="about-content">
                                            <?php 
                                            	$hometestosecondario = get_option('desktop_main_menu') ;
                                            	echo($hometestosecondario);
                                            ?>
                                            
                                </div>
                            </div>
                            <div class="col-md-5 evision-animate slideInRight about-testo-secondario2">
                                <div class="product-thumb">
                                    <img src="<?php echo esc_url( $bizlight_home_about_right_image );?>" />
                                </div>
                            </div>
                        </div>
                    </div>
            </section><!-- about section -->
            <div style="clear: both"></div>
            <section class="greysectionbottom" style="background-color:#f2f2f2; padding-top:50px; padding-bottom:50px;">
				<a href="<?php echo(get_home_url().'/tutti-i-servizi');?>">
					<div class="grid-first-row">
					   <div class="food gridpicture evision-animate fadeIn foodfirstpicture"><p class="scrittaimmagini">Food & Beverage</p></div>
					   <div class="gridpicture foodsecondpicture imgnotvisible"><p class="scrittaimmagini">Food & Beverage</p></div>
					   <div class="wellness gridpicture evision-animate fadeIn beautyfirstpicture"><p class="scrittaimmagini">Wellness & Beauty</p></div>
					   <div class="gridpicture beautysecondpicture imgnotvisible"><p class="scrittaimmagini">Wellness & Beauty</p></div>
					</div>
				</a>
				<div style="clear: both; height:8px;"></div>
				<a href="<?php echo(get_home_url().'/tutti-i-servizi');?>">
					<div class="grid-second-row">	
					     <div class="health gridpicture evision-animate fadeIn healthfirstpicture"><p class="scrittaimmagini">Health</p></div>
					     <div class="gridpicture healthsecondpicture imgnotvisible"><p class="scrittaimmagini">Health</p></div>
					     <div class="business gridpicture evision-animate fadeIn businessfirstpicture"><p class="scrittaimmagini">Business</p></div>
					     <div class="gridpicture businesssecondpicture imgnotvisible"><p class="scrittaimmagini">Business</p></div>
					</div>
				</a>

				</div>
				<div style="clear: both; height:80px;"></div>
				<?php the_field('grey_section_content'); ?>
				<div style="clear: both; height:40px;"></div>
			</section>
			

<script>

           
			jQuery( document ).ready(function() {
                jQuery(".foodfirstpicture").on({
                     "mouseover": function() {
                         var pageWidth = jQuery(window).width();
                         if (pageWidth > 991) {
                             jQuery(this).addClass("imgnotvisible");
                             jQuery(".foodsecondpicture").removeClass("imgnotvisible");
                         }
                     }
                 });
                 jQuery(".foodsecondpicture").on({
                     "mouseout": function() {
                         var pageWidth = jQuery(window).width();
                         if (pageWidth > 991) {
                             jQuery(this).addClass("imgnotvisible");
                             jQuery(".foodfirstpicture").removeClass("imgnotvisible");
                         }
                     }
                 });
                
                
                 jQuery(".beautyfirstpicture").on({
                     "mouseover": function() {
                         var pageWidth = jQuery(window).width();
                         if (pageWidth > 991) {
                             jQuery(this).addClass("imgnotvisible");
                             jQuery(".beautysecondpicture").removeClass("imgnotvisible");
                         }
                     }
                 });
                 jQuery(".beautysecondpicture").on({
                     "mouseout": function() {
                         var pageWidth = jQuery(window).width();
                         if (pageWidth > 991) {
                             jQuery(this).addClass("imgnotvisible");
                             jQuery(".beautyfirstpicture").removeClass("imgnotvisible");
                         }
                     }
                 });
                
                
                 jQuery(".healthfirstpicture").on({
                     "mouseover": function() {
                         var pageWidth = jQuery(window).width();
                         if (pageWidth > 991) {
                             jQuery(this).addClass("imgnotvisible");
                             jQuery(".healthsecondpicture").removeClass("imgnotvisible");
                         }
                     }
                 });
                 jQuery(".healthsecondpicture").on({
                     "mouseout": function() {
                         var pageWidth = jQuery(window).width();
                         if (pageWidth > 991) {
                             jQuery(this).addClass("imgnotvisible");
                             jQuery(".healthfirstpicture").removeClass("imgnotvisible");
                         }
                     }
                 });
                
                
                 jQuery(".businessfirstpicture").on({
                     "mouseover": function() {
                         var pageWidth = jQuery(window).width();
                         if (pageWidth > 991) {
                             jQuery(this).addClass("imgnotvisible");
                             jQuery(".businesssecondpicture").removeClass("imgnotvisible");
                         }
                     }
                 });
                 jQuery(".businesssecondpicture").on({
                     "mouseout": function() {
                         var pageWidth = jQuery(window).width();
                         if (pageWidth > 991) {
                             jQuery(this).addClass("imgnotvisible");
                             jQuery(".businessfirstpicture").removeClass("imgnotvisible");
                         }
                     }
                 });
            });
			    
			</script>
            <?php
        }
        ?>
        <?php
    }
endif;
add_action('homepage', 'bizlight_home_about', 20);