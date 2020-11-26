<?php get_header(); ?>
<?php if (have_posts()) : ?>
   <?php while (have_posts()) : the_post(); ?>
       <article class="recette">
           <?php the_post_thumbnail( 'large' ); ?>
           <h1 class="title">
           <?php the_title(); ?>
           </h1>
           <div class="content">
               <?php the_content(); ?>

               <?php // Affichage des aliments en lien avec la recette
                $featured_posts = get_field('ingredient');
                if( $featured_posts ): ?>
                    <ul>
                    <?php foreach( $featured_posts as $post ): 

                        // Setup this post for WP functions (variable must be named $post).
                        setup_postdata($post); ?>
                        <li>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <span>Glucide: <?php the_field( 'sucre' ); ?></span>
                            <span>Graisse: <?php the_field( 'graisse' ); ?></span>
                            <span>Protéine: <?php the_field( 'proteine' ); ?></span>
                        </li>
                    <?php endforeach; ?>
                    </ul>
                    <?php 
                    // Reset the global post object so that the rest of the page works correctly.
                    wp_reset_postdata(); ?>
                <?php endif; ?>

           </div>
       </article>
   <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
