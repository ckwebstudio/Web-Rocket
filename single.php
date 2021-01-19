<?php get_header(); ?>

<div class="container my-4">
  <div class="col-12 col-sm-8 my-4">
    <div class="row">
      <div class="col">
        <h2 class="d-flex justify-content-start">Blog Post</h2>
      </div>
    </div>
  </div>
</div>
<!-- post content -->
<div class="container">
  <div class="row">
    <div class="col-12 col-sm-8 my-4">
      <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid">
      <div class="container-fluid my-4">
        <h1>
          <?php echo get_the_title($post_id); ?>
        </h1>
        <?php echo get_the_author() ?>
        <hr>
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <div <?php post_class(); ?>>
          <?php the_content(); ?>
          <?php edit_post_link(); ?>
          <?php wp_link_pages(); ?>
        </div>
        <?php endwhile; ?>
        <?php else : ?>
        <?php endif; ?>

        <!-- post end-->
        <nav aria-label="Page navigation">
          <ul class="pagination justify-content-center">

            <li class="page-item">
              <?php previous_post_link(); ?>

            </li>

            <li class="page-item">
              <?php next_post_link(); ?>

            </li>
            
          </ul>
        </nav>
        <!-- pagination -->
        <?php 
          // If comments are open or there is at least one comment, load up the comment template.
          if ( comments_open() || get_comments_number() ) {
              comments_template();
            }
          ?>
        <!-- comments -->
      </div>
    </div>
    <!-- sidebar -->
    <div class="col-12 col-sm-4">
      <?php dynamic_sidebar('main_sidebar')?>
    </div>
  </div>
</div>
<!-- side bar -->

<?php get_footer(); ?>