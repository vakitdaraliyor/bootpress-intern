<?php get_header(); ?>

  <div class="row">

    <div class="col-sm-8 blog-main">

        <?php if(have_posts()): ?>
        <?php while (have_posts()) : the_post();?>

              <!-- These code into content.php -->
              <?php get_template_part('content'); ?>

        <?php endwhile; ?>

        <!-- Next and Previous Page  -->
        <?php echo paginate_links(); ?>


        <?php else: ?>
                <p><?php __('No Posts Found'); ?></p>
        <?php endif; ?>

    </div><!-- /.blog-main -->
<?php get_footer(); ?>
