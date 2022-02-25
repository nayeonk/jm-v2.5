<?php get_header(); ?>
<div class="blog__bg"></div>
<div class="posts" role="main">
	<div class="posts__container">
		<h1 class="posts__title"><a href="/blog">GOING MENTAL</a></h1>
		<div class="posts__content">
			<header class="header">
			<h1 class="entry-title"><?php _e( 'Category Archives: ', 'blankslate' ); ?><?php single_cat_title(); ?></h1>
			<?php if ( '' != category_description() ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . category_description() . '</div>' ); ?>
			</header>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'entry' ); ?>
			<?php endwhile; endif; ?>
			<?php get_template_part( 'nav', 'below' ); ?>
		</div>
	</div>
</div>
<footer class="footer relative">Copyright 2017 &copy; jennettemccurdy.com | <a href="/privacy-policy">Privacy Policy</a></footer>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>