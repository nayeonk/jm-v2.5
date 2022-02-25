<?php 
/**
* Template Name: Projects Page
* The template of the projects page.
* 
* This is a unique template for the projects page.
* Please only assign this template for page that will end up being the projects page.
*/

?>
<?php get_header(); ?>
		<div class="projects__list" id="projects-list"></div>
	<footer class="footer">&copy; Copyright  <?php echo date("Y"); ?> jennettemccurdy.com</footer>
</div> <!-- end main__container -->
<script src="<?php echo get_template_directory_uri(); ?>/js/projects.js"></script>

<script>
	var item = '';
	var imagePath = '//d1btkvhnhp6n3k.cloudfront.net/assets/images/projects/';
	
	for(var i = 0; i < recentProjects.length; i++) {
		if( recentProjects[i].type == 'film' ) {
			item += '<div class="projects__list-item project">';
			item += '<div class="project__title"><h2>' + recentProjects[i].name + '</h2>';
			item += '</div>';
			item += '<div class="project__gallery clearfix">';
			item += '<div class="project__gallery-item">';
			item += '<img src="' + imagePath + recentProjects[i].images[0] +'"/>';
			item += '</div>';
			item += '<div class="project__gallery-item">';
			item += '<img src="' + imagePath + recentProjects[i].images[1] +'"/>';
			item += '</div>';
			item += '<div class="project__gallery-item">';
			item += '<img src="' + imagePath + recentProjects[i].images[2] +'"/>';
			item += '</div>';
			item += '</div>';
			if(recentProjects[i].awards.length > 0) {
				item += '<div class="project__awards">';
				for(var j = 0; j < recentProjects[i].awards.length; j++) {
					item += '<img src="' + imagePath + recentProjects[i].awards[j] + '" />'
				}
				item += '</div>';
			}
			item += '<div class="project__description"><p>' + recentProjects[i].description + '</p></div>';
		}
		else if( recentProjects[i].type == 'article') {
			item += '<div class="projects__list-item project">';
			item += '<div class="project__title"><h2><img src="' + imagePath + recentProjects[i].publicationLogo + '" alt="'+ recentProjects[i].publication + '"/></h2>';
			item += '</div>';
			item += '<div class="project__body clearfix">';
			item += '<div class="project__body-left">';
			item += '<img src="' + imagePath + recentProjects[i].articleImage +'"/>';
			item += '</div>';
			item += '<div class="project__body-right">';
			item += '<h3>' + recentProjects[i].name + '</h3>';
			item += recentProjects[i].summary;
			item += '<p><a href="' + recentProjects[i].link + '" target="_blank">[...]</a></p>';
			item += '</div>';
			item += '</div>';
		}
		item += '<div class="project__link"><a target="_blank" href="' + recentProjects[i].link + '">' + recentProjects[i].buttonText + '</a></div>';
		item += '</div>';
	}
	document.getElementById('projects-list').innerHTML += item;
</script>

<?php get_footer(); ?>