import {
  WOW,
} from 'wowjs';

export default function (
  currentStatus,
  oldStatus,
  barbaContainer,
  newPageRawHTML
) {
  // if ( Barba.HistoryManager.history.length === 1 ) {  // ファーストビュー
  //   return; // この時に更新は必要ありません
  // }

  if (
    document.location.hostname !== 'localhost' &&
    document.location.hostname !== 'xcrap.local'
  ) {
    (function (w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js',
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NN942RH')

    // Googleアナリティクスへ送信
    dataLayer.push({ // eslint-disable-line no-undef
      'newPageUrl': location.pathname,
      event: 'pageLoaded',
    });
  }



  window.scrollTo(0, 0); // page goes to top

  // change head contents
  const $newPageHead = $('<head />').html(
    $.parseHTML(
      newPageRawHTML.match(/<head[^>]*>([\s\S.]*)<\/head>/i)[0],
      document,
      true
    )
  );
  // 変更したいタグ(ご自身の環境に合わせて適宜変更してください)
  const headTags = [
    'link[rel="canonical"]',
    'link[rel="shortlink"]',
    'link[rel="alternate"]',
    'meta[name="description"]',
    'meta[property^="og"]',
    'meta[name^="twitter"]',
    'meta[name="robots"]',
  ].join(',');
  $('head')
    .find(headTags)
    .remove(); // タグを削除する
  $newPageHead.find(headTags).appendTo('head'); // タグを追加する

  // change header class
  const link = currentStatus.url.split(window.location.origin)[1].substring(1); // get path of current page

  const navigation = document.querySelector('.nav-primary');
  const navigationLinks = navigation.querySelectorAll('.menu-item');
  const navigationLinkIsActive = navigation.querySelector(`[href="/${link}"]`);

  Array.prototype.forEach.call(navigationLinks, (navigationLink) => navigationLink.classList.remove('current_page_item')); // remove CSS class 'is-active' from all .navigation__links

  if (navigationLinkIsActive) {
    navigationLinkIsActive.parentNode.classList.add('current_page_item'); // add CSS class to current .navigation__link
  }


  const script = barbaContainer.querySelector('script');
  if (script !== null) {
    eval(script.innerHTML); // execute inline script
  }

  // const instEmbed = document.querySelector('.instagram-media');
  // if (instEmbed !== null) {
  //   window.instgrm.Embeds.process(); // execute instagram script
  //   // instEmbed.style.margin = '0 auto';
  // }

  let offset;
  if (window.matchMedia('(max-width:1024px)').matches) {
    offset = 150;
  } else {
    offset = 300;
  }

  const wow = new WOW({
    offset,
    live: false,
  })
  wow.init();

  window.scrollTo(0, 1); // scroll for firing wowjs
}
