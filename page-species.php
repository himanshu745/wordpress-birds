<?php
get_header();

$args = array(
    'post_type' => 'birds_species',
    'posts_per_page' => 10
);

$query = new WP_Query($args); ?>
<div class="bird-list">
    <?php 
    if (have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            get_template_part('template-parts/bird-list-item');
        endwhile;

    else :
        _e('Sorry, no posts matched your criteria.', 'textdomain');
    endif; ?>
</div>
<?php get_footer();
