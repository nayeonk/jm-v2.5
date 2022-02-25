<?php 
/**
* Template Name: Fun Page
* The template of the fun page.
* 
* This is a unique template for the fun page.
* Please only assign this template for page that will end up being the fun page.
*/

?>
<?php get_header(); ?>
	<div class="pagenav">
		<a href="#" class="pagenav__item" id="goingMentalButton">Going Mental</a>
		<a href="#" class="pagenav__item" id="instagramLiveButton">Instagram Live</a>
		<a href="#" class="pagenav__item" id="stuffButton">Stuff</a>
		<a href="#" class="pagenav__item" id="fbLiveButton">FB Live</a>
	</div>

	<div class="content">
		<div class="content__item goingMental" id="goingMental">
			<div class="content__item-inner">
				<h2>GOING <strong>MENTAL</strong><span>/blog</span></h2>
				<p>My "Going Mental" blog is an outlet for me to explore my interest in psychology+mental health and connect with others who are curious about the topics. I'm hoping to build a little "Going Mental" community where we can swap articles, ideas, and thoughts on building better minds and lives for ourselves. Posts will typically be weekly.</p>
				<p><strong>Visit: <a href="/blog">http://goingmental.jennettemccurdy.com/</a></strong></p>
			</div>
		</div>
		<div class="content__item instagramLive" id="instagramLive">
			<div class="content__item-inner">
				<h2>Instagram Live <img src="<?php echo $cdnLink; ?>/assets/images/fun/instagram-icon.png" class="icon"/></h2>
				<p>My Instagram Lives are sporadic and unpredictable, each one done on a whim when I am likely either very excited about something or very bored about life in general. Chances are, my Instagram Lives are a waste of your time and mine, but hey, occasional time wasters never hurt anyone. I'm sure you're tempted by how amazing these instagram lives sound, so be sure to turn on your push notifications so you know when I'm broadcasting.</p>
				<p><strong>Visit: <a href="https://www.instagram.com/jennettemccurdy">https://www.instagram.com/jennettemccurdy/</a></strong></p>
			</div>
		</div>
		<div class="content__item stuff" id="stuff">
			<div class="content__item-inner">
				<h2></h2>
				<a class="button" href="/stuff">STUFF</a>
			</div>
		</div>
		<div class="content__item fbLive" id="fbLive">
			<div class="content__item-inner">
				<h2>Facebook Live</h2>
				<p>My facebook lives are bi-weekly broadcasts based on topics sent in by you guys via my twitter and instagram pages. In each episode, I choose three topics and give you my point of view on them. Broadcasts are 15-20 minutes.</p>
				<p><strong>Visit: <a href="https://www.facebook.com/jennettemccurdy">https://www.facebook.com/jennettemccurdy/</a></strong></p>
			</div>
			<footer class="footer fixed">&copy; Copyright  <?php echo date("Y"); ?> jennettemccurdy.com</footer>
		</div>
	</div>
</div> <!-- end main__container -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/js/animatescroll.min.js"></script>

<script>
	$('#goingMentalButton').on('click', function() {
		$('#goingMental').animatescroll({scrollSpeed: 600});
	});
	$('#fbLiveButton').on('click', function() {
		$('#fbLive').animatescroll({scrollSpeed: 600});
	});
	$('#instagramLiveButton').on('click', function() {
		$('#instagramLive').animatescroll({scrollSpeed: 600});
	});
	$('#stuffButton').on('click', function() {
		$('#stuff').animatescroll({scrollSpeed: 600});
	});
</script>

<?php get_footer(); ?>