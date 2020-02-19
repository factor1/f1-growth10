const Bowser = require("bowser");

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
});
