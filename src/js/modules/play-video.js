export default function playVideo() {
	let $trigger = $('.js-play-video');

	$trigger.on('click', (e) => {
		e.preventDefault();
		$(e.currentTarget).addClass('is-hidden');

		let target = $(e.currentTarget).attr('href');
		$(target).get(0).play();
	});
}