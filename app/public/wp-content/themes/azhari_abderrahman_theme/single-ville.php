<?php get_header(); ?>

<?php if (have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
            <h1><?php the_title() ?></h1>
            <h2><?php the_field("nom")?></h2><br/>
            <p>
            	<?php the_field("description")?>
            </p>
            <h3><?php the_field("code_postal")?></h3>
           
            <h3>Liste des logements de cette ville : </h3>
            <?php $ville_current = get_the_title(); ?>

            <div class="row">

			<?php $loop = new WP_Query( array( 'post_type' => 'logement') ); ?>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<?php $ville_logement = get_field("ville",get_the_ID());
						if(get_the_title( $ville_logement ) == $ville_current){

					?>

					<div class="column">
            <div class="center">
                <div class="property-card-nohover">
                    <a href="#">
                        <div class="property-image" >
                            
                                <img src=" <?php echo get_the_post_thumbnail_url(); ?>" />
                            
                        </div>
                    </a>
                    <div class="property-description">
                        <h5> <a href="<?php the_permalink() ?>"><?php the_title() ?></a> </h5>
                        
                    </div>
                </div>
            
            </div>
            </div>

				
					 <?php }?>     
				<?php endwhile; wp_reset_query(); ?>
</div>

        <?php endwhile ?>

<?php else: ?>
    <h1>Pas de villes</h1>
<?php endif; ?>

<?php get_footer(); ?>