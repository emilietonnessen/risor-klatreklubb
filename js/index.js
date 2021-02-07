import { menuIcon, menu, body } from "./components/abstracts/variables.js";
import mobileMenu from "./components/menu/mobileMenu.js";
import displayCurrentYear from "./components/copyright/currentYear.js"

menuIcon.addEventListener("click", mobileMenu);

displayCurrentYear();