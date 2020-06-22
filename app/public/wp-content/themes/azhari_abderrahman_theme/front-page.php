<?php get_header(); ?>

	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
    	<h1><?php the_title(); ?></h1>

    	<a href="http://abderrahmanazhariwp.local/logement"><button >Logements</button></a>
    	<a href="http://abderrahmanazhariwp.local/ville"><button >Villes</button></a>
    
    	<?php the_content(); ?>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>