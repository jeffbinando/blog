(function($) {

	// Using strict mode
	'use strict';

	$('.featured-audio-1.ff-section').each(function(index){

		// Index

		$(this).addClass('featured-audio-1--id--' + index);

		var this_section = '.featured-audio-1--id--' + index + '.ff-section';
		var $this_section = $(this_section);

		// Selectors

		var $bigPlayButton = $this_section.find('.big-play-button');
		var $audioFrame = $this_section.find('iframe');

		// Functions

		function scrollToNicePosition(){
			var thisSectionOffset = $this_section.offset().top + 1;
			var mobileHeaderHeight;

			if ( $('.breakpoint').width() <= 2 ){
				mobileHeaderHeight = $('.header-1.ff-section').outerHeight();
				$("html, body").animate({ scrollTop: thisSectionOffset - mobileHeaderHeight }, 600); // +1

			} else {

				$("html, body").animate({ scrollTop: thisSectionOffset + 1}, 600); // +1

			}
		}

		$bigPlayButton.on('click', function(e){

			e.preventDefault();

			// Vars

			var audioHeight = $this_section.find('iframe').outerHeight();


			// Add autoplay

			var audioSrcAutoplay = $audioFrame.attr('src');
			if( -1 !== audioSrcAutoplay.indexOf("auto_play=false") ){
				audioSrcAutoplay = audioSrcAutoplay.replace(/auto_play\=false/i, 'auto_play=true');
			}
			$audioFrame.attr('src', audioSrcAutoplay);

			// Scroll To Nice Position

			scrollToNicePosition();

			// Switcheroo IMG/AUDIO

			setTimeout( function(){
				$this_section.find('.responsive-image-1.ff-block').css('-webkit-transform', 'scale(1.2)').css('transform', 'scale(1.2)').fadeOut(600);
				$this_section.find('.big-play-button').css('opacity','0').css('-webkit-transition', 'all 200ms ease-out').css('-moz-transition', 'all 200ms ease-out').css('transition', 'all 200ms ease-out');
				$audioFrame.hide();
				$this_section.animate({ height: audioHeight}, 600);
                BackgroundCheck.refresh();
			}, 10 );

			setTimeout( function(){
				$this_section.find('.big-play-button').remove();
			}, 410);

			// Allow audio to be naturally responsive when resizing browser window

			setTimeout( function(){
				$audioFrame.fadeIn(600);
				$this_section.css('height','');
				$this_section.find('.featured-audio__wrapper').css('position','static');
                BackgroundCheck.refresh();
			}, 600+100 );

		});

	});

})(jQuery);