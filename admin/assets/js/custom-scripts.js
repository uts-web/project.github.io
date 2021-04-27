/*------------------------------------------------------
    Author : www.webthemez.com
    License: Commons Attribution 3.0
    http://creativecommons.org/licenses/by/3.0/
---------------------------------------------------------  */

(function ($) {
  'use strict';
  var mainApp = {
    initFunction: function () {
      /*MENU 
            ------------------------------------*/
      $('#main-menu').metisMenu();

      $(window).bind('load resize', function () {
        if ($(this).width() < 768) {
          $('div.sidebar-collapse').addClass('collapse');
        } else {
          $('div.sidebar-collapse').removeClass('collapse');
        }
      });

      /* MORRIS BAR CHART
			-----------------------------------------*/
      Morris.Bar({
        element: 'morris-bar-chart',
        data: [
          {
            y: 'November',
            a: 150,
          },
          {
            y: 'Desember',
            a: 175,
          },
          {
            y: 'Januari',
            a: 98,
          },
          {
            y: 'Februari',
            a: 190,
          },
          {
            y: 'Maret',
            a: 212,
          },
          {
            y: 'April',
            a: 220,
          },
        ],
        xkey: 'y',
        ykeys: 'a',
        labels: 'Total',
        hideHover: 'auto',
        resize: true,
      });

      /* MORRIS DONUT CHART
			----------------------------------------*/
      Morris.Donut({
        element: 'morris-donut-chart',
        data: [
          {
            label: 'Desain Grafis',
            value: 152,
          },
          {
            label: 'Editing Video',
            value: 68,
          },
        ],
        resize: true,
      });
    },

    initialization: function () {
      mainApp.initFunction();
    },
  };
  // Initializing ///

  $(document).ready(function () {
    mainApp.initFunction();
  });
})(jQuery);
