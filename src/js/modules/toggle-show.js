export default function toggleShow() {

	let $trigger = $('.js-toggle-trigger'),
		$toggleEls = $('.js-toggle-show'),
		$htmlBody = $('html, body');

	if($('#js-index-page').length) {
		$('#js-hero').addClass('is-shown');
		$('a[href="#js-hero"]').addClass('is-active');
	}

	if(window.location.href.indexOf('#js-hero') > -1) {
      	$('a[href="#js-hero"]').addClass('is-active');
    }
    if(window.location.href.indexOf('#js-categories') > -1 ||
    	window.location.href.indexOf('#js-ranking') > -1 ||
   		window.location.href.indexOf('#js-latest') > -1 ||
   		window.location.href.indexOf('#js-about') > -1) 
    {
    	$toggleEls.removeClass('is-shown');
    	$trigger.removeClass('is-active');
    	$htmlBody.removeClass('is-scrollable');

    	if(window.location.href.indexOf('#js-categories') > -1) {
    		$('#js-categories').addClass('is-shown');
			$('a[href="#js-categories"]').addClass('is-active');
    	}
      	if(window.location.href.indexOf('#js-ranking') > -1) {
      		$('#js-ranking').addClass('is-shown');
			$('a[href="#js-ranking"]').addClass('is-active');
      	}
      	if(window.location.href.indexOf('#js-latest') > -1) {
      		$('#js-latest').addClass('is-shown');
			$('a[href="#js-latest"]').addClass('is-active');
      	}
      	if(window.location.href.indexOf('#js-about') > -1) {
      		$('#js-about').addClass('is-shown');
			$('a[href="#js-about"]').addClass('is-active');
			$htmlBody.addClass('is-scrollable');
      	}
    }

   	$trigger.on('click', (e) => {
		e.preventDefault();

		let target = $(e.currentTarget).attr('href');
		$toggleEls.removeClass('is-shown');
		
		$('#js-about-video').get(0).pause();
		$('.js-play-video').removeClass('is-hidden');

		if($('#js-index-page').length) {
			$(target).addClass('is-shown');

			$trigger.removeClass('is-active');
			$(e.currentTarget).addClass('is-active');

			if(target == '#js-about') {
				$htmlBody.addClass('is-scrollable');
				$('')
			}
			else {
				$htmlBody.removeClass('is-scrollable');
			}
		}
		else {
			window.location = `/mama-select/${target}`;
		}
	}); 
}