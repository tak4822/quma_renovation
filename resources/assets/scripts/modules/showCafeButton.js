let scrollTop, percentage, contentsHeight, windowHeight, height, showButton = 0;

function scroll() {
  scrollTop = document.documentElement.scrollTop;
  percentage = scrollTop / height * 100;
  if (!showButton && percentage > 90) {
    showButton = true;
    $('#cafeButton').addClass('show');
  }
}

export default {
  set() {
    percentage = 0;
    contentsHeight = document.documentElement.querySelector(".single-contents").clientHeight;
    windowHeight = window.innerHeight;
    height = contentsHeight - windowHeight;
    showButton = false;
    window.addEventListener("scroll", scroll);
  },
  remove() {
    window.removeEventListener("scroll", scroll);
    $('#cafeButton').removeClass('show');
  },
}
