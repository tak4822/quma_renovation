import Barba from 'barba.js/dist/barba.min';

export default {
  namespace: 'singles',
  onEnter: function () {
    // このページのcontainerが読み込みを開始した時。
    const prevStatus = Barba.HistoryManager.prevStatus();
    if (prevStatus !== null) {
      $("#breadBackButton").attr('href', prevStatus.url);
    }
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
