var myNav = document.getElementById('navbar');
var toTop = document.getElementById('scrolltotop');

window.onscroll = function () {
  "use strict";

  if (document.body.scrollTop >= 200 && window.innerWidth > 1000) {
    myNav.style.backgroundColor = "rgba(0,0,0,1)";
    toTop.style.display = "block";
  } else {

    if (window.innerWidth < 1000) {
      myNav.style.backgroundColor = "rgba(0,0,0,1)";
    } else {
      myNav.style.backgroundColor = "rgba(0,0,0,0.1)"
    }
    toTop.style.display = "none";
  }

};
