<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

?>

<div class="post-archive">
  <article>
  	<a href="<?php the_permalink(); ?>" class="post-archive__link">
      <div class="post-archive__thumb"><img src="http://placehold.jp/120x90.png" alt=""></div>
      <div class="post-archive__meta">
        <time><?php the_time( get_option( 'date_format' ) ); ?></time>
      </div>
      <h3 class="post-archive__title"><?php the_title(); ?></h3>
    </a>
  </article>
</div>
