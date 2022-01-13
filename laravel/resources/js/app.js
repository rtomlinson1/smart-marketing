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

/*Only homepage*/
var mobileWebPanel = document.querySelector(".is-mobile-only .web-panel");
  if (mobileWebPanel) {
    var desktopWebPanel = document.querySelector(".is-desktop-only .web-panel");
    var designPanel = document.querySelector(".design-panel");
    var innerPanels = document.querySelectorAll(".panel");
    var mobilePanelWrap = document.querySelector(".panels.is-mobile-only");
    var desktopPanelWrap = document.querySelector("div.panels.is-desktop-only");
    var panelInnerWrap = document.querySelectorAll(".panel-wrap");
    var mobileBrandingPanel = document.querySelector(".is-mobile-only .branding-panel .panel-back");
    var desktopBrandingPanel = document.querySelector(".is-desktop-only .branding-panel .panel-back");

    mobileBrandingPanel.addEventListener("animationend", function() {
      mobileWebPanel.classList.add("panel-remove");

      innerPanels.forEach((panel, i) => {
          panel.classList.add("panel-shrink");
      });
      panelInnerWrap.forEach((panelW, i) => {
          panelW.classList.add("panel-wrap-shrink");
      });

      mobilePanelWrap.classList.add("panel-collapse");

    });
    desktopBrandingPanel.addEventListener("animationend", function() {

      desktopWebPanel.classList.add("panel-remove");
      innerPanels.forEach((panel, i) => {
          panel.classList.add("panel-shrink");
      });
      panelInnerWrap.forEach((panelW, i) => {
          panelW.classList.add("panel-wrap-shrink");
      });


      desktopPanelWrap.classList.add("panel-collapse");
    });
  }


};
