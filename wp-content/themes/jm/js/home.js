// var iconButton = document.getElementById('home__icons-main');
// var icons = document.querySelectorAll('#home__icons span');
// var iconCloseButton = document.getElementById('iconClose');
// var logo = document.getElementById('name');

// var iconOpen = false;
// iconButton.addEventListener('click', iconHandler, false);
// iconCloseButton.addEventListener('click', iconHandler, false);
function iconHandler() {
	if(!iconOpen){
		for (var i = 0; i < icons.length; i++) {
			classie.add(icons[i], 'opened-icons');
		}
		classie.add(iconCloseButton, 'opened-icons');
		classie.add(logo, 'fade');
    }
    else {
    	for (var i = 0; i < icons.length; i++) {
			classie.remove(icons[i], 'opened-icons');
		}
		classie.remove(iconCloseButton, 'opened-icons');
		classie.remove(logo, 'fade');

    }
    iconOpen = !iconOpen;
}




rotateImage();

function rotateImage() {

	var homeImages = document.querySelectorAll(".home__slide");
	var homeSlideIndex = 0;
	var currentIndex = 1;
	homeImages[0].classList += " fadeIn";

	window.setInterval(function() {
		
		for (var homeSlideIndex = 0; homeSlideIndex < homeImages.length; homeSlideIndex++) {
			homeImages[homeSlideIndex].classList.remove("fadeIn");
		}
		homeImages[currentIndex].classList += " fadeIn";
		if(currentIndex == homeImages.length - 1) {
			currentIndex = 0;
		}
		else {
			currentIndex++;
		}
		
	}, 5000);
}



