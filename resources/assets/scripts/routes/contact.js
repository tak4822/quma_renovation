import form from '../modules/form';
import formSent from '../modules/formSent';

export default {
  namespace: 'contact',
  onEnter: function () {
    // このページのcontainerが読み込みを開始した時。
  },
  onEnterCompleted: function () {
    form();

    $("#formSent").find('.overlay').on('click', formSent.close);
    $("#formSent").find('.close-button').on('click', formSent.close);

    // when form sent
    document.addEventListener('wpcf7mailsent', function () {

      window.dataLayer = window.dataLayer || [];
      window.dataLayer.push({
        'event': 'contact',
      });

      // facebook pixel code
      fbq('track', 'Contact'); // eslint-disable-line no-undef

      setTimeout(function () {
        formSent.open();
      }, 1000);
    }, false);
  },
  onLeave: function () {
    // // 次のページへのトランジションが始まった時。

  },
  onLeaveCompleted: function () {
    // このページのcontainerが完全に削除された時。
  },
};
