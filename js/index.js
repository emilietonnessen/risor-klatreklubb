import { menuIcon, menu } from "./components/abstracts/variables.js";

console.log("test");

menuIcon.addEventListener("click", mobileMenu);

// Variables
const menuClosed = menu.style.right = "-100vw";
const menuOpened = menu.style.right = "0vw";

function mobileMenu () {
    console.log(menu);

    if(menuOpened) {
        menu.style.right = "0vw";
    } 

    if (menuClosed) {
        menu.style.right = "-100vw";
    }

}



/* export default $(document).ready(function(){
	$('.nav__menu__hamburger-icon').click(function(){
		$(this).toggleClass('open');

		if($(this).hasClass('open')) {
			$('.nav__menu').addClass('open-menu');
			$('body').addClass('fixed');
		} else {
			$('.nav__menu').removeClass('open-menu');
			$('body').removeClass('fixed');
		}
	});
}); */