<?php
/**
 * Template Name: Lifestyle Page Template
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
         if( is_active_sidebar( 'colormag_lifestyle_page_content_top_section' ) ) {
            if ( !dynamic_sidebar( 'colormag_lifestyle_page_content_top_section' ) ):
            endif;
         }
         if( is_active_sidebar( 'colormag_lifestyle_page_content_middle_left_section' ) || is_active_sidebar( 'colormag_lifestyle_page_content_middle_right_section' )) {
         ?>
            <div class="tg-one-half">
               <?php
               if ( !dynamic_sidebar( 'colormag_lifestyle_page_content_middle_left_section' ) ):
               endif;
               ?>
            </div>
            <div class="tg-one-half tg-one-half-last">
               <?php
               if ( !dynamic_sidebar( 'colormag_lifestyle_page_content_middle_right_section' ) ):
               endif;
               ?>
            </div>
         <div class="clearfix"></div>
         <?php
         }
         if( is_active_sidebar( 'colormag_lifestyle_page_content_bottom_section' ) ) {
            if ( !dynamic_sidebar( 'colormag_lifestyle_page_content_bottom_section' ) ):
            endif;
         }
         if( is_active_sidebar( 'colormag_lifestyle_page_content_bottom_left_section' ) || is_active_sidebar( 'colormag_lifestyle_page_content_bottom_right_section' )) {
         ?>
            <div class="tg-one-half">
               <?php
               if ( !dynamic_sidebar( 'colormag_lifestyle_page_content_bottom_left_section' ) ):
               endif;
               ?>
            </div>
            <div class="tg-one-half tg-one-half-last">
               <?php
               if ( !dynamic_sidebar( 'colormag_lifestyle_page_content_bottom_right_section' ) ):
               endif;
               ?>
            </div>
         <div class="clearfix"></div>
         <?php
        }
         if (get_theme_mod('colormag_hide_blog_front', 0) == 0): ?>

         <?php endif; ?>
         </div>
      </div>
      <?php colormag_sidebar_select(); ?>
   </div>

<?php get_footer(); ?>
