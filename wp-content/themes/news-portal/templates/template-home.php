<?php
/**
 * Template Name: Home Page
 *
 * This is the template that displays all widgets included in homepage widget area.
 *
 * @package Mystery Themes
 * @subpackage News Portal
 * @since 1.0.0
 */

get_header();

/*-----------------------------------------------------------------------------------------------------------------------*/
/**
 * Home Top Section Area
 *
 * @since 1.0.0
 */
	if ( is_active_sidebar( 'news_portal_home_top_section_area' ) ) {
?>
		<div class="np-home-top-section np-clearfix" data-aos="zoom-out">
			<?php dynamic_sidebar( 'news_portal_home_top_section_area' ); ?>
		</div><!-- .np-home-top-section -->
    <div data-aos="fade-right" class=""> <!--absolute-centered-->
      <p class="relative-left-homepage-header">
        Professor M.S.Elshorbagy
        <br>
        <small>Professor of clinical pathology</small>
        <br>
        <small>Al-Azhar university hospital</small>
        <br>
        <small>Head of immunalogy department</small>
      </p>
      <p class="relative-right-homepage-header" dir="rtl">
        معامل أ.د/ محمد سعيد الشوربجي
        <br>
        <small>استاذ التحاليل الطبية و امراض الدم</small>
        <br>
        <small>بمستشفيات جامعة الازهر</small>
        <br>
        <small>و رئيس وحدة المناعة بمستشفيات جامعة الازهر</small>
      </p>
    </div>

    <?php
	}

/*-----------------------------------------------------------------------------------------------------------------------*/
/**
 * Home Middle Section Area
 *
 * @since 1.0.0
 */
	if ( is_active_sidebar( 'news_portal_home_middle_section_area' ) ) {
?>
		<div class="np-home-middle-section np-clearfix">
			<div class="middle-primary">
				<?php dynamic_sidebar( 'news_portal_home_middle_section_area' ); ?>
			</div><!-- .middle-primary -->
			<div class="middle-aside">
				<?php dynamic_sidebar( 'news_portal_home_middle_aside_area' ); ?>
			</div><!-- .middle-aside -->
		</div><!-- .np-home-middle-section -->
<?php
	}

/*-----------------------------------------------------------------------------------------------------------------------*/
/**
 * Home Bottom Section Area
 *
 * @since 1.0.0
 */
	if ( is_active_sidebar( 'news_portal_home_bottom_section_area' ) ) {
?>
		<div class="np-home-bottom-section" data-aos="fade-up">
			<?php dynamic_sidebar( 'news_portal_home_bottom_section_area' ); ?>
		</div><!-- .np-home-bottom-section -->
<?php
	}

get_footer();
