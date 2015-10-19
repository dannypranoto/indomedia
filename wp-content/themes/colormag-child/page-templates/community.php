<?php
/**
 * Template Name: Community Page Template
 *
 * Displays the Category Page Template of the theme.
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
         if( is_active_sidebar( 'colormag_community_page_content_top_section' ) ) {
            if ( !dynamic_sidebar( 'colormag_community_page_content_top_section' ) ):
            endif;
         }
         ?>
         </div>
      </div>
      <?php colormag_sidebar_select(); ?>
   </div>

<?php get_footer(); ?>
