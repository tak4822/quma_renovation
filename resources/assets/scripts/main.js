import 'jquery';
import {
  WOW,
} from 'wowjs';

import firstTransition from './transitions/firstTransition';
firstTransition();

import common from './common';
// Load Events
jQuery(document).ready(() => {
  common();
  const wow = new WOW({
    offset: 250,
  })
  wow.init();
});

// import local dependencies
import barbaInit from './transitions/barbaInit';
import frontpage from './routes/frontpage';
import contact from './routes/contact';
import events from './routes/events';
import posts from './routes/posts';
import others from './routes/others';

const routes = [frontpage, contact, events, posts, others];


// 最初のページローディングのスピードはこっちで調節
// ページ間でのトランジションはBarba.jsで調節
$(window).on('load', function () {
  barbaInit(routes);
});
