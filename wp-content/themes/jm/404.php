<?php get_header(); ?>
<div class="notfound clearfix">
	<div class="notfound__container">
		<video autoplay="autoplay" class="notfound__video">
			<source src="<?php echo $cdnLink; ?>/assets/videos/404.webm" type="video/webm"></source>
			<source src="<?php echo $cdnLink; ?>/assets/videos/404.mp4" type="video/mp4"></source>
			<source src="<?php echo $cdnLink; ?>/assets/videos/404.ogv" type="video/ogg"></source>
			404 File not Found.
		</video>
	</div>
</div>
<script>
	var notFoundVideo = document.querySelector('.notfound__video');
	notFoundVideo.addEventListener('click', function() {
		notFoundVideo.play();
	});
</script>
<?php get_footer(); ?>