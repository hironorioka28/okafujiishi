(function($) {
  $('a[href^="#"]').click(function() {
    var speed = 1000;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    $('body,html').animate({scrollTop:position}, speed, 'swing');
     return false;
  });

  $(window).scroll(function() {
    var $conceptDescription = $("#conceptDescription");

    if (! $conceptDescription.length) {
      return;
    }

    var windowTop = $(this).scrollTop(),
        conceptDescriptionTop = $conceptDescription.offset().top;

    if (windowTop > conceptDescriptionTop * (1 / 2)) {
      $(".js-youtube").addClass("dark");
    } else {
      $(".js-youtube").removeClass("dark");
    }
  });

  resizeYoutube();
  $(window).resize(function() {
    resizeYoutube();
  });

  function resizeYoutube() {
    var wWidth = $(window).width(),
        wHeight = $(window).height() + 120,
        baseRatio = 16 / 9,
        targetRatio = wWidth / wHeight;
    if (targetRatio < baseRatio) {
      $("#js-youtube").width(wHeight / 9 * 16).height(wHeight);
    } else {
      $("#js-youtube").width(wWidth).height(wWidth / 16 * 9);
    }
  }

  var $blogImgWrapper = $('.js-blogImg'),
      $blogImg = $blogImgWrapper.find('img');

      $blogImg.before('<div class="js-blogImg__loader"><div class="loader"></div></div>');
  $('.js-blogImg--single').find('img').parent('p').css({'position': 'relative'});

  $(window).on('load', function() {
    $('#js-header').css({'opacity': 1});
  });

  $blogImg.each(function() {
    $(this).one('load', function() {
      $(this).prev('.js-blogImg__loader').hide();
      $(this).closest('.js-blogImg').addClass('on');
    }).each(function() {
      if (this.complete) {
        $(this).trigger('load');
      }
    })
  });


})(jQuery);

var okafujiishi = {
  getDevice: function() {
    var ua = navigator.userAgent;
    if (ua.indexOf('iPhone') > 0 || ua.indexOf('iPod') > 0 || ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0) {
      return 'sp';
    } else if(ua.indexOf('iPad') > 0 || ua.indexOf('Android') > 0) {
      return 'tab';
    } else {
      return 'other';
    }
  }
}
