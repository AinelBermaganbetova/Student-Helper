//select element function
const selectElement = function (element) {
     return document.querySelector(element);
};
let menuToogler = selectElement('.menu-toogle');
let body = selectElement('body');

menuToogler.addEventListener('click', function () {
     body.classList.toggle('open');
});