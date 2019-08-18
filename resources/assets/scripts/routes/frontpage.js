import Barba from 'barba.js/dist/barba.min';
import interviewSlider from '../modules/interviewSlider';
import fronttopSlider from '../modules/fronttopSlider';
import transition from '../transitions/frontpage';

export default {
  namespace: 'frontpage',
  onEnter: function () {
    // このページのcontainerが読み込みを開始した時。
    const history = Barba.HistoryManager.prevStatus();
    if (history === null) {
      // hide header only first loading at frontpage
      if (window.matchMedia('(max-width:1024px)').matches) {
        transition.mobileClear();
      } else {
        transition.desktopClear();
      }
    }
    let visionWidth, sliderWidth;
    if (window.matchMedia('(min-width:1700px)').matches) {
      visionWidth = window.innerWidth / 2 - 500 + 'px';
      sliderWidth = window.innerWidth / 2 + 500 + 'px';
    } else {
      visionWidth = '25%';
      sliderWidth = '75%';
    }

    interviewSlider();
    fronttopSlider();

    setTimeout(function () {
      if (window.matchMedia('(max-width:1024px)').matches) {
        transition.mobile();
      } else {
        transition.desktop(visionWidth, sliderWidth);
      }
    }, 1500);
  },
  onEnterCompleted: function () {

  },
  onLeave: function () {
    // // 次のページへのトランジションが始まった時。
  },
  onLeaveCompleted: function () {
    // このページのcontainerが完全に削除された時。
  },
};
