import $ from 'jquery';
window.jQuery = $;
window.$ = $;

import search from './modules/search';
import toggleShow from './modules/toggle-show';
import pageTransition from './modules/page-transition';
import video from './modules/video';

search();
toggleShow();
pageTransition();
video();