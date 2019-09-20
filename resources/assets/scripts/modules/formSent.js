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
<<<<<<< HEAD
        $('#formSent')
=======
        $('#eventForm')
>>>>>>> baf87d17d6c2222631eb0049d6fe7a20c3e6427d
          .css('display', 'none');
        next();
      })
  },
}
