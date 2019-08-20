export default function () {
  $('input').on('focus', function () {
    $(this)
      .parent()
      .siblings('.input-head')
      .addClass('focused');
  })
}
