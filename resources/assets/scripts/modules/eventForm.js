export default {
  open() {
    $('#eventForm')
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
    $('#eventForm')
      .find('.modal')
      .removeClass('active')
      .siblings('.overlay')
      .css('opacity', 0)
      .delay(500)
      .queue(function (next) {
        $('#eventForm')
          .css('display', 'none');
        next();
      })
  },

  send() {
    $('#eventForm')
      .find('.modal')
      .addClass('send')
      .siblings('.overlay')
      .css('opacity', 0)
      .delay(500)
      .queue(function (next) {
        $('#eventForm')
          .css('display', 'none');
        next();
      })
  },
}
