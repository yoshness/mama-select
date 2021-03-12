export default function video() {
	let video = document.getElementById('js-hero-video');
	
	if(video) {
		video.oncanplaythrough = function() {
		    video.classList.add('is-loaded');
		}
	}
}