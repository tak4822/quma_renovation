import Barba from 'barba.js/dist/barba.min';
export default function () {
  var autoSlideTimeout;
  // eslint-disable-next-line no-undef
  const data = front_top_data;

  const $slider = $(".fronttop-slider");
  const $slideBGs = $(".slide__bg");
  const numOfSlides = $(".slide").length - 1;
  const animTime = 1000;
  const autoSlideDelay = 4000;

  // eslint-disable-next-line no-unused-vars
  let animating = false;
  // eslint-disable-next-line no-unused-vars
  let diff = 0;
  let curSlide = 0;

  // reset autoSlider when page changed
  Barba.Dispatcher.on('linkClicked', function () {
    window.clearTimeout(autoSlideTimeout);
  });

  $('#fronttopSliderPrevButton').on('click', navigateLeft);
  $('#fronttopSliderNextButton').on('click', navigateRight);

  function adjuctButtons() {
    $('#fronttopSliderPrevButton').removeClass('disabled');
    $('#fronttopSliderNextButton').removeClass('disabled');
    if (curSlide === 0) {
      $('#fronttopSliderPrevButton').addClass('disabled');
    } else if (curSlide === numOfSlides) {
      $('#fronttopSliderNextButton').addClass('disabled');
    }
  }

  adjuctButtons();

  function autoSlide() {
    autoSlideTimeout = setTimeout(function () {
      curSlide++;
      if (curSlide > numOfSlides) curSlide = 0;
      changeSlides();
    }, autoSlideDelay);
  }


  autoSlide();

  function animateContents(el) {
    $('#fronttopSlider-' + el)
      .addClass('fronttop-slider-contents-animation')
      .delay(400)
      .queue(function (next) {
        $(this).text(data[curSlide][el]);
        next();
      })
      .delay(400)
      .queue(function (next) {
        $(this).removeClass('fronttop-slider-contents-animation');
        next();
      });
  }

  function changeContents() {
    animateContents('page-title');
    animateContents('page-subtitle');
    animateContents('title');
    animateContents('subtitle');
    animateContents('number');
    $('#fronttopSlider-link').attr("href", data[curSlide]['link'])
  }

  function changeSlides(instant) {
    if (!instant) {
      animating = true;
      $slider.addClass("animating");
      $slider.css("top");
      $(".slide").removeClass("active");
      $(".slide-" + curSlide).addClass("active");
      changeContents();
      adjuctButtons();
      setTimeout(function () {
        $slider.removeClass("animating");
        animating = false;
      }, animTime);
    }
    window.clearTimeout(autoSlideTimeout);
    $slider.css("transform", "translate3d(" + -curSlide * 100 + "%,0,0)");
    $slideBGs.css("transform", "translate3d(" + curSlide * 50 + "%,0,0)");
    diff = 0;
    autoSlide();
  }

  function navigateLeft() {
    if (animating) return;
    if (curSlide > 0) curSlide--;
    changeSlides();
  }

  function navigateRight() {
    if (animating) return;
    if (curSlide < numOfSlides) curSlide++;
    changeSlides();
  }

  $(document).on("mousedown touchstart", ".fronttop-slider", function (e) {
    if (animating) return;
    window.clearTimeout(autoSlideTimeout);
    var startX = e.pageX || e.originalEvent.touches[0].pageX,
      winW = $(window).width();
    diff = 0;

    $(document).on("mousemove touchmove", function (e) {
      var x = e.pageX || e.originalEvent.touches[0].pageX;
      diff = (startX - x) / winW * 70;
      if ((!curSlide && diff < 0) || (curSlide === numOfSlides && diff > 0)) diff /= 2;
      $slider.css("transform", "translate3d(" + (-curSlide * 100 - diff) + "%,0,0)");
      $slideBGs.css("transform", "translate3d(" + (curSlide * 50 + diff / 2) + "%,0,0)");
    });
  });

  $(document).on("mouseup touchend", function () {
    $(document).off("mousemove touchmove");
    if (animating) return;
    if (!diff) {
      changeSlides(true);
      return;
    }
    if (diff > -8 && diff < 8) {
      changeSlides();
      return;
    }
    if (diff <= -8) {
      navigateLeft();
    }
    if (diff >= 8) {
      navigateRight();
    }
  });
}
