<!doctype html>
<html @php(language_attributes())>
  @include('partials.head')

  <body @php(body_class())>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NN942RH" height="0" width="0"
        style="display:none;visibility:hidden"></iframe></noscript>
    @php(do_action('get_header'))
    <div class="transition-overlay">
    </div>
    <div id="site-wrap" style="opacity: 0;">
      @include('partials.header')
      <div id="barba-wrapper" class="wrap container" role="document">
        <div data-namespace="{{ $current_template }}" class="content barba-container">
          <main class="main">
            @yield('content')
          </main>
          {{-- @if (App\display_sidebar())
          <aside class="sidebar">
            @include('partials.sidebar')
          </aside>
        @endif --}}
        </div>
      </div>
      @php(do_action('get_footer'))
      @include('partials.footer')
    </div>
    @php(wp_footer())
  </body>

</html>