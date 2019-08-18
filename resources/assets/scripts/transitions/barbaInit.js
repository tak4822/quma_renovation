import Barba from 'barba.js/dist/barba.min';
import BarbaOnEveryPage from './onEveryPage';
import setting from './barbasettings';
import baseAnimation from './baseAnimation';

export default function (views) {
  setting();

  Barba.Dispatcher.on('newPageReady', BarbaOnEveryPage);

  // Barba Google Tagmaneger
  Barba.Dispatcher.on('initStateChange', function () {

  });

  const transition = Barba.BaseTransition.extend(baseAnimation);

  Barba.Pjax.getTransition = () => {
    return transition;
  };

  views.forEach(view => Barba.BaseView.extend(view).init());

  setTimeout(function () {
    // wait for very first loading
    Barba.Pjax.start();
    Barba.Prefetch.init();
  }, 1000);
}
