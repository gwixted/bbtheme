<?php get_header(); ?>
<section id="content" role="main" class="layout-sidebar-right">
  <div class="outer-wrap">
    <div class="inner-wrap">
      <div class="content-main">
        <div class="inside"><?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'entry' ); ?>
          <?php comments_template(); ?>
          <?php endwhile; endif; ?></div>
      </div>
      <div class="right">
        <div class="inside">
          <?php get_template_part( 'nav', 'below' ); ?>
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>