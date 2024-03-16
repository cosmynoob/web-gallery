<!doctype html>
<html @php(language_attributes())>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @php(do_action('get_header'))
    @php(wp_head())
  </head>

  <body @php(body_class())>
    @php(wp_body_open())

    <div id="app">

      @include('sections.header')

      <main id="main" class="main w-full">
        @include('partials.homepage.hero')
        @include('partials.homepage.about')
        @include('partials.homepage.gallery')
        @include('partials.homepage.testimonials')
        @include('partials.homepage.ask')
        @include('partials.homepage.expo')
        @include('partials.homepage.press')
        @include('partials.homepage.contact')
      </main>
    </div>

    @php(do_action('get_footer'))
    @php(wp_footer())
  </body>
</html>
