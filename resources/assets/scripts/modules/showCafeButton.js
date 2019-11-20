let body, html, scrollTop, percentage, pageHeight, windowHeight, height, showButton = 0;

function scroll() {
  scrollTop = document.documentElement.scrollTop;
  percentage = scrollTop / height * 100;
  console.log(percentage);
  if (!showButton && percentage > 60) {
    showButton = true;

    $('#cafeButton').addClass('show');
  }
}

export default {
  set() {
    body = document.body;
    html = document.documentElement;
    scrollTop = 0;
    percentage = 0;


    pageHeight = Math.max(body.scrollHeight, body.offsetHeight,
      html.clientHeight, html.scrollHeight, html.offsetHeight);
    windowHeight = window.innerHeight;
    height = pageHeight - windowHeight;

    showButton = false;

    console.log('set');
    window.addEventListener("scroll", scroll);
  },
  remove() {
    console.log('remove');
    window.removeEventListener("scroll", scroll);
    $('#cafeButton').removeClass('show');
  },
}
