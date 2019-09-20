/* eslint-disable no-undef */
export default function () {

  // prevent from refreshing page after sent
  var loader = $(".main").find('.ajax-loader');
  if (!loader.length) {
    $('div.wpcf7 > form').each(function () {
      var $form = $(this);
      wpcf7.initForm($form);
      if (wpcf7.cached) {
        wpcf7.refill($form);
      }
    });
  }

  $('input').on('focus', function () {
    $(this)
      .parent()
      .siblings('.input-head')
      .addClass('focused');
  })
}
