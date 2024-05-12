<div class="max-w-full mx-auto">
    @include('sections.header')

    <div class="max-w-full mx-auto">
        @include('partials.page-header')

        <main id="main" class="main w-full py-32">

            <div class="max-w-screen-3xl px-8 mx-auto">
                @yield('content')
        </main>
    </div>


    @include('sections.footer')
</div>
