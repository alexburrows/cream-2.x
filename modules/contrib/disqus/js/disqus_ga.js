/**
 * @file
 * JavaScript for the Disqus Google Analytics module.
 */

(function($) {

"use strict";

/**
 * Track new comments in Google analytics.
 */
Drupal.disqus.disqusTrackNewComment = function() {

  // Make sure that the google analytics event tracking object or
  // the universal analytics tracking function exists.
  // If not, then exit and don't track.
  if (typeof _gaq == "undefined" && typeof ga == "undefined") {
    return;
  }

  // Construct current page relative URL to be used as event Label.
  var label = document.location.href.toLowerCase().substring((document.location.href.toLowerCase().indexOf(document.domain.toLowerCase())) + (document.domain.toLowerCase().length));

  if (typeof _gaq != 'undefined') {
    _gaq.push(['_trackEvent', 'Disqus', 'Comment', label]);
  }
  else {
    ga('send', {
      'hitType': 'event',
      'eventCategory': 'Disqus',
      'eventAction': 'Comment',
      'eventLabel': label
    });
  }
};

})(jQuery);
