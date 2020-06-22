<?php 
	$footer = [
		'theme_location' => 'footer_menu',
		'container' => 'nav',
		'container_class' => 'footer_nav'
	];
	wp_nav_menu( $footer );
	?>
	<?php wp_footer(); ?>
</body>
</html>