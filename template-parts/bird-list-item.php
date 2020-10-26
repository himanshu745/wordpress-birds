<div class="bird-list-item">
    <h2 class="bird-list-item__header"><?php the_title() ?></h2>

    <?php the_post_thumbnail([200,200], array("class" => "bird-list-item__thumb")); ?>

    <p class="bird-list-item__excerpt"><?php the_excerpt(); ?></p>
</div>