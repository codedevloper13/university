<?php

get_header(); ?>

    <div class="page-banner">
        <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/inc/images/ocean.jpg') ?>);"></div>
        <div class="page-banner__content container container--narrow">
            <h1 class="page-banner__title">Welcome to our blog!</h1>
            <div class="page-banner__intro">
                <p>Keep up with our latest news.</p>
            </div>
        </div>
    </div>

    <div class="container container--narrow page-section">
        <?php
        while(have_posts()) {
            the_post(); ?>
            <div class="post-item">
                <div class="hover6">
                    <div class="hover07 column ">
                        <figure><?php the_post_thumbnail('medium-large') ?></figure>
                    </div>
                </div>
                <h4 class="headline headline--medium headline--post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <div class="metabox">
                    <p>Posted by <?php the_author_posts_link(); ?> on <?php the_time('n.j.y'); ?> in <?php echo get_the_category_list(', '); ?></p>
                </div>

                <div class="generic-content">
                    <p><?php  echo wp_trim_words(get_the_content(),55); ?></p>
                    <p><a class="btn btn--blue" href="<?php the_permalink(); ?>">Continue reading &raquo;</a></p>
                </div>

            </div>
        <?php }
        ?>
    </div>

<?php get_footer();

?>