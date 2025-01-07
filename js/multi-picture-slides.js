let slideIndex = [1,1,1,1];
/* Class the members of each slideshow group with different CSS classes */
let slideId = ["mySlides1", "mySlides2", "mySlides3", "mySlides4"]

showSlides(1, 0);
showSlides(1, 1);
showSlides(1, 2);
showSlides(1, 3);

function plusSlides(n, idnum) {
  showSlides(slideIndex[idnum] += n, idnum);
}


function showSlides(n, idnum) {
  let i;
  let x = document.getElementsByClassName(slideId[idnum]);
  if (n > x.length) {slideIndex[idnum] = 1}
  if (n < 1) {slideIndex[idnum] = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x[slideIndex[idnum]-1].style.display = "block";
}
