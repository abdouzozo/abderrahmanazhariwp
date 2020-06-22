<?php get_header(); ?>

<?php if (have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
            <h1><?php the_field("nom") ?></h1>
            <?php the_post_thumbnail('medium') ?>
            <p>
            	<?php the_field("description")?>
            </p>
            <h3><?php the_field("type")?></h3>
            <p>
            <?php the_field("surface")?>
            </p>
            <p> frais d'agence :
            <?php the_field("frais_agence")?> euros
            </p>
            <p>
            <?php the_field("prix")?> euros
            </p>
            <p>
                mise en vente en : 
            <?php the_field("date_mise_vente")?>
            </p>
            <p>
                exposition : 
            <?php the_field("exposition")?>
            </p>
            

            <?php the_content() ?>

        <?php endwhile ?>

<?php else: ?>
    <h1>Pas de logements</h1>
<?php endif; ?>

<?php get_footer(); ?>