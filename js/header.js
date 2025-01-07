// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the header
var myheader = document.getElementById("myHeader");

// Get the offset position of the navbar
var sticky = myheader.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.scrollY > sticky) {
    myheader.classList.add("sticky");
  } else {
    myheader.classList.remove("sticky");
  }
}