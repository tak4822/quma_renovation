export default function () {
  const h = $(window).height();
  const w = $(window).width();

  const img = $('<img />')
    .attr('src', require('../../images/first_loading.gif'))
    .css({
      width: '100px',
      position: 'fixed',
      top: h / 2 - 50 + 'px',
      left: w / 2 - 50 + 'px',
    });

  $('.transition-overlay')
    .append(img)
    .height(h)
    .width(w)
    .css({
      top: 0,
    })
    .fadeIn(100);

  $(window).on('load', function () {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    document.body.scrollIntoView();

    $('.transition-overlay')
      .delay(1500)
      .fadeOut(300);
    $('#site-wrap').css('opacity', 1);
  });
}
