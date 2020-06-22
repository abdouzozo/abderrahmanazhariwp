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

			<?php $loop = new WP_Query( array( 'post_type' => 'logement') ); ?>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<?php $ville_logement = get_field("ville",get_the_ID());
						if(get_the_title( $ville_logement ) == $ville_current){

					?>
				<a href="<?php the_permalink() ?>">
						<img src=" <?php echo get_the_post_thumbnail_url(); ?>" />
					</a>
					
						<h1>
							<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
						</h1>
					 <?php }?>     
				<?php endwhile; wp_reset_query(); ?>


        <?php endwhile ?>

<?php else: ?>
    <h1>Pas de villes</h1>
<?php endif; ?>

<?php get_footer(); ?>