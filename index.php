<?php get_header(); ?>

<div class="container-fluid section-one">
    <div class="container py-4">
        <?php dynamic_sidebar('Blog Main Section')?>
    </div>
</div>
<!-- 2st section -->
<div class="container my-4">
    <div class="row">

        <div class="col-12 col-md-3 my-2">
            <?php dynamic_sidebar('Blog Second Section 1')?>
        </div>

        <div class="col-12 col-md-3 my-2">
            <?php dynamic_sidebar('Blog Second Section 2')?>
        </div>

        <div class="col-12 col-md-3 my-2">
            <?php dynamic_sidebar('Blog Second Section 3')?>
        </div>

        <div class="col-12 col-md-3 my-2">
            <?php dynamic_sidebar('Blog Second Section 4')?>
        </div>

    </div>
    <hr>
</div>
<!-- 2st section -->

<!-- 3st section -->
<div class="container my-4">

    <div class="row">
        <div class="col-12 col-md-8 ">
            <h3 class="my-4">Latest Posts...</h3>
            <!-- blog loop -->
            <?php 
            if(have_posts()) :  
              while ( have_posts()) : the_post();?>
            <div class="row">
                <!-- blog loop -->
                <div class="col-12 col-sm-4">
                    <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url('thumbnail'); ?>"
                            class="card-img-top" alt=""></a>
                </div>

                <div class="col-12 col-sm-8">
                    <a href="<?php the_permalink(); ?>" class="link-success my-link">
                        <h4>
                            <?php the_title(); ?>
                        </h4>
                    </a>
                    <span class="text-primary">BY-
                        <?php echo get_the_author() ?>
                    </span>
                    <span>Dt -
                        <?php the_date(); ?>
                    </span>
                    <p class="my-2">
                        <?php the_excerpt(); ?>
                    </p>
                </div>
                <!-- blog loop -->
                <hr class="my-2">
            </div>
            <?php
                endwhile;

                else :

                endif;
                wp_reset_postdata();
                 ?>
            <!-- pagination -->
            <?php include get_template_directory().'/inc/pagination.php' ?>
            <!-- pagination -->
        </div>
        <!-- sidebar -->
        <div class="col-12 col-md-4 my-4">
            <?php dynamic_sidebar('main_sidebar')?>
        </div>
        <!-- sidebar -->
    </div>

</div>

<?php get_footer(); ?>