import { menu, menuIcon, body } from "../abstracts/variables.js";

export default function mobileMenu () {
	menu.classList.toggle("menu-open")
	menuIcon.classList.toggle("open")
	body.classList.toggle("fixed")
}