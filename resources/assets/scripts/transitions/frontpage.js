export default {
  desktopClear() {
    $('#header').addClass('hidden');
  },
  mobileClear() {
    $('#headerLogo').addClass('first-transition');
    $('#headerActions').css('opacity', 0);
    $('#headerHamburder').css('opacity', 0);
  },
  mobile() {
    $('#headerLogo').removeClass('first-transition');
    $("#fronttopVision").css({
        'transform': 'translate3d(0,-100%,0)',
        'opacity': '0',
      })
      .delay(400)
      .queue(function (next) {
        $("#fronttopSlider").css({
          'width': '100%',
          'margin-left': '0',
        })
        next();
      })
      .delay(800)
      .queue(function (next) {
        $("#fronttopSlider").removeClass('inactive');
        $('#headerActions').css('opacity', 1);
        $('#headerHamburder').css('opacity', 1);
        next();
      });
  },
  desktop(visionWidth, sliderWidth) {
    $("#fronttopVision").css({
      'width': visionWidth,
    })
    $("#fronttopSlider").css({
        'width': sliderWidth,
        'transform': 'translate3d(0,0,0)',
      })
      .delay(1200)
      .queue(function (next) {
        $(this).removeClass('inactive');
        $('#header').removeClass("hidden");
        next();
      });
  },
}
