<?php 
/**
* Template Name: Blog Page
* The template of the blogs page (going mental).
* 
* This is a unique template for the blogs page. This will show a feed of latest blog posts.
* Please only assign this template for page that will end up being the blog page.
*/

?>
<?php get_header(); $posts_per_page = 5; ?>
		<div class="blog__bg"></div>

		<div class="posts">
			<div class="posts__container">
				<h1 class="posts__title"><a href="/blog">GOING MENTAL</a></h1>
				<div class="posts__content">
					<?php // Display blog posts on any page 
					$temp = $wp_query; $wp_query= null;
					$args = array('post_type' => 'post');
					$wp_query = new WP_Query( $args ); $wp_query->query('posts_per_page=' . $posts_per_page . '&paged='.$paged);
					while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
					<?php get_template_part( 'entry' ); ?>
					<?php endwhile; ?>

					<?php if ($paged > 1) { ?>

					<nav id="nav-posts">
						<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
						<div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
					</nav>

					<?php } else { ?>

					<nav id="nav-posts">
						<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
					</nav>

					<?php } ?>

					<?php wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
	<footer class="footer relative">Copyright 2017 &copy; jennettemccurdy.com | <a href="/privacy-policy">Privacy Policy</a></footer>
</div> <!-- end main__container -->

<?php get_footer(); ?>