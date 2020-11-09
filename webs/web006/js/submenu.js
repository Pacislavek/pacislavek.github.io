var myNav = document.getElementById('sideMenu');

window.onscroll = function () {
  "use strict";

  if (document.body.scrollTop >= 450 && window.innerWidth > 1280) {
    myNav.style.display = "block";
  } else {
    myNav.style.display = "none";
  }
};

$(window).on("load", function () {
  "use strict";

  if (document.body.scrollTop >= 450 && window.innerWidth > 1280) {
    myNav.style.display = "block";
  } else {
    myNav.style.display = "none";
  }

});
