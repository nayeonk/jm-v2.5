<?php 
/**
* Template Name: Home Page
* The template of the homepage.
* 
* This is a unique template for the homepage.
* Please only assign this template for page that will end up being the homepage.
*/

?>
<?php get_header(); ?>
	<div class="home__slide home__slide-01"></div>
	<div class="home__slide home__slide-02"></div>
	<div class="home__slide home__slide-03"></div>
	<div class="home__slide home__slide-04"></div>
	<div class="home__slide home__slide-05"></div>
	<div class="home__slide home__slide-06"></div>
	<div class="home__slide home__slide-07"></div>

</div> <!-- end main__container -->
<footer class="footer fixed">&copy; Copyright  <?php echo date("Y"); ?> jennettemccurdy.com</footer>
<script src="<?php echo get_template_directory_uri(); ?>/js/home.js"></script>
<?php get_footer(); ?>