<?php
/**
 * Template Name: Tutti i servizi
 *
 */

get_header(); ?>
<div style="background-image: url('<?php the_field('immagine_di_sfondo');?>')" class="wrapper page-inner-title">
	<header class="entry-header">
	   <div class="titolo"> <h1><?php the_field('titolo'); ?></h1></div>
       <div class="sottotitolo"><?php the_field('sottotitolo'); ?></div>
	</header><!-- .entry-header -->
</div>
<div id="content" class="site-content">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<section class="container-fluid testo-sinistra bg">
			<div class="row">
			   <div class="col-sm-6 col-xs-12 content-wrap img_right">
			      <div class="content-box animated fadeInUp eds-on-scroll">
			        <?php the_field('testo_websites_services'); ?>
			      </div>
			   </div>
			   <div class="col-sm-6 col-xs-12 row-photo img_right" style="background-image: url('<?php the_field('immagine_websites_services');?>');"></div>
			</div>
        </section>
		<section class="container-fluid testo-destra bg">
		<div class="row">
		   <div class="col-sm-6 col-xs-12 content-wrap img_left">
		      <div class="content-box animated fadeInUp eds-on-scroll">
					<?php the_field('testo_pagine_network'); ?>
		      </div>
		   </div>
		   <div class="col-sm-6 col-xs-12 row-photo img_left" style="background-image: url('<?php the_field('immagine_pagine_network');?>');"></div>
		</div>
		</section>
		<section class="container-fluid testo-sinistra bg">
			<div class="row">
			   <div class="col-sm-6 col-xs-12 content-wrap img_right">
			      <div class="content-box animated fadeInUp eds-on-scroll">
			       <?php the_field('testo_marketing'); ?>
			      </div>
			   </div>
			   <div class="col-sm-6 col-xs-12 row-photo img_right" style="background-image: url('<?php the_field('immagine_marketing');?>');"></div>
			</div>
        </section>
		<section class="container-fluid testo-destra bg">
		<div class="row">
		   <div class="col-sm-6 col-xs-12 content-wrap img_left">
		      <div class="content-box animated fadeInUp eds-on-scroll">
				   <?php the_field('testo_servizi_aggiuntivi'); ?>
		      </div>
		   </div>
		   <div class="col-sm-6 col-xs-12 row-photo img_left" style="background-image: url('<?php the_field('immagine_servizi_aggiuntivi');?>');"></div>
		</div>
		</section>
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- #content -->
<?php get_footer(); ?>