// COUNT UP
jQuery(document).ready(function($) {
    "use strict";
    var datafile;
    datafile = $('.counter').data('file');
    $('.counter').counterUp({
        delay: 10,
        time: datafile
    });
});
// END COUNT UP



jQuery(document).ready(function(jQuery) {
    "use strict";
    jQuery('.circular-item-style-1').appear();
    jQuery(document.body).on('appear', '.circular-item-style-1', function() {

        // Radial progress bar
        var easy_pie_chart = {};
        jQuery('.circular-item-style-1').removeClass("hidden");
        jQuery('.circular-pie-style-1').each(function() {
            jQuery(this).easyPieChart(jQuery.extend(true, {}, easy_pie_chart, {
                size: 220,
                animate: 2000,
                lineWidth: 2,
                lineCap: 'square',
                barColor: jQuery(this).data('color'),

                scaleColor: false,

                trackColor: '#DAD9DB',


                onStep: function(from, to, percent) {
                    this.el.children[0].innerHTML = Math.round(percent) + '%';
                }
            }));
        });
    });
});


jQuery(document).ready(function(jQuery) {
    "use strict";
    jQuery('.circular-item-style-2').appear();
    jQuery(document.body).on('appear', '.circular-item-style-2', function() {

        // Radial progress bar
        var easy_pie_chart = {};
        jQuery('.circular-item-style-2').removeClass("hidden");
        jQuery('.circular-pie-style-2').each(function() {
            jQuery(this).easyPieChart(jQuery.extend(true, {}, easy_pie_chart, {
                size: 220,
                animate: 2000,
                lineWidth: 42,
                lineCap: 'square',
                barColor: jQuery(this).data('color'),

                scaleColor: false,

                trackColor: 'transparent',
                onStep: function(from, to, percent) {
                    this.el.children[0].innerHTML = Math.round(percent) + '%';
                }
            }));
        });
    });
});



jQuery(document).ready(function(jQuery) {
    "use strict";
    jQuery('.circular-item-style-3').appear();
    jQuery(document.body).on('appear', '.circular-item-style-3', function() {

        // Radial progress bar
        var easy_pie_chart = {};
        jQuery('.circular-item-style-3').removeClass("hidden");
        jQuery('.circular-pie-style-3').each(function() {
            jQuery(this).easyPieChart(jQuery.extend(true, {}, easy_pie_chart, {
                size: 220,
                animate: 2000,

                lineCap: 'square',
                barColor: jQuery(this).data('color'),
                lineWidth: 24,
                scaleColor: false,

                trackColor: '#DAD9DB',
                onStep: function(from, to, percent) {
                    this.el.children[0].innerHTML = Math.round(percent) + '%';
                }
            }));
        });
    });
});



jQuery(document).ready(function(){
    "use strict";
  if (jQuery(".parallax").length ) {
    var item_class = jQuery(".parallax").attr("class").split("  ");

    var class_name = item_class[2];
    jQuerywindow = jQuery(window);

    jQuery(class_name).each(function () {
      var jQueryscroll = jQuery(this);

      jQuery(window).scroll(function () {
        var yPos = -(jQuerywindow.scrollTop() / jQueryscroll.data('speed'));
        var coords = '50% ' + yPos + 'px';
        jQueryscroll.css({backgroundPosition: coords});
      });
    });
  }

});



