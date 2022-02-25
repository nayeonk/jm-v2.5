<?php 
/**
* Template Name: Photos Page
* The template of the photos page.
* 
* This is a unique template for the photos page.
* Please only assign this template for page that will end up being the photos page.
*/

?>
<?php get_header(); ?>
	<header class="intro">

		<div class="intro__image-wrap" id="slide-container"></div>

		<div class="bar">
			<div class="nav">
				<a href="#" id="prevButton" class="nav__prev">
					<span>Previous</span>
					<div></div> 
				</a>
				<a href="#" id="nextButton" class="nav__next">
					<span>Next</span>
					<div></div>
				</a>
			</div>
			<div class="nav__content">
				<div class="nav__content-prev">
					<span>Previous Image</span>
				</div>
				<div class="nav__content-current">
					<span>Wallpaper Sizes</span>
					<a class="nav__content-link-mobile" href="#" target="_blank">Mobile</a>
					<a class="nav__content-link-tablet no-mobile-inline" href="#" target="_blank">Tablet</a>
					<a class="nav__content-link-hd no-mobile-inline" href="#" target="_blank">High Res</a>
				</div>
				<div class="nav__content-next">
					<span>Next Image</span>
				</div>
			</div>
		</div>

		<button class="trigger">
			<svg width="100%" height="100%" viewBox="0 0 60 60" preserveAspectRatio="none">
				<g class="icon icon--grid">
					<rect x="32.5" y="5.5" width="22" height="22"/>
					<rect x="4.5" y="5.5" width="22" height="22"/>
					<rect x="32.5" y="33.5" width="22" height="22"/>
					<rect x="4.5" y="33.5" width="22" height="22"/>
				</g>
				<g class="icon icon--cross">
					<line x1="4.5" y1="55.5" x2="54.953" y2="5.046"/>
					<line x1="54.953" y1="55.5" x2="4.5" y2="5.047"/>
				</g>
			</svg>
			<span>View content</span>
		</button>

	</header>

	<section class="items-wrap" id="thumbnail-container"></section>
	
	<footer class="footer">&copy; Copyright  <?php echo date("Y"); ?> jennettemccurdy.com</footer>
</div> <!-- end main__container -->
<script src="<?php echo get_template_directory_uri(); ?>/js/photos.js"></script>
<?php get_footer(); ?>