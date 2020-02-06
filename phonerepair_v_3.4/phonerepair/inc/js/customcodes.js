(function () {
  "use strict";
  //------------------- Portfolio -------------------------------------------------------------------
  tinymce.create('tinymce.plugins.portfolio', {
    init: function (ed, url) {

      ed.addCommand('mcethemedelta', function () {
        ed.windowManager.open({
          // call content via admin-ajax, no need to know the full plugin path
          file: ajaxurl + '?action=phonerepair_tinymce&shortcode=portfolio',
          width: 500 + ed.getLang('wd-shortcode.delta_width', 0),
          height: 210 + ed.getLang('wd-shortcode.delta_height', 0),
          inline: 1
        }, {
          plugin_url: url // Plugin absolute URL
        });
      });

      // Register example button
      ed.addButton('wd-shortcode', {
        title: 'Add Portfolio',
        cmd: 'mcethemedelta',
        image: url + '/icon/portfolio.png'
      });

      // Add a node change handler, selects the button in the UI when a image is selected
      ed.onNodeChange.add(function (ed, cm, n) {
        cm.setActive('wd-shortcode', n.nodeName == 'IMG');
      });

    },
    createControl: function (n, cm) {
      return null;
    },
  });
  tinymce.PluginManager.add('portfolio', tinymce.plugins.portfolio);
  //------------------- Blog -------------------------------------------------------------------
  tinymce.create('tinymce.plugins.phonerepair_blog', {
    init: function (ed, url) {
      ed.addButton('phonerepair_blog', {
        title: 'Add a Blog',
        image: url + '/icon/blog.png',
        onclick:
          function () {
            ed.windowManager.open({
              // call content via admin-ajax, no need to know the full plugin path
              file: ajaxurl + '?action=phonerepair_tinymce&shortcode=phonerepair_blog',
              width: 500 + ed.getLang('wd-shortcode.delta_width', 0),
              height: 500 + ed.getLang('wd-shortcode.delta_height', 0),
              inline: 1
            }, {
              plugin_url: url // Plugin absolute URL
            });
          }
      });
    },
    createControl: function (n, cm) {
      return null;
    },
  });
  tinymce.PluginManager.add('phonerepair_blog', tinymce.plugins.phonerepair_blog);
  //------------------- maps -------------------------------------------------------------------
  tinymce.create('tinymce.plugins.phonerepair_google_map', {
    init: function (ed, url) {
      ed.addButton('phonerepair_google_map', {
        title: 'Add a Map',
        image: url + '/map.png',
        onclick:
          function () {
            ed.windowManager.open({
              // call content via admin-ajax, no need to know the full plugin path
              file: ajaxurl + '?action=phonerepair_tinymce&shortcode=phonerepair_google_map',
              width: 500 + ed.getLang('wd-shortcode.delta_width', 0),
              height: 500 + ed.getLang('wd-shortcode.delta_height', 0),
              inline: 1
            }, {
              plugin_url: url // Plugin absolute URL
            });
          }
      });
    },
    createControl: function (n, cm) {
      return null;
    },
  });
  tinymce.PluginManager.add('phonerepair_google_map', tinymce.plugins.phonerepair_google_map);
  //------------------- team -------------------------------------------------------------------
  tinymce.create('tinymce.plugins.phonerepair_team', {
    init: function (ed, url) {
      ed.addButton('phonerepair_team', {
        title: 'Add Team List',
        image: url + '/icon/team.png',
        onclick:
          function () {
            ed.windowManager.open({
              // call content via admin-ajax, no need to know the full plugin path
              file: ajaxurl + '?action=phonerepair_tinymce&shortcode=phonerepair_team',
              width: 500 + ed.getLang('wd-shortcode.delta_width', 0),
              height: 500 + ed.getLang('wd-shortcode.delta_height', 0),
              inline: 1
            }, {
              plugin_url: url // Plugin absolute URL
            });
          }
      });
    },
    createControl: function (n, cm) {
      return null;
    },
  });
  tinymce.PluginManager.add('phonerepair_team', tinymce.plugins.phonerepair_team);
  //------------------- testimonail -------------------------------------------------------------------
  tinymce.create('tinymce.plugins.phonerepair_testimonial', {
    init: function (ed, url) {
      ed.addButton('phonerepair_testimonial', {
        title: 'Add testimonial List',
        image: url + '/icon/testimonial.png',
        onclick:
          function () {
            ed.windowManager.open({
              // call content via admin-ajax, no need to know the full plugin path
              file: ajaxurl + '?action=phonerepair_tinymce&shortcode=phonerepair_testimonial',
              width: 500 + ed.getLang('wd-shortcode.delta_width', 0),
              height: 500 + ed.getLang('wd-shortcode.delta_height', 0),
              inline: 1
            }, {
              plugin_url: url // Plugin absolute URL
            });
          }
      });
    },
    createControl: function (n, cm) {
      return null;
    },
  });
  tinymce.PluginManager.add('phonerepair_testimonial', tinymce.plugins.phonerepair_testimonial);


  //------------------- Pricing table -------------------------------------------------------------------
  tinymce.create('tinymce.plugins.pricingtable', {
    init: function (ed, url) {
      ed.addButton('pricingtable', {
        title: 'Add a Pricing Table',
        image: url + '/icon/pricingtable.png',
        onclick:
          function () {
            ed.selection.setContent('<ul class="pricing-table">\
                          <li class="title">Standard</li>\
                          <li class="price">$99.99</li>\
                          <li class="description">An awesome description</li>\
                          <li class="bullet-item">1 Database</li>\
                          <li class="bullet-item">5GB Storage</li>\
                          <li class="bullet-item">20 Users</li>\
                          <li class="cta-button"><a class="button" href="#">Buy Now</a></li>\
                        </ul>');
          }
      });
    },
    createControl: function (n, cm) {
      return null;
    },
  });
  tinymce.PluginManager.add('pricingtable', tinymce.plugins.pricingtable);


})();