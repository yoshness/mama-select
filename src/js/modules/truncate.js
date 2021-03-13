export default function truncate() {
	let truncateEls = document.querySelectorAll('.js-truncate');
	let options = {
	  height: 30,
	  tolerance: 0,
	  truncate: 'letter'
	};

	truncateEls.forEach((item) => {
		new Dotdotdot(item, options );
	});
}