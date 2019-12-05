<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>{!! App\Controllers\App::getTitle() !!}</title>
  <meta name="description" content="{!! App\Controllers\App::getDescription() !!}" />
  <meta name="thumbnail" content="@asset('images/quma_logo_thumb.jpg')" />
  <link rel="icon" type="image/x-icon" href="@asset('images/favicon.png')" />
  <!--
    <PageMap>
    <DataObject type="thumbnail">
    <Attribute name="src" value="@asset('images/quma_logo_thumb.jpg')"/>
    <Attribute name="width" value="100"/>
    <Attribute name="height" value="130"/>
    </DataObject>
    </PageMap>
  -->

  <meta property="og:title" content="{!! App\Controllers\App::getTitle() !!}" />
  <meta property="og:type" content="{!! App\Controllers\App::getType() !!}" />
  <meta property="og:url" content="{!! App\Controllers\App::getUrl() !!}" />
  <meta property="og:image" content="@asset('images/quma_share_thumb.jpg')" />
  <meta property="og:site_name" content="QUMA" />
  <meta property="og:description" content="{!! App\Controllers\App::getDescription() !!}" />

  <meta property="fb:app_id" content="2405948933007487" />
  <meta property="article:publisher" content="https://www.facebook.com/quma51/" />
  {{-- <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@CanarieOfficial"> --}}

  @php(wp_head())
  <script>
    (function(d) {
      var config = {
        kitId: 'xef2ihu',
        scriptTimeout: 3000,
        async: true
      },
      h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);
  </script>
  <!-- Facebook Pixel Code -->
  <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '412851169231161');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=412851169231161&ev=PageView&noscript=1" /></noscript>
  <!-- End Facebook Pixel Code -->
  <!-- YDN -->
  <script async src="https://s.yimg.jp/images/listing/tool/cv/ytag.js"></script>
  <script>
    window.yjDataLayer = window.yjDataLayer || [];
    function ytag() { yjDataLayer.push(arguments); }
  </script>
  <!-- END YDN -->

</head>