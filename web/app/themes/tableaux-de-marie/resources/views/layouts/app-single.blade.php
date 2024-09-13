<div class="max-w-full mx-auto">
    @include('sections.header')

    <div class="max-w-full mx-auto">
        @include('partials.page-header')

        <main id="main" class="main w-full bg-art-dark">
            @yield('content')
        </main>
    </div>


    @include('sections.footer')
</div>
