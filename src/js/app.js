import $ from 'jquery';
window.jQuery = $;
window.$ = $;

import search from './modules/search';
import toggleShow from './modules/toggle-show';
import pageTransition from './modules/page-transition';
import video from './modules/video';
import truncate from './modules/truncate';
import swipeActions from './modules/swipe-actions';

search();
toggleShow();
pageTransition();
video();
truncate();
swipeActions();