jQuery(document).ready(function ($) {
  "use strict";
  jQuery(document).ajaxSuccess(function (e, xhr, settings) {
    jQuery('.uploadeimage').on('click',function () {
      wp.media.editor.send.attachment = function (props, attachment) {
        jQuery('.uploadeimage').val(attachment.url);
      }
      wp.media.editor.open(this);

      return false;
    });

  });

  jQuery('.uploadeimage').on('click',function () {
    wp.media.editor.send.attachment = function (props, attachment) {
      jQuery('.uploadeimage').val(attachment.url);
    }
    wp.media.editor.open(this);

    return false;
  });

});