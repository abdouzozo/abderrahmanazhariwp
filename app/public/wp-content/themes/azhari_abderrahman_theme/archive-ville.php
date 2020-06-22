
<?php get_header() ?>
<h1 > Liste des villes </h1>
<?php $monPost = new WP_Query( array( 'post_type' => 'ville', 'posts_per_page' => '6' ) ); ?>
<?php if (have_posts()) : ?>
    <div class="row">
        <?php while ($monPost->have_posts()) : $monPost->the_post(); ?>
              
                
               
                <h2><?php the_title() ?></h2>
                        <h3 >
                           Code postal: <?php the_field("code_postal") ?>
                        </h3>
                        <a href="<?php the_permalink() ?>" > Details de la ville </a>
               
<?php endwhile; wp_reset_query(); ?>

    </div>

    
<?php else : ?>
    <h1>Aucune ville trouvée</h1>
<?php endif; ?>

<?php get_footer() ?>