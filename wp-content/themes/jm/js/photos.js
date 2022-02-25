var container = document.getElementById( 'container' ),
	trigger = container.querySelector( 'button.trigger' );

function toggleContent() {
	if( classie.has( container, 'photos__container--open' ) ) {
		classie.remove( container, 'photos__container--open' );
		classie.remove( trigger, 'trigger--active' );
		classie.remove( document.querySelector('.navbar'), 'hide');
		window.addEventListener( 'scroll', noscroll );
	}
	else {
		classie.add( container, 'photos__container--open' );
		classie.add( trigger, 'trigger--active' );
		classie.add( document.querySelector('.navbar'), 'hide');
		window.removeEventListener( 'scroll', noscroll );
	}
}

function noscroll() {
	window.scrollTo( 0, 0 );
}

// reset scrolling position
document.body.scrollTop = document.documentElement.scrollTop = 0;

// disable scrolling
window.addEventListener( 'scroll', noscroll );

trigger.addEventListener( 'click', toggleContent );


// ================ Slide Management ================== //

// Information of the slides
var slideData = {
	imagePath: "//d1btkvhnhp6n3k.cloudfront.net/assets/images/photos/",
	images: [
		{ name: "02_kenny-02", imageType: ".jpg" },
		{ name: "03_kenny-03", imageType: ".jpg" },
		{ name: "04_kenny-04", imageType: ".jpg" },
		{ name: "05_kenny-05", imageType: ".jpg" },
		{ name: "01_kenny-01", imageType: ".jpg" },
		{ name: "06_grave-01", imageType: ".jpg" },
		{ name: "07_grave-02", imageType: ".jpg" },
		{ name: "08_wnc-01", imageType: ".jpg" },
		{ name: "09_wnc-02", imageType: ".jpg" },
		{ name: "10_wnc-03", imageType: ".jpg" },
		{ name: "11_wnc-04", imageType: ".jpg" },
		{ name: "12_wnc-05", imageType: ".jpg" },
		{ name: "13_wnc-06", imageType: ".jpg" },
		{ name: "16_wnc-07", imageType: ".jpg" },
		{ name: "17_writing-02", imageType: ".jpg" },
		{ name: "18_writing-03", imageType: ".jpg" },
		{ name: "19_writing-04", imageType: ".jpg" },
		{ name: "21_writing-06", imageType: ".jpg" },
		{ name: "22_mccurdys-06", imageType: ".jpg" },
		{ name: "23_mccurdys-01", imageType: ".jpg" },
		{ name: "24_mccurdys-02", imageType: ".jpg" },
		{ name: "25_mccurdys-03", imageType: ".jpg" },
		{ name: "26_mccurdys-04", imageType: ".jpg" },
		{ name: "27_mccurdys-05", imageType: ".jpg" }
	],
	formats: {
		mobile: "_mobile",
		tablet: "_tab",
		highRes: "_hires",
		square: "_icon",
	}
};

// Initially create slides and thumbnails
for (let k = 0; k < slideData.images.length; k++) {
	var slideDiv = document.createElement("div");
	slideDiv.className = "intro__image slide fade";
	if(k == 0 ) {
		slideDiv.style.display = "block";
	}
	slideDiv.style.backgroundImage = "url('" + slideData.imagePath + slideData.images[k].name + slideData.formats.highRes + slideData.images[k].imageType + "')";
	document.getElementById("slide-container").appendChild(slideDiv);

	var thumbnailElement = document.createElement("a");
	thumbnailElement.className = "item";
	var thumbnailImage = document.createElement("img");
	thumbnailImage.src = slideData.imagePath + slideData.images[k].name + slideData.formats.square + slideData.images[k].imageType;
	thumbnailElement.appendChild(thumbnailImage);
	thumbnailElement.onclick = function() {
		toggleContent();
		showSlides(slideIndex = k);
	}
	document.getElementById("thumbnail-container").appendChild(thumbnailElement);
}

// Initial background images of navigation buttons
document.querySelector("#prevButton div").style.backgroundImage = "url(" + slideData.imagePath + slideData.images[slideData.images.length-1].name + slideData.formats.square + slideData.images[slideData.images.length-1].imageType + ")";
document.querySelector("#nextButton div").style.backgroundImage = "url(" + slideData.imagePath + slideData.images[1].name + slideData.formats.square + slideData.images[1].imageType + ")";

// Initial slide indexes
var slideIndex = 0;
var nextSlideIndex = 1;
var prevSlideIndex = slideData.images.length - 1;

// Initial links to image formats
document.querySelector(".nav__content-link-mobile").href = slideData.imagePath + slideData.images[0].name + slideData.formats.mobile + slideData.images[0].imageType;
document.querySelector(".nav__content-link-tablet").href = slideData.imagePath + slideData.images[0].name + slideData.formats.tablet + slideData.images[0].imageType;
document.querySelector(".nav__content-link-hd").href = slideData.imagePath + slideData.images[0].name + slideData.formats.highRes + slideData.images[0].imageType;

document.getElementById("prevButton").onclick = function() {
	plusSlides(-1);
}
document.getElementById("nextButton").onclick = function() {
	plusSlides(1);
}

function plusSlides(n) {
	showSlides(slideIndex = slideIndex + n);
}

function showSlides(n) {

	//var imagePath = '//d1btkvhnhp6n3k.cloudfront.net/assets/images/photos/';
	var imagePath = '../assets/images/photos/';

	// Get all the slide elements
	var slides = document.querySelectorAll('.slide');

	// Changes values if out of bounds
	if (n > slides.length - 1) { //9>8
		slideIndex = 0;
	}
	if (n < 1) {
		slideIndex = slides.length - 1;
	}

	// Turn all elements off, except the current slide
	for (var i = 0; i < slides.length; i++) {
		slides[i].style.display = 'none';
	}
	slides[slideIndex].style.display = "block";

	// Change next & prev values if out of bound
	if (slideIndex == slides.length - 1 ){
		nextSlideIndex = 0;
		prevSlideIndex = slideIndex - 1;
	}
	else if(slideIndex == 0) {
		prevSlideIndex = slides.length - 1;
		nextSlideIndex = slideIndex + 1;
	}
	else {
		nextSlideIndex = slideIndex + 1;
		prevSlideIndex = slideIndex - 1;
	}

	//console.log("prevSlideIndex: " + prevSlideIndex + " slideIndex: " + slideIndex + " nextSlideIndex: " + nextSlideIndex );

	// Change the nav images
	document.querySelector("#prevButton div").style.backgroundImage = "url(" + slideData.imagePath + slideData.images[prevSlideIndex].name + slideData.formats.square + slideData.images[0].imageType + ")";
	document.querySelector("#nextButton div").style.backgroundImage = "url(" + slideData.imagePath + slideData.images[nextSlideIndex].name + slideData.formats.square + slideData.images[0].imageType + ")";

	// Change the links for each device size download
	document.querySelector(".nav__content-link-mobile").href = slideData.imagePath + slideData.images[slideIndex].name + slideData.formats.mobile + slideData.images[slideIndex].imageType;
	document.querySelector(".nav__content-link-tablet").href = slideData.imagePath + slideData.images[slideIndex].name + slideData.formats.tablet + slideData.images[slideIndex].imageType;
	document.querySelector(".nav__content-link-hd").href = slideData.imagePath + slideData.images[slideIndex].name + slideData.formats.highRes + slideData.images[slideIndex].imageType;

}