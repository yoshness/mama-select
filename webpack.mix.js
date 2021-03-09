const { mix } = require('laravel-mix');

const SRC_CSS = 'src/sass',
      SRC_FONTS = 'src/fonts',
      SRC_IMAGES = 'src/images',
      ASSETS_FOLDER = './wp-content/themes/mama-select/assets';

mix.sass(`${SRC_CSS}/style.scss`, ASSETS_FOLDER)
   .options({
      processCssUrls: false
   })
   .copyDirectory(SRC_FONTS, `${ASSETS_FOLDER}/fonts`)
   .copyDirectory(SRC_IMAGES, `${ASSETS_FOLDER}/images`);