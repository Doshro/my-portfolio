<?php
		/**
		 * Template Name: Contact
		 *
		 * @package my-portfolio
		 * 
		 */
?>
<?php get_header(); ?>
<h1 id=about-heading></h1>

<div class="form-container">
    <h1>Contact Me:</h1>

<?php echo apply_shortcodes( '[contact-form-7 id="101" title="Contact form 1"]' ); ?>



</div>

<!-- <section class="main-section">
	<h1 class="heading">Want to know more??</h1>
    
    <div class="contact-form">
        <h1 class="contact-title">Contact Me! </h1>

        
        <form action="#">

            <form class="contact-form box-shadow "action="#">
                
            <label for="first-name">First Name:</label><br>
            <input type="text" id="first-name" placeholder="First Name.."><br>
            <label for="last-name">Last Name:</label><br>
            <input type="text" id="last-name" placeholder="Last Name.."><br>
            <label for="city">City</label><br>
            <input type="text" id="city" placeholder="City"><br>
            <label for="State">State</label><br>
            <input type="text" id="state" placeholder="State"><br>
            <label for="zip-code">Zip Code</label><br>
            <input type="number" id="zip" placeholder="Zip Code"><br>
            <label for="phone">Phone:</label><br>
            <input type="number" id="phone" placeholder="phone.."><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" placeholder="Email.."><br>
			<label for="Questions">Have any questions?</label><br>
            <input type="text" id="qns" placeholder="Your questions go here"><br>
			<input class="submit-button" type="submit" value="submit">

            </form>

        </form>
    </div>

</section>
 -->

    

 <?php get_template_part('template-parts/backto-top') ?>
<?php get_footer(); ?>
