import { menuIcon } from "./components/abstracts/variables.js";
import mobileMenu from "./components/menu/mobileMenu.js";
import displayCurrentYear from "./components/copyright/currentYear.js"
import carousel from "./components/gallery/carousel.js";

menuIcon.addEventListener("click", mobileMenu);

displayCurrentYear();


// IOS Variables
let iOS = false;
const appleDevices = ['iPad', 'iPhone', 'iPod'];
const sectionCarousel = document.querySelector(".section-carousel");

// Checks if the user is using iPad, iPhone or iPod
if (appleDevices.indexOf(navigator.platform) > -1) {
    iOS = true;
} 

// Remove Carousel if iOS = true
if (iOS === true) {
	console.log("iOS is true")
	sectionCarousel.remove();
} else {
	window.addEventListener('load', () => {
		var carousels = document.querySelectorAll('.carousel');

		for (var i = 0; i < carousels.length; i++) {
			carousel(carousels[i]);
		}
	});
}