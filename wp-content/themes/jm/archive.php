<?php get_header(); ?>
<div class="blog__bg"></div>
<div class="posts" role="main">
	<div class="posts__container">
		<h1 class="posts__title"><a href="/blog">GOING MENTAL</a></h1>
		<div class="posts__content">
			<header class="header">
				<h1 class="entry-title"><?php 
				if ( is_day() ) { printf( __( 'Daily Archives: %s', 'blankslate' ), get_the_time( get_option( 'date_format' ) ) ); }
				elseif ( is_month() ) { printf( __( 'Monthly Archives: %s', 'blankslate' ), get_the_time( 'F Y' ) ); }
				elseif ( is_year() ) { printf( __( 'Yearly Archives: %s', 'blankslate' ), get_the_time( 'Y' ) ); }
				else { _e( 'Archives', 'blankslate' ); }
				?></h1>
			</header>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'entry' ); ?>
			<?php endwhile; endif; ?>
			<?php get_template_part( 'nav', 'below' ); ?>
		</div>
	</div>
</div>
<footer class="footer relative">Copyright 2017 &copy; jennettemccurdy.com | <a href="/privacy-policy">Privacy Policy</a></footer>

<?php get_sidebar(); ?>
<?php get_footer(); ?>