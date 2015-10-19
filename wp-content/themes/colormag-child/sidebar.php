<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package ThemeGrill
 * @subpackage ColorMag
 * @since ColorMag 1.0
 */
?>

<div id="secondary">
	<?php do_action( 'colormag_before_sidebar' ); ?>
		<?php
			if( is_page_template( 'page-templates/contact.php' ) ) {
				$sidebar = 'colormag_contact_page_sidebar';
			}
			else {
				$sidebar = 'colormag_right_sidebar';
			}
		?>

		<?php if ( ! dynamic_sidebar( $sidebar ) ) :
			if ( $sidebar == 'colormag_contact_page_sidebar' ) {
            $sidebar_display = __('Contact Page', 'colormag');
         } else {
            $sidebar_display = __('Right', 'colormag');
         }
         the_widget( 'WP_Widget_Text',
            array(
               'title'  => __( 'Example Widget', 'colormag' ),
               'text'   => sprintf( __( 'This is an example widget to show how the %s Sidebar looks by default. You can add custom widgets from the %swidgets screen%s in the admin. If custom widgets is added than this will be replaced by those widgets.', 'colormag' ), $sidebar_display, current_user_can( 'edit_theme_options' ) ? '<a href="' . admin_url( 'widgets.php' ) . '">' : '', current_user_can( 'edit_theme_options' ) ? '</a>' : '' ),
               'filter' => true,
            ),
            array(
               'before_widget' => '<aside class="widget widget_text clearfix">',
               'after_widget'  => '</aside>',
               'before_title'  => '<h3 class="widget-title"><span>',
               'after_title'   => '</span></h3>'
            )
         );

      endif; ?>

      <h3 class="widget-title"><span>PR News Wire</span></h3>
      <div class="pr-newswire-content">
        <!-- PRNewswire Headlines Widget Code Starts Here -->
        <script type="text/javascript" src="http://widget.prnewswire.com/widget/widget.js?&preset=2&expandheight=1&width=280&height=600&showlogos=1&categories=TEA,Entertainment,Food-and-Drink,Travel-and-Leisure,Technology-and_Gadgets,DATING,DOGS,GRANDPARENTS,HORSES,PREGNANCY-CHILDBIRTH-BABIES,TEENAGERS-HIGH-SCHOOL&industries=ADV,ART,BKS,ENT,FLM,MAG,MEN,MLM,MUS,PUB,RAD,SMD,TVN,AGR,ALC,BEV,FOD,NAB,ORF,RST,SUP,TOB,BIM,BIO,DEN,HEA,HIN,IDC,MTC,MEQ,MNH,PHA,SPM,SPT,SSE,SPE,BRD,HRD,NET,STW,CPR,CSE,ECM,ECP,EDA,GAM,EPM,HTS,ITE,NAN,PER,RFI,SWB,SEM,TLS,TCS,TEQ,VIP,WEB,WIC&regions=Indonesia&subjects=SVY,TRI&andorquestion=AND&numresults=5&numwords=10&hlineorbrief=both&bold=1&bkgcolor=FFFFFF&rowcolor1=FFFFFF&rowcolor2=FFFFFF&bordercolor=CCCCCC&link=289DCC&visitedcolor=FFFFFF&textcolor=444444&datecolor=888888&fontface=Trebuchet MS&fontsize=10&borderstyle=dotted&bordersize=1&p=prnewswire.html&"></script>
        <!-- PRNewswire Headlines Widget Code Ends Here -->
      </div>


	<?php do_action( 'colormag_after_sidebar' ); ?>
</div>
