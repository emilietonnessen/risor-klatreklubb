import { menuIcon, menu, body } from "./components/abstracts/variables.js";
import mobileMenu from "./components/menu/mobileMenu.js";
import carousel from "./components/gallery/carousel.js";

menuIcon.addEventListener("click", mobileMenu);

window.addEventListener('load', () => {
	var carousels = document.querySelectorAll('.carousel');

	for (var i = 0; i < carousels.length; i++) {
		carousel(carousels[i]);
	}
});

