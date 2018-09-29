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
  var element = document.getElementById("topBtn")
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      element.style.opacity = 1;
      element.classList.add("animatetop");

  } else {
      element.style.opacity = 0;
      element.classList.remove("animatetop");
  }
}

// // When the user clicks on the button, scroll to the top of the document
// function topFunction() {
//     document.body.scrollTop = 0; // For Safari
//     document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
// }

function topFunction(scrollDuration) {
const   scrollHeight = window.scrollY,
        scrollStep = Math.PI / ( scrollDuration / 15 ),
        cosParameter = scrollHeight / 2;
var     scrollCount = 0,
        scrollMargin,
        scrollInterval = setInterval( function() {
            if ( window.scrollY != 0 ) {
                scrollCount = scrollCount + 1;
                scrollMargin = cosParameter - cosParameter * Math.cos( scrollCount * scrollStep );
                window.scrollTo( 0, ( scrollHeight - scrollMargin ) );
            }
            else clearInterval(scrollInterval);
        }, 15 );
}
