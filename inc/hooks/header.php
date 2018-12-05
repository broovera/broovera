<?php
if ( ! function_exists( 'bizlight_set_global' ) ) :
/**
 * Setting global values for all saved customizer values
 *
 * @since Bizlight 1.0.0
 *
 * @param null
 * @return null
 *
 */
function bizlight_set_global() {
    /*Getting saved values start*/
    $GLOBALS['bizlight_customizer_all_values'] = bizlight_get_all_options(1);
}
endif;
add_action( 'bizlight_action_before_head', 'bizlight_set_global', 0 );

if ( ! function_exists( 'bizlight_doctype' ) ) :
/**
 * Doctype Declaration
 *
 * @since Bizlight 1.0.0
 *
 * @param null
 * @return null
 *
 */
function bizlight_doctype() {
    ?>
    <!DOCTYPE html><html <?php language_attributes(); ?>>
<?php
}
endif;
add_action( 'bizlight_action_before_head', 'bizlight_doctype', 10 );

if ( ! function_exists( 'bizlight_before_wp_head' ) ) :
/**
 * Before wp head codes
 *
 * @since Bizlight 1.0.0
 *
 * @param null
 * @return null
 *
 */
function bizlight_before_wp_head() {
    ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php
}
endif;
add_action( 'bizlight_action_before_wp_head', 'bizlight_before_wp_head', 10 );

if( ! function_exists( 'bizlight_default_layout' ) ) :
    /**
     * Bizlight default layout function
     *
     * @since  Bizlight 1.0.0
     *
     * @param int
     * @return string
     */
    function bizlight_default_layout(){
        global $bizlight_customizer_all_values,$post;
        $bizlight_default_layout = $bizlight_customizer_all_values['bizlight-default-layout'];
        return $bizlight_default_layout;
    }
endif;

if ( ! function_exists( 'bizlight_body_class' ) ) :
/**
 * add body class
 *
 * @since Bizlight 1.0.0
 *
 * @param null
 * @return null
 *
 */
function bizlight_body_class( $bizlight_body_classes ) {
    if(!is_front_page() || ( is_front_page() && 1 != bizlight_if_all_disable())){
        $bizlight_default_layout = bizlight_default_layout();
        if( !empty( $bizlight_default_layout ) ){
            if( 'left-sidebar' == $bizlight_default_layout ){
                $bizlight_body_classes[] = 'evision-left-sidebar';
            }
            elseif( 'right-sidebar' == $bizlight_default_layout ){
                $bizlight_body_classes[] = 'evision-right-sidebar';
            }
            elseif( 'no-sidebar' == $bizlight_default_layout ){
                $bizlight_body_classes[] = 'evision-no-sidebar';
            }
            else{
                $bizlight_body_classes[] = 'evision-right-sidebar';
            }
        }
        else{
            $bizlight_body_classes[] = 'bizlight-right-sidebar';
        }
    }
    return $bizlight_body_classes;

}
endif;
add_action( 'body_class', 'bizlight_body_class', 10, 1);

if ( ! function_exists( 'bizlight_page_start' ) ) :
/**
 * page start
 *
 * @since Bizlight 1.0.0
 *
 * @param null
 * @return null
 *
 */
function bizlight_page_start() {
?>

<style>
@media screen and (min-width: 768px){
    .mynavigation{ 
    display:none !important;
}
}
@media screen and (max-width: 767px)
{
.rtl-fleft .menu-toggle, .rtl-fright { display:none;}
nav#site-navigation { display:none;}
img#logo-in-the-title { position: relative; bottom: 15px;}
.mynavigation{background:#000 !important;border: none !important;}
.mynavigation .navbar-nav > li > a {
    color: #fff !important;
}
.mynavigation .navbar-nav .open .dropdown-menu > li > a {
     color: #fff !important;
         text-align: center;
    padding-left: 0px;
    padding-right: 0px;
}
.mynavigation  .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus {
    background-color: transparent !important;
}
.navbar-default .navbar-collapse, .navbar-default .navbar-form {
border: none !important;
}
.mynavigation .navbar-nav{
     text-align:center; !important;
}
}
</style>

<nav class="navbar navbar-default navbar-fixed-top mynavigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="http://broovera.com"><img style="bottom:8px !important;" id="logo-in-the-title" src="http://broovera.com/loghi/LOGO_BIANCO-cornice-nera.svg"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="http://broovera.com">Homepage</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Servizi<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="https://broovera.com/tutti-i-servizi/">Tutti i Servizi</a></li>
            <li><a href="https://broovera.com/servizi-website/">Website Services</a></li>
            <li><a href="https://broovera.com/pagine-network/">Pagine Network</a></li>
            <li><a href="https://broovera.com/marketing/">Marketing</a></li>
            <li><a href="https://broovera.com/servizi-aggiuntivi/">Servizi Aggiuntivi</a></li>
          </ul>
        </li>
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Azienda<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="https://broovera.com/mission/">Mission</a></li>
            <li><a href="https://broovera.com/lavora-con-noi/">Lavora con Noi</a></li>
            <li><a href="https://broovera.com/contatti/">Contatti</a></li>
          </ul>
        </li>
        <li><a href="https://broovera.com/diventa-partner/">Diventa Partner</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


    <div id="page" class="hfeed site">
<?php
}
endif;
add_action( 'bizlight_action_before', 'bizlight_page_start', 15 );

if ( ! function_exists( 'bizlight_skip_to_content' ) ) :
/**
 * Skip to content
 *
 * @since Bizlight 1.0.0
 *
 * @param null
 * @return null
 *
 */
function bizlight_skip_to_content() {
    ?>
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bizlight' ); ?></a>
<?php
}
endif;
add_action( 'bizlight_action_before_header', 'bizlight_skip_to_content', 10 );

if ( ! function_exists( 'bizlight_header' ) ) :
/**
 * Main header
 *
 * @since Bizlight 1.0.0
 *
 * @param null
 * @return null
 *
 */
function bizlight_header() {
    global $bizlight_customizer_all_values;
    ?>
     <!-- header and navigation option second - navigation right  -->
        <header id="masthead" class="site-header evision-nav-right navbar-fixed-top" role="banner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-3 col-md-4 rtl-fright">
                        <?php
                                $logoLink = get_option('logo_link') ;
								if (do_we_want_to_use_logo()) {
					  		    ?>
								   <div id="logo-in-the-title-container">
								   <a href="<?php echo get_home_url(); ?>"><img id="logo-in-the-title" src="http://broovera.com/loghi/LOGO_BIANCO-cornice-nera.svg"></a>
								   </div>
					  		    <?php
					            }
					            else
					            {?>
                                <h1 class="site-title">
                                     <a href="<?php echo get_home_url(); ?>">
                                           Broovera
                                      </a>
                                 </h1>
                                <?php } ?>
                    </div>
                    <div class="col-xs-12 col-sm-9 col-md-8 rtl-fleft">
                        <nav id="site-navigation" class="main-navigation" role="navigation">
                            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars"></i></button>
                            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

<?php
}
endif;
add_action( 'bizlight_action_header', 'bizlight_header', 10 );

if( ! function_exists( 'bizlight_main_slider_setion' ) ) :
/**
 * Breadcrumb
 *
 * @since Bizlight 1.0.0
 *
 * @param null
 * @return null
 *
 */
    function bizlight_main_slider_setion(){
        global $post, $wp_query;
        global $bizlight_customizer_all_values;

        // Slider status.
        $featured_slider_status = $bizlight_customizer_all_values['bizlight-fs-enable-on'];

        // Get Page ID outside Loop.
        $page_id = $wp_query->get_queried_object_id();

        // Front page displays in Reading Settings.
        $page_on_front  = absint( get_option( 'page_on_front' ) );
        $page_for_posts = absint( get_option( 'page_for_posts' ) );
        switch ( $featured_slider_status ) {
            case 'entire-site':
                do_action('bizlight_main_slider');
                break;

            case 'front-index-page':
                if (is_front_page()) {
                    do_action('bizlight_main_slider');
                }
                break;

            case 'home-page':
                if ( $page_on_front === $page_id && $page_on_front > 0 ) {
                    do_action('bizlight_main_slider');
                }
                break;

            default:
                break;
        }

    }
endif;
add_action( 'bizlight_action_on_header', 'bizlight_main_slider_setion', 10 );

/*breadcrumb*/
if( ! function_exists( 'bizlight_add_breadcrumb' ) ) :
/**
 * Breadcrumb
 *
 * @since Bizlight 1.0.0
 *
 * @param null
 * @return null
 *
 */
    function bizlight_add_breadcrumb(){
        // Bail if Home Page
        if ( is_front_page() || is_home() ) {
            return;
        }
        echo '<div id="breadcrumb" class="wrapper wrap-breadcrumb"><div class="container">';
         bizlight_simple_breadcrumb();
        echo '</div><!-- .container --></div><!-- #breadcrumb -->';
        return;
    }
endif;
add_action( 'bizlight_action_after_header', 'bizlight_add_breadcrumb', 10 );


