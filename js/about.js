import { menuIcon, menu, body } from "./components/abstracts/variables.js";
import mobileMenu from "./components/menu/mobileMenu.js";
import displayCurrentYear from "./components/copyright/currentYear.js"
import carousel from "./components/gallery/carousel.js";

menuIcon.addEventListener("click", mobileMenu);

displayCurrentYear();


// IOS
const iOS = false;
const appleDevices = ['iPad', 'iPhone', 'iPod'];
const sectionCarousel = document.querySelector(".section-carousel");

if (appleDevices.indexOf(navigator.platform) > -1) {
    iOS = true;
} 



if (appleDevices === true) {
	console.log("iOS is true")
	sectionCarousel.style.display = "none";
} else {
	console.log("iOS is false")
}



window.addEventListener('load', () => {
	var carousels = document.querySelectorAll('.carousel');

	for (var i = 0; i < carousels.length; i++) {
		carousel(carousels[i]);
	}
});