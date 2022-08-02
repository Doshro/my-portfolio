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
	<h1><?php the_field('main_heading');?></h1>
	<p><?php the_field('sub_heading_first_line');?> <br> <?php the_field('sub_heading_second_line');?><br> <?php the_field('sub_heading_line_three');?></p>
	<hr>
	<div class="hero-image">
		<img src="http://myportfolio.local/wp-content/uploads/2022/06/single-3.jpeg" alt="hero image">
		<div class="home-quote">
		<p> <?php the_field('home_page_quote_line_one');?> <br> <?php the_field('home_page_quote_line_two');?> <br> <?php the_field('home_page_quote_line_three');?> <br><?php the_field('home_page_quote_line_four');?><br><?php the_field('home_page_quote_line_five');?></p>
		</div>
	</div>
</section>


<!-- That People -->




<?php get_template_part('template-parts/special-gratitude') ?>
<?php get_template_part('template-parts/backto-top') ?>
<?php get_footer(); ?>