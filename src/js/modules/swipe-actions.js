export default function swipeActions() {
	let $pagination = $('#js-pagination'),
		$previous = $('#js-pagination .previouspostslink'),
		$next = $('#js-pagination .nextpostslink');

	if($pagination.length > 0) {
		document.addEventListener('swiped-right', function(e) {

		  if($previous.length > 0) {
		  	document.querySelector('#js-pagination .previouspostslink').click();
		  }
		});
		document.addEventListener('swiped-left', function(e) {
			
		  if($next.length > 0) {
		  	document.querySelector('#js-pagination .nextpostslink').click();
		  }
		});
	}
}