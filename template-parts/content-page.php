<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Duck Diver Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if (!is_front_page()) : ?>
        <header class="entry-header">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </header><!-- .entry-header -->
    <?php endif; ?>
    <div class="entry-content">
        <?php the_content(); ?>
    </div><!-- .entry-content -->
</article><!-- #post-## -->
