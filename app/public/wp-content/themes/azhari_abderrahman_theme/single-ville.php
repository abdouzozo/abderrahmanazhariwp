<?php get_header(); ?>

<?php if (have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
            <h1><?php the_title() ?></h1>
            <h2><?php the_field("nom")?></h2><br/>
            <p>
            	<?php the_field("description")?>
            </p>
            <h3><?php the_field("code_postal")?></h3>
           
            <?php the_content() ?>

        <?php endwhile ?>

<?php else: ?>
    <h1>Pas de villes</h1>
<?php endif; ?>

<?php get_footer(); ?>