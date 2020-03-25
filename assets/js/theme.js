import Bowser from "Bowser";
import MicroModal from "micromodal";

// Modals
MicroModal.init();

jQuery(document).ready(function($) {
  // Inside of this function, $() will work as an alias for jQuery()
  // and other libraries also using $ will not be accessible under this shortcut
  // https://codex.wordpress.org/Function_Reference/wp_enqueue_script#jQuery_noConflict_Wrappers

  // Touch Device Detection
  var isTouchDevice = "ontouchstart" in document.documentElement;
  if (isTouchDevice) {
    $("body").removeClass("no-touch");
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

  // Landing hero rotating text
  if( $(".landing-section .span--outer").length ) {
    // Cycle first term in
    $(".landing-section .span--inner").first().addClass("in");

    // Start cycling through terms
    setInterval(function() {

      var out = $(".landing-section .span--inner.out");
      var current = $(".landing-section .span--inner.in");

      // grab next if it exists, otherwise first
      if( current.next(".landing-section .span--inner")[0] ) {
        // eslint-disable-next-line
        var next = current.next(".landing-section .span--inner");
      } else {
        // eslint-disable-next-line
        var next = $(".landing-section .span--inner").first();
      }

      // Reset out, move in out, and move next term in
      out.removeClass("out");
      current.removeClass("in").addClass("out");
      next.addClass("in");

    }, 1500);
  }
});
