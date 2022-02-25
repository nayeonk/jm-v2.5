<?php get_header(); ?>
<div class="blog__bg"></div>
<div class="posts" role="main">
	<div class="posts__container">
		<div class="posts__content">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'entry' ); ?>
			<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
			<?php endwhile; endif; ?>
			<footer class="footer">
				<?php get_template_part( 'nav', 'below-single' ); ?>
			</footer>
		</div>
	</div>
</div>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>