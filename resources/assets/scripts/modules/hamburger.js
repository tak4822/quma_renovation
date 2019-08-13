export default function () {
  $('.hamburger').on('click', function () {
    if ($(this).hasClass('is-active')) {
      $('.nav-primary')
        .removeClass('active')
        .find("li")
        .removeClass('active');
      $('.global-nav .container').removeClass("is-active");
      $(this).removeClass('is-active');
    } else {
      $(this).addClass('is-active');
      $('.global-nav .container').addClass("is-active");
      $('.nav-primary')
        .addClass("active")
        .delay(500)
        .find("li")
        .each(function (i) {
          $(this).delay(100 * i).queue(function (next) {
            $(this).addClass("active");
            next();
          })
        });
    }
  })
  $('.nav-primary a').click(function () {
    $('.hamburger').removeClass('is-active');
    $('.nav-primary').removeClass('active');
  })
}
