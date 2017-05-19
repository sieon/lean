<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="container mt-3" id="site-content">
  <div class="row">
    <div class="col-lg-8">
      <div class="jumbotron page-header">
        <h1 class="page-title"><?php the_title(); ?></h1>
      </div>
      <div class="entry-content">

        <?php the_content(); ?>
      </div>
        <?php
          // If comments are open or we have at least one comment, load up the comment template
        //  if ( comments_open() || get_comments_number() ) :
            comments_template();
        //  endif;
        ?>
      <?php endwhile;else: ?>
        <div class="page-header">
            <h1>Oh no!</h1>
        </div>

        <p>No content is appearing for this page!</p>
        <?php endif; ?>
    </div>
    <?php get_sidebar();?>
  </div>
</div><!--./container -->

<?php get_footer(); ?>
