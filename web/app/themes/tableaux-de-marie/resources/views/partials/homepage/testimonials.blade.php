<section id="testimonials" class="relative w-full overflow-hidden flex items-center justify-center" >
    <div class="max-w-screen-xl px-8 xl:px-24 mx-auto py-32">
        <div class="text-center flex flex-col items-center justify-center gap-12 p-8">
            <img src="@asset('images/icon-quote.svg')" class="w-24" />
            <p class="text-white text-xl font-title"><i>{{get_field('quote_section_desc')}}</i></p>
            <span class="text-white text-lg">{{get_field('quote_section_author')}}</span>
        </div>
    </div>

    <div class="bg-art-medium absolute top-0 left-0 h-full w-full -z-20">
        <img src="{{get_field('quote_section_background')}}" class="object-cover object-center  h-full w-screen opacity-30"/>
    </div>

</section>
