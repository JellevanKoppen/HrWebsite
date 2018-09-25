// When the user scrolls the page, execute myFunction
var header;
var sticky;

window.onload = function() {
  header = document.getElementById("stickybar");
  sticky = header.offsetTop;
}
window.onscroll = function() {scroll()};

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function scroll() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
