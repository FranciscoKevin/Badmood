
const boutonMenu = document.querySelector(".bouton-menu");
// We create a variable dropdownMenu set to the DOM element
const menuDeroulant = document.querySelector(".menu-deroulant");

// We listen for a click event
boutonMenu.addEventListener("click", function() {
  // On click we toggle the class visible on the dropdown
  menuDeroulant.classList.toggle("visible");
});


