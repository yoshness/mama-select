<header class="header">
	<div class="header__top u-flex u-flex--center">
		<a href="<?php echo HOME_URL; ?>" class="header__logo">
			<img src="<?php echo IMAGE_URL; ?>logo.png" alt="">
		</a>
		<div class="header__search">
			<form role="search" method="get" action="<?php echo HOME_URL; ?>">
          		<i class="icon icon-search header__search-button js-header-search-trigger"></i>
	        	<input type="hidden" name="post_type" value="product" />
	        	<input type="search" class="header__search-input js-header-search-input" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder' ) ?>" name="s" />
        	</form>
		</div>
	</div>
	<div class="header__bottom u-flex">
		<a href="#js-hero" class="js-toggle-trigger">HOME</a>
		<a href="#js-categories" class="js-toggle-trigger">カテゴリ</a>
		<a href="#js-ranking" class="js-toggle-trigger">ランキング</a>
		<a href="#js-latest" class="js-toggle-trigger">最新</a>
		<a href="#js-about" class="js-toggle-trigger">ABOUT</a>
	</div>
</header>