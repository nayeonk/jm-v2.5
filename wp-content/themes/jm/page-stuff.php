<?php 
/**
* Template Name: Stuff Page
* The template of the stuff page.
* 
* This is a unique template for the stuff page.
* Please only assign this template for page that will end up being the stuff page.
*/

?>
<?php get_header(); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<!-- <section class="entry-content"> -->
		<section class="stuff__wrap">
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</section>
	<?php //if ( ! post_password_required() ) comments_template( '', true ); ?>
	<?php endwhile; endif; ?>
</div> <!-- end main__container -->
<?php get_footer(); ?>