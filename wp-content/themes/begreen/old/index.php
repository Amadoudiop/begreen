<?php
	get_header();
	if ( have_posts() ) :

		/* Start the Loop */
		while ( have_posts() ) : the_post();
				
			//the_content();

			/*
			 * Include the Post-Format-specific template for the content.
			 * If you want to override this in a child theme, then include a file
			 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
			 */
			//dd(get_post_format());
			get_template_part( 'template/begreen', get_post_format() );

		endwhile;


	else :

		get_template_part( 'template-parts/', 'none' );

	endif;

	get_footer();
?>