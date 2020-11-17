<div class="side">
    <!-- Bouton RSS -->
    <a href="<?php bloginfo('rss2_url'); ?>">S'abonner au
    flux RSS</a>
    <!-- Formulaire de recherche -->
    <?php get_search_form(); ?>
    <!-- Archives -->
    <ul class="list">
        <?php wp_get_archives('type=monthly'); ?>
    </ul>
    <div class="derniers">
    <h4>Les derniers articles</h4>
    <?php wp_reset_postdata();
    query_posts('posts_per_page=3');?>    
   
    <ul class="last">
        <?php while(have_posts()):the_post(); ?>
            <li><a href=" <?php the_permalink(); ?>" > <?php the_title(); ?></a></li>
        <?php endwhile;?>
        </ul>
        </div>

</div>