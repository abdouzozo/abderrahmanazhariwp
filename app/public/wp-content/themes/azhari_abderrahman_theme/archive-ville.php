
<?php get_header() ?>
<h1 > Liste des villes </h1>
<?php $monPost = new WP_Query( array( 'post_type' => 'ville', 'posts_per_page' => '6' ) ); ?>
<?php if (have_posts()) : ?>
    <div class="row">
        <?php while ($monPost->have_posts()) : $monPost->the_post(); ?>
              
                <div class="column">
            <div class="center">
                <div class="property-card-nohover">
                    
                    <div class="property-description">
                        <h5> <?php the_title() ?> </h5>
                        <p>Code postal: <?php the_field("code_postal") ?>?>. 
                            
                            <a href="<?php the_permalink() ?>" > Details de la ville </a>
                        </p>
                    </div>
                </div>
            
            </div>
            </div>
               
        
               
<?php endwhile; wp_reset_query(); ?>

    </div>

    
<?php else : ?>
    <h1>Aucune ville trouvée</h1>
<?php endif; ?>

<?php get_footer() ?>