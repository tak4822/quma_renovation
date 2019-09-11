import form from '../modules/form';
import formSent from '../modules/formSent';

export default {
  namespace: 'contact',
  onEnter: function () {
    // このページのcontainerが読み込みを開始した時。
  },
  onEnterCompleted: function () {
    form();

    // when form sent
    document.addEventListener('wpcf7mailsent', function () {
      formSent.open();
    }, false);
  },
  onLeave: function () {
    // // 次のページへのトランジションが始まった時。

  },
  onLeaveCompleted: function () {
    // このページのcontainerが完全に削除された時。
  },
};
