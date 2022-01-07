require('./bootstrap');
require('alpinejs');

// var s1 = document.getElementById('scrolling-screen-1');
// var s2 = document.getElementById('scrolling-content-1');
//
// function select_scroll_1(e) { s2.scrollTop = s1.scrollTop; }
// function select_scroll_2(e) { s1.scrollTop = s2.scrollTop; }
//
// s1.addEventListener('scroll', select_scroll_1, false);
// s2.addEventListener('scroll', select_scroll_2, false);

/*Start Smart Marketing JS*/
window.onload = function() {
  /*Global Variables*/
  var getNav = document.querySelector('nav');
  var getNavButton = document.getElementById('menu-open');
  /*Menu*/
  function openMenu(){
    getNav.classList.toggle('show-menu');

  }
  getNavButton.addEventListener("click", openMenu);

  var brandAnimation = document.querySelector(".web-panel");
  var innerPanels = document.querySelectorAll(".panel");

  brandAnimation.addEventListener("animationend", function() {
		brandAnimation.classList.add("panel-remove");
  });
};
