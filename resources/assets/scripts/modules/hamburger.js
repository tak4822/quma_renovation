function close() {
  $('.nav-bottom-container ')
    .removeClass('active')
    .find("li")
    .removeClass('active');
  $('.sns-icon').removeClass('active');
  $('.hamburger').removeClass('is-active');
}

function open() {
  $('.hamburger').addClass('is-active');
  $('.sns-icon').addClass('active');
  $('.nav-bottom-container')
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

export default function () {
  $('.hamburger').on('click', function () {
    if ($(this).hasClass('is-active')) {
      close();
    } else {
      open();
    }
  })
  $('.global-nav a').click(function () {
    close();
  })
}
