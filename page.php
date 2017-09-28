<?php get_header(); ?>

<section id="text-case">
    <div class="row">
<div class="text-center">
  <div class="vertical-center">
  <h1><?php wp_title(''); ?></h1>
</div>
</div>
</div>
</section>

<div class="margin--top">
<div class="container">
<div class="row">

  <div class="col-sm-12 blog-main">

    <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>
    <div class="blog-post">

      <?php the_content(); ?>
    </div><!-- /.blog-post -->
    <?php endwhile; ?>
  <?php else : ?>
    <p><?php __('No Page Found'); ?></p>
  <?php endif; ?>

  </div><!-- /.blog-main -->
</div>
</div>
</div

<?php get_footer(); ?>
