import Bowser from "Bowser";
import MicroModal from "micromodal";
import Headroom from "headroom.js";
import * as AOS from "aos";
import $ from "jquery";
import "slick-carousel";

// Headroom
let header = document.querySelector(".site-header"),
  headroom = new Headroom(header);

headroom.init();

// AOS
AOS.init({
  offset: 200,
  duration: 1000,
  easing: "ease",
  anchorPlacement: "top-center",
  once: true,
  disable: "mobile",
});

// Modals
MicroModal.init();

// Reset modal iframe on close
$(".modal__close").on("click", function() {
  var currentModal = $(this).parents(".modal");
  var iframeSrc = $(this).parents(".modal").find("iframe").attr("src");

  currentModal.find("iframe").attr("src", iframeSrc);
});

// Reset modal iframe on outside click
$(document).on("click", function(e) {
  var currentModal = $(e.target).closest(".modal");

  if( currentModal.length ) {
    // eslint-disable-next-line
    var iframeSrc = currentModal.find("iframe").attr("src");

    currentModal.find("iframe").attr("src", iframeSrc);
  }
});

$(document).ready(function($) {
  // Inside of this function, $() will work as an alias for jQuery()
  // and other libraries also using $ will not be accessible under this shortcut
  // https://codex.wordpress.org/Function_Reference/wp_enqueue_script#jQuery_noConflict_Wrappers

  // Touch Device Detection
  var isTouchDevice = "ontouchstart" in document.documentElement;
  if (isTouchDevice) {
    $("body").removeClass("no-touch");
    $("body").addClass("touch");

  }

  // Browser detection via Bowser (https://github.com/lancedikson/bowser) - add detection as needed
  const userBrowser = Bowser.getParser(window.navigator.userAgent);
  const browser = userBrowser.getBrowser();

  if (browser.name === "Internet Explorer" && browser.version == "11.0") {
    $("body").addClass("ie-11");
  } else if (browser.name === "Safari") {
    $("body").addClass("safari");
  }

  // Menu functions
  $(".menu-icon").on("click", function() {
    $("html").toggleClass("locked");
    $("body").toggleClass("locked masked");

    $(".menu-icon").toggleClass("active");
    $(".mega-menu").slideToggle();
  });

  // Home testimonials slider
  $(".home-testimonials__slider").slick({
    arrows: false,
    autoplay: true,
    dots: true,
    rows: 2,
    slidesPerRow: 1,
  });

  // Home plan switching
  if( $(".plans-section").length ) {
    $(".plans-section .switch input[type='checkbox']").on("click", function() {
      $(".plan__monthly").toggleClass("active");
      $(".plan__annual").toggleClass("active");
    });
  }

  // Blog single tabbing
  if( $(".post-content__buttons").length ) {
    $(".post-content__buttons button:first-of-type").addClass("active");
    $(".post-content__blocks > div:first-of-type").addClass("active");
  }

  $(".post-content__buttons button").on("click", function() {
    var id = $(this).attr("id");

    $(".post-content__buttons button").removeClass("active");
    $(this).addClass("active");

    $(".post-content__blocks > div").removeClass("active");
    $(".post-content__" + id).addClass("active");
  });

  // Smooth Anchor Link Scrolling
  $(".anchor-scroll").on("click", function(e) {
    e.preventDefault();

    // Store hash
    var hash = this.hash;

    $("html, body").animate({
      scrollTop: $(hash).offset().top,
    }, 800, function(){

      window.location.hash = hash;
    });
  });

  // Dashboard tabbing
  $(".dashboard-tabs button").on("click", function() {
    var id = $(this).attr("id");

    $(".dashboard-tabs button").removeClass("active");
    $(this).addClass("active");

    $(".dashboard-content").removeClass("active");
    $(".dashboard-content#content-" + id).addClass("active");
  });
});
