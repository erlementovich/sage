<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('components.head.wrap')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('components.header.wrap')
        <main class="wrap">
          @yield('content')
        </main>
    @php do_action('get_footer') @endphp
    @include('components.footer.wrap')
    @php wp_footer() @endphp
  </body>
</html>
