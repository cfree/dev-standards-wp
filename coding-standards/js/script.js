(function($) {

	var Site = {
		// Variables
		challengeElement: null,
		context: null,
		initialOffset: null,

		/**
		 * Initialize site
		 */
		init: function() {
			/**
			 * Set the initial breakpoint context
			 */
			Site.challengeElement = document.querySelector('.breakpoint-context');
			Site.challengeContext();

			/**
			 * Check breakpoint context on window resizing
			 * Throttled/debounced for better performance
			 */
			$(window).resize(Site.debounce(function() {
				Site.challengeContext();
			}, 250));

			/**
			 * Check to see if user is at the top of the screen
			 * Throttled/debounced for better performance
			 */

			$(window).on('scroll', Site.debounce(function() {
				Site.resizeHeader();
			}, 10));
		},

		/**
		 * Device targeting should be based on media queries in CSS,
		 * we do not define this in scripts
		 * Modified from http://davidwalsh.name/device-state-detection-css-media-queries-javascript
		 */
		challengeContext: function() {
			var styles = window.getComputedStyle(Site.challengeElement),
				index = parseInt(styles.getPropertyValue('z-index'), 10),
				states = {
					1: 'mobile',
					2: 'tablet'
				};

			Site.context = states[index] || 'desktop';
		},

		/**
		 * Throttle/debounce helper
		 * Modified from http://remysharp.com/2010/07/21/throttling-function-calls/
		 */
		debounce: function(fn, delay) {
			var timer = null;

			return function() {
				var context = this,
					args = arguments;

				clearTimeout(timer);
				
				timer = setTimeout(function() {
					fn.apply(context, args);
				}, delay);
			};
		},

		/**
		 * Resize the header
		 */
		resizeHeader: function() {
			if (Site.context !== 'mobile') {
				var $header = $('.site-header'),
					topDiff = $(window).scrollTop();

				// Has the user scrolled down far enough?
				if (topDiff > (Site.initialOffset.top + Site.menuDiff)) {
					$header.addClass('is-fixed');
				} else {
					$header.removeClass('is-fixed');
				}
			}
		},
	};

	$(document).ready(function() {
		// Any functionality that should be initialized on `$(document).ready()`
		// should be placed in `Site.init()`
		Site.init();
	})
	.on('click', '.js-scroll-up', function() {
		// Scroll up to the top
		$.animate({
			scrollTop: $(this).offset().top
		}, 1000);
	})
	.on('click', '.js-menu-toggle', function() {
		$(this).add('.site-navigation').toggleClass('active');
	});

})(jQuery);