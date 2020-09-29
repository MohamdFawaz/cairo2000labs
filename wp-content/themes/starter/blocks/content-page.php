<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wpstarter
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="page-header">
    <?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
  </header> <!-- .page-header -->

  <div class="page-content">
    <?php
      the_content();

      wp_link_pages( array(
        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wpstarter' ),
        'after'  => '</div>',
      ) );
    ?>
  </div> <!-- .page-content -->

</article> <!-- #post-## -->
