export default {
  open() {
    $('.modal-container')
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
    $('.modal')
      .removeClass('active')
      .siblings('.overlay')
      .css('opacity', 0)
      .delay(500)
      .queue(function (next) {
        $('.modal-container')
          .css('display', 'none');
        next();
      })
  },

  send() {
    $('.modal')
      .addClass('send')
      .siblings('.overlay')
      .css('opacity', 0)
      .delay(500)
      .queue(function (next) {
        $('.modal-container')
          .css('display', 'none');
        next();
      })
  },
}
