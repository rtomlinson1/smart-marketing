require('./bootstrap');
require('alpinejs');

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
};
