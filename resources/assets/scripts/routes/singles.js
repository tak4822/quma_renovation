import Barba from 'barba.js/dist/barba.min';
import showCafeButton from '../modules/showCafeButton';
export default {
  namespace: 'singles',
  onEnter: function () {
    // このページのcontainerが読み込みを開始した時。
    const prevStatus = Barba.HistoryManager.prevStatus();
    if (prevStatus !== null) {
      $("#breadBackButton").attr('href', prevStatus.url);
    }
    console.log("hello");
    showCafeButton.set();
  },
  onEnterCompleted: function () {

  },
  onLeave: function () {
    // // 次のページへのトランジションが始まった時。
    showCafeButton.remove();
  },
  onLeaveCompleted: function () {
    // このページのcontainerが完全に削除された時。
  },
};
