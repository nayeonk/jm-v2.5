<?php 
/**
* Template Name: Videos Page
* The template of the videos page.
* 
* This is a unique template for the videos page.
* Please only assign this template for page that will end up being the videos page.
*/

?>
<?php get_header(); ?>
	<div class="video-wrap">
		<div class="video-inner">
			<video class="video-player" poster="">
				<source id="video-player--webm" src="<?php echo $cdnLink; ?>/assets/videos/welcomevideo_480p_ws_final_02.webm" type="video/webm"></source>
				<source id="video-player--mp4" src="<?php echo $cdnLink; ?>/assets/videos/welcomevideo_480p_ws_final_02.mp4" type="video/mp4"></source>
				<source id="video-player--ogv" src="<?php echo $cdnLink; ?>/assets/videos/welcomevideo_480p_ws_final_02.ogv" type="video/ogg"></source>
				Sorry, your browser does not support this video format.
			</video>
			<button class="action action--close">
				<i class="fa fa-close"></i>
				<span class="action__label action__label--hidden">Close preview</span>
			</button>
		</div>
	</div>
	<div class="spread">
		<img class="spread__img spread__img--rotation-1 action--play1" src="<?php echo $cdnLink; ?>/assets/images/videos/polaroid-welcome.jpg" data-video="welcomevideo_480p_ws_final_02"/>
		<img class="spread__img spread__img--rotation-2 action--play2" src="<?php echo $cdnLink; ?>/assets/images/videos/polaroid-bts-clip.jpg" data-video="bts_clip"/>
		<img class="spread__img spread__img--rotation-3 action--play3" src="<?php echo $cdnLink; ?>/assets/images/videos/polaroid-fod.jpg" data-video="fod"/>

		<a class="action btn" href="http://www.youtube.com/jennettemccurdyofficial" target="_blank">
			<i class="fa fa-play"></i><span class="action__label">Visit YouTube</span>
		</a>
	</div>
</div> <!-- end main__container -->
<footer class="footer fixed">&copy; Copyright  <?php echo date("Y"); ?> jennettemccurdy.com</footer>
<script src="<?php echo get_template_directory_uri(); ?>/js/videos.js"></script>
<?php get_footer(); ?>