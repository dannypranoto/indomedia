<?php
/**
 * Template Name: music Page Template
 *
 * Displays the music Page Template of the theme.
 *
 * @package ThemeGrill
 * @subpackage ColorMag
 * @since ColorMag 1.0
 */
?>

<?php get_header(); ?>

   <div class="main-content-section clearfix">
      <div id="primary">
         <div id="content" class="clearfix">

         <?php
         if( is_active_sidebar( 'colormag_music_page_content_top_section' ) ) {
            if ( !dynamic_sidebar( 'colormag_music_page_content_top_section' ) ):
            endif;
         }
         ?>
         <div class="clearfix"></div>

         <?php
         if (get_theme_mod('colormag_hide_blog_front', 0) == 0): ?>

         <?php endif; ?>
         </div>
      </div>
      <?php colormag_sidebar_select(); ?>
   </div>

<?php get_footer(); ?>
