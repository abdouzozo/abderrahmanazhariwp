<?php get_header(); ?>

<?php if (have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>

            <div class="center">
                <div class="property-card">
                    <a href="#">
                        
                        <div class="property-image">
                            
                                <?php the_post_thumbnail('medium') ?>
                            
                        </div>
                    </a>
                    <div class="property-description">
                        <h5> <?php the_field("nom") ?> </h5>
                        <p>Un bien de type : <?php the_field("type")?>.<br>
                            Surface : <?php the_field("surface")?>
                            m².<br>
                            Exposition : <?php the_field("exposition")?><br>
                            Frais d'agence : <?php the_field("frais_agence")?> euros.<br>
                            Prix : <?php the_field("prix")?> euros.<br>
                            Mise en vente en : <?php the_field("date")?>.<br>
                        </p>
                    </div>
                </div>
            </div>

            

            <?php the_content() ?>

        <?php endwhile ?>

<?php else: ?>
    <h1>Pas de logements</h1>
<?php endif; ?>

<?php get_footer(); ?>