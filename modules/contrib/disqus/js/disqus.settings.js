/**
 * @file
 * Javascript for disqus configuration form.
 */

(function ($) {

"use strict";

Drupal.behaviors.disqusSettingsForm = {
  attach: function (context) {
    var $context = $(context);

    $context.find('#edit-visibility').drupalSetSummary(function(context) {
      var vals = [];

      $('#edit-disqus-nodetypes div.form-type-checkbox').each(function(){
        var vals_node_types = [];
        if ($(this).find('input').is(':checked')) {
          vals_node_types.push(Drupal.checkPlain($(this).find('label').text()));
        }

        if (vals_node_types.length) {
          vals.push($('label[for="edit-disqus-nodetypes"]').text() + ': ' + vals_node_types.join(', '));
        }
      });

      vals.push(Drupal.t('Location: ') + Drupal.checkPlain($('#edit-disqus-location').val()));
      vals.push(Drupal.t('Weight: ') + Drupal.checkPlain($('#edit-disqus-weight').val()));

      return vals.join('<br />');
    });

    $context.find('#edit-behavior').drupalSetSummary(function(context) {
      var vals = [];

      if ($('#edit-disqus-userapikey').val()) {
        vals.push($('#edit-disqus-userapikey').parent().find('label').text());
      }

      var checkboxes = ['#edit-disqus-localization', '#edit-disqus-inherit-login', '#edit-disqus-disable-mobile'];
      for (var i in checkboxes) {
        if ($(checkboxes[i]).is(':checked')) {
          vals.push($(checkboxes[i]).parent().find('label').text());
        }
      }

      return vals.join(', ');
    });

    $context.find('#edit-advanced').drupalSetSummary(function(context) {
      var vals = [];

      if ($('#edit-disqus-publickey').val()) {
        vals.push($('#edit-disqus-publickey').parent().find('label').text());
      }

      if ($('#edit-disqus-secretkey').val()) {
        vals.push($('#edit-disqus-secretkey').parent().find('label').text());
      }

      return vals.join(', ');
    });
  }
};

})(jQuery);
