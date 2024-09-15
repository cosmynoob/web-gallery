<div class="max-w-full mx-auto">
    
    @if (is_front_page())
        @include('sections.header')
    @else
        @include('sections.header_color')
    @endif

    <div class="max-w-full mx-auto">
        <main id="main" class="main w-full pt-48 pb-32">
            @yield('content')
        </main>
    </div>


    @include('sections.footer')
</div>
