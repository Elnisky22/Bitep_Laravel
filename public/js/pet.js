var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("petImg");
  console.log("x: " + x);
  console.log("x.length: " + x.length);

  if (n > x.length) {
    slideIndex = 1
  }
  if (n < 1) {
    slideIndex = x.length
  }
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  console.log("slide index = " + slideIndex);
  console.log("x[0] = " + x[0]);
  x[slideIndex-1].style.display = "block";
}