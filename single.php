<?php get_header(); ?> <!-- These code into header.php -->

<div class="row">

    <div class="col-sm-8 blog-main">

        <?php if(have_posts()): ?>
            <?php while (have_posts()) : the_post();?>

                <!-- These code into conten.php -->
                <?php get_template_part('content'); ?>

            <?php endwhile; ?>
        <?php else: ?>
            <p><?php __('No Posts Found'); ?></p>
        <?php endif; ?>





    </div><!-- /.blog-main -->

    <?php get_footer() ?>
