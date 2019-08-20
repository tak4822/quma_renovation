import modal from '../modules/modal';
import form from '../modules/form';

export default {
  namespace: 'events',
  onEnter: function () {
    // このページのcontainerが読み込みを開始した時。
  },
  onEnterCompleted: function () {
    console.log('evenst')
    form();
    $('.btn').on('click', modal.open)
    $('.overlay').on('click', modal.close);
    $('.close-button').on('click', modal.close);

    // when form sent
    document.addEventListener('wpcf7mailsent', modal.close, false);

  },
  onLeave: function () {
    // // 次のページへのトランジションが始まった時。

  },
  onLeaveCompleted: function () {
    // このページのcontainerが完全に削除された時。
  },
};
