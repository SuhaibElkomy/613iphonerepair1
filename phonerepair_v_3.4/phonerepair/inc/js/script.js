jQuery(document).ready(function ($) {
  "use strict";
  $('.js-fonts-select').select2();


  var phonerepair_font_family = "";
  var phonerepair_font_weight = "";
  var phonerepair_font_subsets = "";


  $("#tabs-2 select.font_familly").on('change',function () {
    phonerepair_font_family = $(this).find(":selected").val();

    $("#wd-google-fonts-css").attr("href", "http://fonts.googleapis.com/css?family=" + phonerepair_font_family + ":" + phonerepair_font_weight + "&subset=" + phonerepair_font_subsets);
    $(this).closest("tbody").find("p").css("font-family", phonerepair_font_family);
    $(this).closest("tbody").find("h2").css("font-family", phonerepair_font_family);
    $(this).closest("tbody").find("ul li").css("font-family", phonerepair_font_family);
  });

  $("#tabs-2 select.font_weight").on('change',function () {
    phonerepair_font_family = $(this).find(":selected").val();

    $(this).closest("tbody").find("p").css("font-weight", phonerepair_font_family);
    $(this).closest("tbody").find("h2").css("font-weight", phonerepair_font_family);
    $(this).closest("tbody").find("ul li").css("font-weight", phonerepair_font_family);
  });


  $("#tabs-2 select.text_transform").on('change',function () {
    phonerepair_font_family = $(this).find(":selected").val();

    $(this).closest("tbody").find("p").css("text-transform", phonerepair_font_family);
    $(this).closest("tbody").find("h2").css("text-transform", phonerepair_font_family);
    $(this).closest("tbody").find("ul li").css("text-transform", phonerepair_font_family);
  });

  $("#tabs-2 select.text_size").on('change',function () {
    phonerepair_font_family = $(this).find(":selected").val();
    $(this).closest("tbody").find("p").css("font-size", phonerepair_font_family + 'px');
    $(this).closest("tbody").find("h2").css("font-size", phonerepair_font_family + 'px');
    $(this).closest("tbody").find("ul li").css("font-size", phonerepair_font_family + 'px');
  });

  $("#tabs-2 select.font_subsets").on('change',function () {
    phonerepair_font_family = $(this).find(":selected").val();
    $("#wd-google-fonts-css").attr("href", "http://fonts.googleapis.com/css?family=" + phonerepair_font_family + ":" + phonerepair_font_weight + "&subset=" + phonerepair_font_subsets);
  });



  /*--------------------------------------*/
  var curent_sreen = '';

  function phonerepair_add_ckeckbox_class() {
    curent_sreen = $("input:radio[name='phonerepair_start_screan']:checked").val();
    $("input[name='phonerepair_start_screan']").parent().removeClass('selected');

    $("input[value='" + curent_sreen + "'][name='phonerepair_start_screan']").parent().addClass('selected');
  }


  $("#tabs").tabs(); //initialize tabs
  $(function () {
    $("#tabs").tabs({
      activate: function (event, ui) {
        var scrollTop = $(window).scrollTop(); // save current scroll position
        window.location.hash = ui.newPanel.attr('id'); // add hash to url
        $(window).scrollTop(scrollTop); // keep scroll at current position
      }
    });
  });
  // reload the form when the checkbox is changed
  phonerepair_add_ckeckbox_class();
  $('.phonerepair_start_screan').on('click',function (e) {
    if (curent_sreen != $(this).val()) {
      phonerepair_add_ckeckbox_class();
      $(this).closest('form').submit();
    }
  });

  if (typeof wp.media !== 'undefined') {

    var _custom_media = true, _orig_send_attachment = wp.media.editor.send.attachment;

    $('.uploader .button').on('click',function (e) {
      var send_attachment_bkp = wp.media.editor.send.attachment;
      var button = $(this);
      var id = button.attr('id').replace('_button', '');
      _custom_media = true;
      wp.media.editor.send.attachment = function (props, attachment) {
        if (_custom_media) {
          $("#" + id).val(attachment.url);
        } else {
          return _orig_send_attachment.apply(this, [props, attachment]);
        }
        ;
      };

      wp.media.editor.open(button);
      return false;
    });

    $('.add_media').on('click', function () {
      _custom_media = false;
    });

  }

  $('.logo_position').on('change', 'input[name=phonerepair_logo_position]:radio', function (e) {
    var input_value = $(this).attr('id');
    $('.logo_position label').removeClass("label_selected");
    $("." + input_value).addClass("label_selected");
  });
  $('.phonerepair_footer_columns').on('change', 'input[name=phonerepair_footer_columns]:radio', function (e) {
    var input_value = $(this).attr('id');
    $('.phonerepair_footer_columns label').removeClass("label_selected");
    $("." + input_value).addClass("label_selected");
  });
//---------page setting-----------
  $(function () {
    $('#phonerepair_page_title_area_style').on('change',function () {
      var selected = $(this).find(':selected').text();
      //alert(selected);
      if (selected == 'Standard Style') {
        $(".phonerepair_show_hide.float_left").hide();
      } else {
        $(".phonerepair_show_hide.float_left").show();
      }
      //$('#' + selected).show();
    }).on('change')
  });

});
