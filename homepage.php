<?php
		/**
		 * Template Name: Homepage
		 *
		 * @package my-portfolio
		 * 
		 */
?>
<?php get_header(); ?>

<h1 id=about-heading></h1>

<section class="hero-section">
	<h1>Welcome to My Portfolio</h1>
	<p> Hello everyone!<br>This is Ruku,<br>a WordPress developer.</p>
	<hr>
	<div class="hero-image">
		<img src="http://myportfolio.local/wp-content/uploads/2022/06/single-3.jpeg" alt="hero image">
		<p>Be Such a <br>Beautiful Soul <br>That People <br>Crave Your <br>Vibes</p>
	</div>
</section>






<?php get_template_part('template-parts/special-gratitude') ?>
<?php get_template_part('template-parts/backto-top') ?>
<?php get_footer(); ?>