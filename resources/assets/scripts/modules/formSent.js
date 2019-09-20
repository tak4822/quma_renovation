export default {
  open() {
    $('#formSent')
      .css('display', 'block')
      .delay(300)
      .queue(function (next) {
        $('.overlay')
          .css('opacity', 0.6)
          .siblings('.modal')
          .addClass('active');
        next();
      })
  },

  close() {
    $('#formSent')
      .find('.modal')
      .removeClass('active')
      .siblings('.overlay')
      .css('opacity', 0)
      .delay(500)
      .queue(function (next) {
        $('#formSent')
          .css('display', 'none');
        next();
      })
  },
}
