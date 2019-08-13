export default function () {
  // eslint-disable-next-line no-undef
  const data = interviews_data;
  const maxCount = 4;

  let count = 0;
  let slidable = true;

  let slideAnimation;
  if (window.matchMedia('(max-width:430px)').matches) {
    slideAnimation = '310px';
  } else if (window.matchMedia('(max-width:600px)').matches) {
    slideAnimation = '350px';
  } else if (window.matchMedia('(max-width:1199px)').matches) {
    slideAnimation = '490px';
  } else {
    slideAnimation = '550px';
  }

  $('#interviewsSliderPrevButton').on('click', prevAction);
  $('#interviewsSliderNextButton').on('click', nextAction);
  getShadow();
  sliderTouchHandler();

  function prevAction() {
    if (count > 0 && slidable) {
      slidable = false;
      count -= 1;
      sliderAction('prev');
    }
  }

  function nextAction() {
    if (count < maxCount && slidable) {
      slidable = false;
      count += 1;
      sliderAction('next');
    }
  }

  function getShadow() {
    $('.interview-cards').removeClass('active');
    $('.interview-cards').eq(count).addClass('active');
  }

  function sliderAction(direction) {
    changeContents(count);
    if (direction === 'prev') {
      $('.interview-cards').animate({
        left: `+=${slideAnimation}`,
      }, 100);
    } else if (direction === 'next') {
      $('.interview-cards').animate({
        left: `-=${slideAnimation}`,
      }, 100);
    }
    getShadow()
    setTimeout(function () {
      slidable = true;
    }, 800);
  }

  function changeContents(index) {
    $('#interviewsSlider-subtitle')
      .addClass('slider-contents-animation')
      .delay(400)
      .queue(function (next) {
        // $(this).text(data[index]['subtitle']);
        next();
      })
      .delay(400)
      .queue(function (next) {
        $(this).removeClass('slider-contents-animation');
        next();
      });

    $('#interviewsSlider-number')
      .addClass('slider-contents-animation')
      .delay(400)
      .queue(function (next) {
        $(this).text('#' + data[index]['number']);
        next();
      })
      .delay(400)
      .queue(function (next) {
        $(this).removeClass('slider-contents-animation');
        next();
      });
  }


  /*
   *  Slider for mobile
   */
  function sliderTouchHandler() {
    $('#interviewsSliderTouch').on('touchstart', onTouchStart); //指が触れたか検知
    $('#interviewsSliderTouch').on('touchmove', onTouchMove); //指が動いたか検知
    $('#interviewsSliderTouch').on('touchend', onTouchEnd); //指が離れたか検知
    let direction, position;

    //スワイプ開始時の横方向の座標を格納
    function onTouchStart(event) {
      position = getPosition(event);
      direction = ''; //一度リセットする
    }

    //スワイプの方向（left／right）を取得
    function onTouchMove(event) {
      if (position - getPosition(event) > 10) {
        // 10px以上移動しなければスワイプと判断しない
        direction = 'left'; //左と検知
      } else if (position - getPosition(event) < -10) {
        // 10px以上移動しなければスワイプと判断しない
        direction = 'right'; //右と検知
      }
    }

    function onTouchEnd() {
      if (direction == 'right') {
        prevAction();
      } else if (direction == 'left') {
        nextAction();
      }

      setTimeout(function () {
        slidable = true;
      }, 800);
    }

    //横方向の座標を取得
    function getPosition(event) {
      return event.originalEvent.touches[0].pageX;
    }
  }
}
