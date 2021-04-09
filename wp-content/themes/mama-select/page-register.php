<?php
/* 
Template Name: Register
*/

get_header();
?>

<main class="l-register">
	<div class="l-register__about js-toggle-show" id="js-about">
		<div class="l-register__about-video">
		  <a href="#js-about-video" class="js-play-video">
		  	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 97.65 121.98"><defs><style>.cls-1{fill:#f2f2f2;}</style></defs><title>play</title><g id="レイヤー_2" data-name="レイヤー 2"><g id="f6781722-f228-421a-a89e-cafb7a52e09a"><path class="cls-1" d="M0,3.13V118.84a3,3,0,0,0,4.46,2.74L96.19,63.73a3.28,3.28,0,0,0,0-5.46L4.47.42a3,3,0,0,0-4,1A2.86,2.86,0,0,0,0,3.13Z"/></g></g></svg>
		  </a>
		  <video id="js-about-video">
		  	 <source src="<?php echo IMAGE_URL; ?>/about-video.mp4" type="video/mp4">
		  </video>
		</div>
		<span>申し込みはこちら</span>
		<a href="https://docs.google.com/forms/d/e/1FAIpQLSdHpqOqqgqOx_bbHvkwAZ7tCPXuHKa6JH7REEt4Xaeo6R3EQw/viewform" target="_blank">
			<img src="<?php echo IMAGE_URL; ?>email.png" class="l-register__about-icon">
		</a>
		<img src="<?php echo IMAGE_URL; ?>invitation.png" class="l-register__about-invitation" alt="">
		<span>申し込みはこちら</span>
		<a href="https://docs.google.com/forms/d/e/1FAIpQLSdHpqOqqgqOx_bbHvkwAZ7tCPXuHKa6JH7REEt4Xaeo6R3EQw/viewform" target="_blank">
			<img src="<?php echo IMAGE_URL; ?>email.png" class="l-register__about-icon">
		</a>
		<a href="<?php echo HOME_URL; ?>" class="l-register__about-home">
			<img src="<?php echo IMAGE_URL; ?>home.png" class="l-register__about-icon">
		</a>
		<span>HOME</span>
	</div>
</main>

<?php
get_footer();