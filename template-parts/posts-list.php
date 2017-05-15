<?php
/**
 * 文章列表
 * @package lean
 */
?>

<li id="post-<?php the_ID(); ?>" <?php post_class('entry media'); ?>>
	<?php if(has_post_thumbnail()) : ?>
	<div class="img-box d-flex mr-3">
		<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
	    <?php
	      // Post thumbnail.
	      the_post_thumbnail('medium', ['class' => 'rounded']);
	    ?>
	  </a>
	</div>
	<?php endif; ?>

	<div class="media-body">
		<?php the_title( sprintf( '<h3 class="entry-title mt-0 mb-1"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

		<div class="entry-meta mb-2">
			<small class="text-weakest">
				<?php lean_entry_meta(); ?>
			</small>
		</div><!-- .entry-footer -->

		<div class="entry-excerpt">
			<?php the_excerpt(); ?>
		</div>
	</div>
</li><!-- #post-## -->
