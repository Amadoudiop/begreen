<?php
	/** 
	 * Template Name: One page
	 */

if(is_admin()):
?>
	<a href="/wp-admin">Accéder à la page d'aministration</a>

<?php
endif;

?>

<!-- About Section -->
<?php get_template_part( 'template/onepage/about', 'page' ); ?>

<!-- Aviculture Grid Section -->
<?php get_template_part( 'template/onepage/aviculture', 'page' ); ?>

<!-- Agriculture Grid Section -->
<?php get_template_part( 'template/onepage/agriculture', 'page' ); ?>

<!-- Contact Section -->
<?php get_template_part( 'template/onepage/contact', 'page' ); ?>


