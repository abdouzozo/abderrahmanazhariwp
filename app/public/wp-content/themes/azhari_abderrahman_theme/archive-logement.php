<?php get_header() ?>
<h1 > Liste des logements </h1>
<?php $monPost = new WP_Query( array( 'post_type' => 'logement', 'posts_per_page' => '6' ) ); ?>
<?php if (have_posts()) : ?>
    <div >
        <?php while ($monPost->have_posts()) : $monPost->the_post(); ?>
             
                <?php the_post_thumbnail('medium') ?>
               
                <h2 ><?php the_field("nom") ?></h2>
                        <h3>
                           Prix: <?php the_field("prix") ?>
                        </h3>
                        <a href="<?php the_permalink() ?>"> Details</a>
             
<?php endwhile; wp_reset_query(); ?>

    </div>

    
<?php else : ?>
    <h1>Aucun logement trouvé</h1>
<?php endif; ?>

<?php get_footer() ?>