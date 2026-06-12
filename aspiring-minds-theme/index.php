<?php
/**
 * The main template file
 *
 * @package Aspiring_Minds
 */

get_header();
?>

<main id="primary" class="site-main">
	<div class="section-container" style="padding-top: 2rem;">
		<?php
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
				the_content();
			endwhile;
		endif;
		?>
	</div>
</main>



<?php
get_footer();
