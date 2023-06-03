// * panggil navbar
const navBar = document.getElementById("navbar");
const navBarNav = document.getElementById("navbarNav");

// function scroll() {
//     let calc = window.screenY;
//     if (calc < 150) {
//         navBar.classList.replace("bg-dark", "bg-transparant");
//         navBarNav.classList.replace("container", "container-fluid");
//     } else {
//         navBar.classList.replace("bg-transparant", "bg-dark");
//         navBarNav.classList.replace("container-fluid", "container");
//     }
// }

// scroll();

// window.onscroll = () => {
//     scroll();
// };

// function navchangebg() {
//     var navbar = document.getElementById("navbar");
//     var scrollValue = window.screenY;

//     if (scrollValue < 150) {
//         navbar.classList.remove("navbarbg");
//     } else {
//         navbar.classList.add("navbarbg");
//     }
// }

// window.addEventListener("scroll", navchangebg);

window.addEventListener("scroll", function () {
    const navbar = document.querySelector(".navbar");
    navbar.classList.toggle("sticky", window.scrollY > 0);
});

$(function(){
    $('#datepicker').datepicker();
  });