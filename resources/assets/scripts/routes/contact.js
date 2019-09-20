import form from '../modules/form';
import formSent from '../modules/formSent';

export default {
  namespace: 'contact',
  onEnter: function () {
    // このページのcontainerが読み込みを開始した時。
  },
  onEnterCompleted: function () {
    form();

<<<<<<< HEAD
    $("#formSent").find('.overlay').on('click', formSent.close);
    $("#formSent").find('.close-button').on('click', formSent.close);

    // when form sent
    document.addEventListener('wpcf7mailsent', function () {

      window.dataLayer = window.dataLayer || [];
      window.dataLayer.push({
        'event': 'contact',
      });

      setTimeout(function () {
        formSent.open();
      }, 1000);
=======
    // when form sent
    document.addEventListener('wpcf7mailsent', function () {
      formSent.open();
>>>>>>> baf87d17d6c2222631eb0049d6fe7a20c3e6427d
    }, false);
  },
  onLeave: function () {
    // // 次のページへのトランジションが始まった時。

  },
  onLeaveCompleted: function () {
    // このページのcontainerが完全に削除された時。
  },
};
