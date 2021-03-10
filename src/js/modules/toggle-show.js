export default function toggleShow() {

	let $trigger = $('.js-toggle-trigger'),
		$toggleEls = $('.js-toggle-show');

	if($('#js-index-page').length) {
		$('#js-hero').fadeIn();
		$('a[href="#js-hero"]').addClass('is-active');
	}

	$trigger.on('click', (e) => {
		e.preventDefault();

		let target = $(e.currentTarget).attr('href');
		$toggleEls.hide();

		if($('#js-index-page').length) {
			$(target).fadeIn();

			$trigger.removeClass('is-active');
			$(e.currentTarget).addClass('is-active');
		}
		else {
			window.location = `/mama-select/${target}`;
		}
	});

	if(window.location.href.indexOf('#js-hero') > -1) {
      	$('a[href="#js-hero"]').addClass('is-active');
    }
    if(window.location.href.indexOf('#js-categories') > -1) {
    	$toggleEls.hide();
    	$trigger.removeClass('is-active');
      	$('#js-categories').fadeIn();
		$('a[href="#js-categories"]').addClass('is-active');
    }
    if(window.location.href.indexOf('#js-ranking') > -1) {
    	$toggleEls.hide();
    	$trigger.removeClass('is-active');
      	$('#js-ranking').fadeIn();
		$('a[href="#js-ranking"]').addClass('is-active');
    }
}