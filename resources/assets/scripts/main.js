// import local dependencies
// import Router from './util/Router';
// import common from './routes/common';
// import home from './routes/home';
// import aboutUs from './routes/about';

// /** Populate Router instance with DOM routes */
// const routes = new Router({
//   // All pages
//   common,
//   // Home page
//   home,
//   // About Us page, note the change from about-us to aboutUs.
//   aboutUs,
// });

// // Load Events
// jQuery(document).ready(() => routes.loadEvents());

// import external dependencies
import 'jquery';

import firstTransition from './transitions/firstTransition';
firstTransition();

import common from './common';
// Load Events
jQuery(document).ready(() => {
  common();
});

// import local dependencies
import barbaInit from './transitions/barbaInit';
import frontPage from './routes/frontPage';
// import articles from './views/articles';
// import posts from './views/posts';
// import others from './views/others';

const routes = [frontPage];


// 最初のページローディングのスピードはこっちで調節
// ページ間でのトランジションはBarba.jsで調節
$(window).on('load', function () {
  barbaInit(routes);
});
