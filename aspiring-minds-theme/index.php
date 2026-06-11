<?php
/**
 * The main template file
 *
 * @package Aspiring_Minds
 */

get_header();
?>

<section class="hero-section">
	<div class="hero-content">
		<h1 class="hero-title">Welcome to <span class="gradient-text">Aspiring Minds</span></h1>
		<p class="hero-subtitle">Empowering the Future with Advanced Technology Training</p>
	</div>
</section>

<section class="teaching-areas">
	<div class="section-container">
		<h2 class="section-title">Areas of Expertise</h2>
		<div class="grid-container">
			
			<div class="grid-item card glassmorphism" style="background-image: linear-gradient(rgba(15, 20, 35, 0.6), rgba(15, 20, 35, 0.8)), url('<?php echo get_template_directory_uri(); ?>/assets/images/ai_bg_1781167250784.png'); background-size: cover; background-position: center;">
				<h3>Artificial Intelligence</h3>
			</div>

			<div class="grid-item card glassmorphism" style="background-image: linear-gradient(rgba(15, 20, 35, 0.6), rgba(15, 20, 35, 0.8)), url('<?php echo get_template_directory_uri(); ?>/assets/images/iot_bg_1781167264004.png'); background-size: cover; background-position: center;">
				<h3>IOT<br><span>Internet Of Things</span></h3>
			</div>

			<div class="grid-item card glassmorphism" style="background-image: linear-gradient(rgba(15, 20, 35, 0.6), rgba(15, 20, 35, 0.8)), url('<?php echo get_template_directory_uri(); ?>/assets/images/robotics_bg_1781167275062.png'); background-size: cover; background-position: center;">
				<h3>Robotics<br><span>& Automation</span></h3>
			</div>

			<div class="grid-item card glassmorphism" style="background-image: linear-gradient(rgba(15, 20, 35, 0.6), rgba(15, 20, 35, 0.8)), url('<?php echo get_template_directory_uri(); ?>/assets/images/embedded_bg_1781167287921.png'); background-size: cover; background-position: center;">
				<h3>Embedded Systems<br><span>The Perfect Combination</span></h3>
			</div>

			<div class="grid-item card glassmorphism" style="background-image: linear-gradient(rgba(15, 20, 35, 0.6), rgba(15, 20, 35, 0.8)), url('<?php echo get_template_directory_uri(); ?>/assets/images/cv_bg_1781167299540.png'); background-size: cover; background-position: center;">
				<h3>Computer Vision</h3>
			</div>

			<div class="grid-item card glassmorphism" style="background-image: linear-gradient(rgba(15, 20, 35, 0.6), rgba(15, 20, 35, 0.8)), url('<?php echo get_template_directory_uri(); ?>/assets/images/pi_bg_1781167323166.png'); background-size: cover; background-position: center;">
				<h3>Raspberry Pi</h3>
			</div>

			<div class="grid-item card glassmorphism" style="background-image: linear-gradient(rgba(15, 20, 35, 0.6), rgba(15, 20, 35, 0.8)), url('<?php echo get_template_directory_uri(); ?>/assets/images/edge_bg_1781167335430.png'); background-size: cover; background-position: center;">
				<h3>Edge AI</h3>
			</div>

			<div class="grid-item card glassmorphism" style="background-image: linear-gradient(rgba(15, 20, 35, 0.6), rgba(15, 20, 35, 0.8)), url('<?php echo get_template_directory_uri(); ?>/assets/images/smart_mfg_bg_1781167349085.png'); background-size: cover; background-position: center;">
				<h3>Smart Manufacturing</h3>
			</div>

			<div class="grid-item card glassmorphism" style="background-image: linear-gradient(rgba(15, 20, 35, 0.6), rgba(15, 20, 35, 0.8)), url('<?php echo get_template_directory_uri(); ?>/assets/images/industry_bg_1781167361220.png'); background-size: cover; background-position: center;">
				<h3>Industry 4.0</h3>
			</div>

		</div>
	</div>
</section>

<section class="benefits-section">
	<div class="section-container">
		<h2 class="section-title italic-title">WHAT YOU COULD GAIN</h2>
		<div class="benefits-grid">
			
			<div class="benefit-item pill">
				<span class="bullet">•</span>
				<p>Free Applied AI & IoT Training</p>
			</div>

			<div class="benefit-item pill">
				<span class="bullet">•</span>
				<p>Video Portfolio for CV & Linkedin</p>
			</div>

			<div class="benefit-item pill">
				<span class="bullet">•</span>
				<p>Industry-Sponsored Projects & Internship Opportunities</p>
			</div>

			<div class="benefit-item pill">
				<span class="bullet">•</span>
				<p>Professional Certification</p>
			</div>

		</div>
	</div>
</section>

<?php
get_footer();
