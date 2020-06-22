<?php get_header() ?>
<h1 > Liste des logements </h1>
<?php $monPost = new WP_Query( array( 'post_type' => 'logement', 'posts_per_page' => '6' ) ); ?>
<?php if (have_posts()) : ?>
    <div class="row">
        <?php while ($monPost->have_posts()) : $monPost->the_post(); ?>

            
            <div class="column">
            <div class="center">
                <div class="property-card-nohover">
                    <a href="#">
                        <div class="property-image" >
                            
                                <?php the_post_thumbnail('medium') ?>
                            
                        </div>
                    </a>
                    <div class="property-description">
                        <h5> <?php the_field("nom") ?> </h5>
                        <p>Un bien de type : <?php the_field("type")?>. 
                            Prix : <?php the_field("prix")?> euros.<br>
                            <a href="<?php the_permalink() ?>"> Details</a>
                        </p>
                    </div>
                </div>
            
            </div>
            </div>

             
            
               
              
             
<?php endwhile; wp_reset_query(); ?>

    </div>

    
<?php else : ?>
    <h1>Aucun logement trouvé</h1>
<?php endif; ?>

<?php get_footer() ?>