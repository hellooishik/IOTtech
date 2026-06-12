<?php
/**
 * The template for displaying all single pages
 *
 * @package Aspiring_Minds
 */

get_header();
?>

<div class="section-container" style="padding-top: 8rem; min-height: 80vh;">
	<?php
	while ( have_posts() ) :
		the_post();
		?>
		<header class="page-header" style="margin-bottom: 3rem;">
			<?php the_title( '<h1 class="section-title">', '</h1>' ); ?>
		</header>
		
		<div class="page-content">
			<?php the_content(); ?>
		</div>
		<?php
	endwhile;
	?>
</div>

<?php
get_footer();
