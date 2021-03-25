export default function popup() {
	let $trigger = $('.js-popup-trigger'),
		$close = $('.js-popup-close'),
		$htmlBody = $('html, body'),
		$popup = $('#js-popup'),
		$img = $('.js-popup-image'),
		$title = $('.js-popup-title'),
		$description = $('.js-popup-description'),
		$price = $('.js-popup-price'),
		$url = $('.js-popup-url');

	$trigger.on('click', (e) => {
		e.preventDefault();

		let image = $(e.currentTarget).data('img'),
			title = $(e.currentTarget).data('title'),
			description = $(e.currentTarget).data('description'),
			price = $(e.currentTarget).data('price'),
			url = $(e.currentTarget).data('url');

		$img.attr('src', image);
		$title.text(title);
		$description.text(description);
		$price.text(`¥${price}`);
		$url.attr('href', url);

		$popup.addClass('is-active');
		$htmlBody.addClass('is-locked');
		$close.show();
	});

	$close.on('click', function(e) {
  		e.preventDefault();
  		$(e.currentTarget).hide();
		$popup.removeClass('is-active');
		$htmlBody.removeClass('is-locked');
	});

	$popup.on('click', function(e) {
  		e.preventDefault();
  		
  		if($(e.currentTarget).hasClass('is-active')) {
  			$popup.removeClass('is-active');
			$htmlBody.removeClass('is-locked');
		}
	});

	$popup.find('a').on('click', function(e) {
  		e.stopPropagation();
	});
}