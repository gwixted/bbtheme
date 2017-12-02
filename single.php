<?php get_header(); ?>
<section id="content" role="main" class="layout-sidebar-right">
  <div class="outer-wrap">
    <div class="inner-wrap">
      <div class="content-main">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'entry' ); ?>
        <?php endwhile; endif; ?>
        <div class="comments">
          <?php if ( ! post_password_required() ) comments_template( '', true ); ?>
        </div>
      </div>
      <div class="right"><?php get_sidebar(); ?></div>
    </div>
  </div>
</section>
<?php get_footer(); ?>