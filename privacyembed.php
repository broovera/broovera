<?php
/**
Template Name: Pagina Privacy
 */
get_header(); ?>
<style>
.full-size {
    height: 100vh !important;
}
.page-template-paginavuota{
   padding:0px !important;
}
    
.df-container {
    min-height: 100vh !important;
}
#primary {
    width: 100% !important;
}

@media screen and (max-width: 991px){
    .dividest{
        height:20px;
    }
}
</style>
<div class="dividest"></div>
<?php echo do_shortcode('[pdfviewer]https://broovera.com/wp-content/uploads/2018/12/DPIA.pdf[/pdfviewer]'); ?>
<!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>