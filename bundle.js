/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};

/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {

/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;

/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			exports: {},
/******/ 			id: moduleId,
/******/ 			loaded: false
/******/ 		};

/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);

/******/ 		// Flag the module as loaded
/******/ 		module.loaded = true;

/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}


/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;

/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;

/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";

/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports) {

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


/***/ })
/******/ ]);