import { year } from "../abstracts/variables.js";

export default function displayCurrentYear() {
    year.innerHTML = new Date().getFullYear();  
}