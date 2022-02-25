<div id="post-<?php the_ID(); ?>" <?php post_class('posts__item'); ?>>
	<header>
		<?php if ( has_post_thumbnail() ) { the_post_thumbnail('thumbnail', array('class' => 'icon')); } ?>
		<?php if ( is_singular() ) { echo '<h1 class="entry-title posts__item-title">'; } else { echo '<h2 class="entry-title posts__item-title">'; } ?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a><?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h2>'; } ?> <?php edit_post_link(); ?>
		<?php if ( !is_search() ) get_template_part( 'entry', 'meta' ); ?>
	</header>
	<?php get_template_part( 'entry', ( is_archive() || is_singular() ? 'content' : 'summary' ) ); ?>
	<?php if ( !is_search() ) get_template_part( 'entry-footer' ); ?>
</div>