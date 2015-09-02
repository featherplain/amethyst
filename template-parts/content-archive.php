<?php
/**
 * Template part for displaying post archive.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package othello
 */

?>

<div class="postArchive">
  <article>
  	<a href="<?php the_permalink(); ?>" class="postArchive__link">
      <div class="postArchive__thumb"><img src="http://placehold.jp/120x90.png" alt=""></div>
      <div class="postArchive__meta">
        <time><?php the_time( get_option( 'date_format' ) ); ?></time>
      </div>
      <h3 class="postArchive__title"><?php the_title(); ?></h3>
    </a>
  </article>
</div><!-- / .postArchive -->
