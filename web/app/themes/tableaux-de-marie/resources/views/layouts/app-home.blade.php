<div class="max-w-full mx-auto">
    @include('sections.header')

    <main id="main" class="main w-full">
        @include('partials.homepage.hero')
        @include('partials.homepage.about')
        @include('partials.homepage.gallery')
        @include('partials.homepage.testimonials')
        @include('partials.homepage.ask')
        @include('partials.homepage.expo')
        @include('partials.homepage.press')
    </main>

    @include('sections.footer')
</div>
