import modal from '../modules/modal';

export default {
  namespace: 'events',
  onEnter: function () {
    // このページのcontainerが読み込みを開始した時。
  },
  onEnterCompleted: function () {
    $('.btn').on('click', modal.open)
    $('.overlay').on('click', modal.close);
    $('.close-button').on('click', modal.close);

    $('.submit-btn').on('click', function () {
      // modal.send();
    })

  },
  onLeave: function () {
    // // 次のページへのトランジションが始まった時。

  },
  onLeaveCompleted: function () {
    // このページのcontainerが完全に削除された時。
  },
};
