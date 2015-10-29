<?php
/**
 * The template for displaying archive pages for the Team Member custom post type.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package underscores
 */

// Add no-sidebar to body class when using this template
// Is this the best way to acheive this?
function add_body_class( $classes ) {
   $classes[] = 'no-sidebar';
   return $classes;
}
add_filter( 'body_class', 'add_body_class' );

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    <?php if ( have_posts() ) : ?>

      <header class="page-header">
        <?php
          post_type_archive_title( '<h1 class="page-title">', '</h1>' );
        ?>
      </header><!-- .page-header -->

      <?php /* Start the Loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?>

        <?php
          get_template_part( 'rula-partials/rula-team-member', get_post_format() ); 
        ?>

      <?php endwhile; ?>

    <?php else : ?>

      <?php get_template_part( 'template-parts/content', 'none' ); ?>

    <?php endif; ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>