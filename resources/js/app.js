require('./bootstrap');

{/* // When the user scrolls down 50px from the top of the document, resize the header's font size */}
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("headerLogo").style.fontSize = "x-large";
    document.getElementById("headerLogo").style.fontWeight = "500";
  } else {
    document.getElementById("headerLogo").style.fontSize = "xx-large";
    document.getElementById("headerLogo").style.fontWeight = "bolder";
  }
}