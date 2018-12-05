<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package BirdCologne
 */
?>
    <!DOCTYPE html>
    <html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
        <?php wp_head();?>
    </head>

    <body <?php body_class(); ?>>